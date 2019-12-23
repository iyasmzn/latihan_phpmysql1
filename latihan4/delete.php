<?php
	include 'connection.php';
	$id = $_GET['id'];
	$delete = "DELETE FROM santri WHERE id = '$id'";
	mysqli_query($connect, $delete);
	header('location:index.php')
?>