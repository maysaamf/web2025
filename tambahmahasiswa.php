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
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <form action="tambahaksimahasiswa.php" method="post">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="NIM" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama" required></td>
            </tr>
            <tr>
                <td> Tanggal Lahir</td>
                <td><input type="date" name="Tanggal_Lahir" required></td>
            </tr>
            <tr>
                <td>No hp</td>
                <td><input type="text" name="No_hp" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td>
                    <select name="id">
                    <?php foreach($data as $d) : ?>    
                    <option value="<?php echo $d['id'] ?>"><?php echo $d['Nama'] ?></option>
                        <?php endforeach; ?>
                </select>
            </td>
            </tr>
        </table>
        <a href="index.php">Kembali</a>
    <button type="submit">Simpan</button>
    </form>
</body>
</html>