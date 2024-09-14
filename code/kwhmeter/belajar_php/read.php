<?php
include('config/connection.php');
$query = "SELECT * FROM data";
$read = mysqli_query($conn, $query);
if ($read) {
    while ($row = mysqli_fetch_assoc($read)) {
        echo $row['id'] . " " . $row['tanggal'] . " " . $row['waktu'] . " " . $row['voltage'] . " " . $row['current'] . " " . $row['power'] . " " . $row['energy'] . $row['freq'] . " " . $row['pf'] . "<br>";
    }
} else {
    echo "Data gagal dibaca" . mysqli_error($conn);
}
