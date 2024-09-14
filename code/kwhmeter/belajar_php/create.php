<?php
include('config/connection.php');
$query = "INSERT INTO data VALUES (NULL,'10-8-2022','18:22:31',219.12,0.1,45,0.02,50,0.30) ";
$create = mysqli_query($conn,$query);
if($create){
    echo "Berhasil Input Data";
}else{
    echo "Gagal Input Data" . mysqli_error($conn);
}
