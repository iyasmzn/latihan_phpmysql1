<?php
$serv = "localhost";
$user = "root";
$pas = "lillah";
$db = "latihan_4_siswa";

$connect = mysqli_connect($serv,$user,$pas,$db);

if (!$connect) {
	die("connection failed! Error = " . mysqli_connection_error());
}
?>