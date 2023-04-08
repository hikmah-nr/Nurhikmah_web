<?php 
include 'koneksi.php';

$id=$_GET['id'];
mysqli_query($koneksi,"DELETE FROM crudpegawai where id='$id'");
header("location:index.php");
?>