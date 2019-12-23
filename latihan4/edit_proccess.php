<?php
	include 'connection.php';
	$id = $_POST['id'];
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];

	$update = "UPDATE santri SET name = '$name', gender = '$gender', address = '$address' WHERE id = '$id'";
	mysqli_query($connect, $update);
	header('location:index.php');
?>