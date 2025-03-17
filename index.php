<?php
include "koneksi.php";

$query = "SELECT * FROM mahasiswa";
$data = ambildata($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPADU</title>
</head>
<body>
    <h1>DATA MAHASISWA</h1>
    <br>
    <table border= "1" cellspacing = "0" cellpadding = "1">
        <thead>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
        </thead>
        <tbody>
        <?php 
        $i = 1;
        foreach ($data as $d) : ?>
        <tr>
        <td><?= $i++; ?></td>
        <td><?= $d["NIM"] ?></td>
        <td><?= $d["Nama"] ?></td>
       </tr>
       <?php endforeach ; ?>  
        </tbody>
    </table>
</body>
</html>