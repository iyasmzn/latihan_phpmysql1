<?php
include 'koneksi.php';
$nim    = $_POST['nim'];
$nama   = $_POST['nama'];
$email  = $_POST['email'];
$alamat = $_POST['alamat'];
$tgl_lahir = $_POST['tgl_lahir'];

$sql = "insert into mahasiswa (nim, nama, email, alamat, tgl_lahir) values ('$nim','$nama','$email','$alamat','$tgl_lahir')";
mysqli_query($connect,$sql);
header('location:index.php');
?>
