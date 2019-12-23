<?php
include 'koneksi.php';
$ID    = $_POST['id'];
$nim    = $_POST['nim'];
$nama   = $_POST['nama'];
$email  = $_POST['email'];
$alamat = $_POST['alamat'];
$tgl_lahir = $_POST['tgl_lahir'];

$sql = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', email = '$email', alamat = '$alamat', tgl_lahir = '$tgl_lahir' WHERE id = '$ID'";
mysqli_query($connect,$sql);
header('location:index.php');
?>
