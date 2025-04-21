<?php
include "koneksi.php";

$NIM = $_POST["NIM"];
$Nama = $_POST["Nama"];
$Tanggal_Lahir = $_POST["Tanggal_Lahir"];
$No_hp = $_POST["No_hp"];
$email = $_POST["email"];
$id_prodi = $_POST["id"];

$query = "UPDATE mahasiswa SET nama = '$Nama', Tanggal_Lahir ='$Tanggal_Lahir', No_hp ='$No_hp',
email ='$email', id ='$id_prodi' WHERE NIM = '$NIM'";

mysqli_query($conn, $query);

header("location:index.php");
?>