<?php
include "koneksi.php";

$NIM = $_POST["NIM"];
$Nama = $_POST["Nama"];
$Tanggal_Lahir = $_POST["Tanggal_Lahir"];
$No_hp = $_POST["No_hp"];
$email = $_POST["email"];
$id_prodi = $_POST["id"];

$query = "INSERT INTO mahasiswa (NIM, Nama, Tanggal_Lahir, No_hp, email, id) VALUES ('$NIM', 
'$Nama', '$Tanggal_Lahir', '$No_hp', '$email', '$id_prodi')";

mysqli_query($conn, $query);

header("location:index.php");
?>