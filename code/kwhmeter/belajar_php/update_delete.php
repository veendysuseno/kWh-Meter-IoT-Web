<?php
include('config/connection.php');

$query = "DELETE FROM data WHERE id=2 ";
$delete = mysqli_query($conn, $query);

$query = "UPDATE data SET tanggal='13-08-2022' WHERE id=2 ";
$update = mysqli_query($conn, $query);

$query = "INSERT INTO data VALUES (NULL,'10-8-2022','18:22:31',219.12,0.1,45,0.02,50,0.30) ";
$create = mysqli_query($conn,$query);
