<!DOCTYPE html>
<html lang="id">
    <head>
        <title>Belajar HTML</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <table>
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Voltage</th>
                    <th>Current</th>
                    <th>Power</th>
                    <th>Energy</th>
                    <th>Freq</th>
                    <th>Pf</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('config/connection.php');
                $query = "SELECT * FROM data";
                $read = mysqli_query($conn, $query);
                while($row = mysqli_fetch_array($read)){
                ?>
                <tr>
                    <td><?php echo $row['tanggal'] ?></td>
                    <td><?php echo $row['waktu'] ?></td>
                    <td><?php echo $row['voltage'] ?></td>
                    <td><?php echo $row['current'] ?></td>
                    <td><?php echo $row['power'] ?></td>
                    <td><?php echo $row['energy'] ?></td>
                    <td><?php echo $row['freq'] ?></td>
                    <td><?php echo $row['pf'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </body>
</html>