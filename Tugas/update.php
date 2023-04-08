<?php
include 'koneksi.php';

$id=$_POST['id'];
$nama=$_POST['nama'];
$nip = $_POST['nip'];
$no_hp = $_POST['no_hp'];
$email =$_POST['email'];

$update = mysqli_query($koneksi, "UPDATE  crudpegawai SET nama='$nama', nip='$nip', no_hp='$no_hp', email='$email' WHERE id='$id'");
header("location: index.php");


?>
