<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location:login.html");
}
include "koneksi.php";

$query = "SELECT m.*, p.nama namaProdi FROM mahasiswa m join prodi p ON m.id = p.id";
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
    <a href="tambahmahasiswa.php">tambah</a>
    <table border="1" cellspacing="0" cellpadding="1">
        <thead>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>No hp</th>
            <th>Email</th>
            <th>Prodi</th>
            <th>Aksi</th>
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
                    <td><?= $d["namaProdi"] ?></td>
                    <td><a href="deletemahasiswa.php?nim=<?= $d['NIM']; ?>"
                            onclick="return confirm('Yakin Ingin hapus?')">Delete</a> |
                        <a href="editmahasiswa.php?nim=<?= $d['NIM']; ?>">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="logout.php">Logout</a>
</body>

</html>