<?php
include 'koneksi.php';
$nama=$_POST['nama'];
$nip = $_POST['nip'];
$no_hp = $_POST['no_hp'];
$email =$_POST['email'];

$insert = mysqli_query($koneksi, "INSERT INTO crudpegawai (nama,nip,no_hp,email) values ('$nama', '$nip', '$no_hp', '$email')");
header("location: index.php");


?>
