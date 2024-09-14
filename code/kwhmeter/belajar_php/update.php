<?php
include('config/connection.php');
$query = "UPDATE data SET tanggal='13-08-2022', waktu='19:20:21', voltage=220.45, current=0.5, power=80.12, energy=23.12, freq=60, pf=1 WHERE id=2 ";
$update = mysqli_query($conn,$query);
if($update){
    echo "Berhasil UPdate Data";
}else{
    echo "Gagal UPdate Data" . mysqli_error($conn);
}
