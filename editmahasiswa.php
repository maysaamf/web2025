<?php
include "koneksi.php";

$query = "SELECT * FROM prodi";
$data = ambildata($query);

$nim = $_GET['nim'];
$querymahasiswa = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
$datamahasiswa = ambildata($querymahasiswa);
$datamahasiswa = $datamahasiswa[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
</head>
<body>
    <form action="editaksimahasiswa.php" method="post">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="NIM" required value="<?=$datamahasiswa['NIM'];?>" readonly></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama" required value="<?=$datamahasiswa['Nama'];?>"></td>
            </tr>
            <tr>
                <td> Tanggal Lahir</td>
                <td><input type="date" name="Tanggal_Lahir" required value="<?=$datamahasiswa['Tanggal_Lahir'];?>"></td>
            </tr>
            <tr>
                <td>No hp</td>
                <td><input type="text" name="No_hp" required value="<?=$datamahasiswa['No_hp'];?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" required value="<?=$datamahasiswa['email'];?>"></td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td>
                    <select name="id">
                    <?php foreach($data as $d) : ?>    
                    <option value="<?php echo $d['id'] ?>"
                    <?=
                    $d['id'] == $datamahasiswa['id'] ?
                    "SELECTED" : "" ?>
                    ><?php echo $d['Nama'] ?></option>
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