<?php
include('config/connection.php');
$query = "DELETE FROM data WHERE id=1 ";
$delete = mysqli_query($conn,$query);
if($delete){
    echo "Berhasil Delete Data";
}else{
    echo "Gagal Delete Data" . mysqli_error($conn);
}
