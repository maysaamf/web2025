<?php
include "koneksi.php";

$query = "SELECT * FROM prodi";
$data = ambildata($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPADU POLIBAN</title>
</head>
<body>
<h1>DATA PRODI</h1>
    <br>
    <table border= "1" cellspacing = "0" cellpadding = "1">
        <thead>
            <th>id</th>
            <th>Nama</th>
            <th>kaprodi</th>
            <th>jurusan</th>
        </thead>
        <tbody>
        <?php 
        $i = 1;
        foreach ($data as $d) : ?>
        <tr>
        <td><?= $i++; ?></td>
        <td><?= $d["Nama"] ?></td>
        <td><?= $d["kaprodi"] ?></td>
        <td><?= $d["jurusan"] ?></td>
       </tr>
       <?php endforeach ; ?>       
        </tbody>
    </table>
</body>
</html>