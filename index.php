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
    <a href = "tambahmahasiswa.php">tambah</a>
    <table border= "1" cellspacing = "0" cellpadding = "1">
        <thead>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>No hp</th>
            <th>Email</th>
            <th>id</th>
        </thead>
        <tbody>
        <?php 
        $i = 1;
        foreach ($data as $d) : ?>
        <tr>
        <td><?= $i++; ?></td>
        <td><?= $d["NIM"] ?></td>
        <td><?= $d["Nama"] ?></td>
        <td><?= $d["Tanggal_Lahir"] ?></td>
        <td><?= $d["No_hp"] ?></td>
        <td><?= $d["email"] ?></td>
        <td><?= $d["id"] ?></td>
        
        

       </tr>
       <?php endforeach ; ?>  
        </tbody>
    </table>
</body>
</html>