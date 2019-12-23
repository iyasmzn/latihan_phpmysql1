<?php
	include 'connection.php';
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];

	$sql = "INSERT INTO santri (name, gender, address) VALUES ('$name', '$gender', '$address')";
	mysqli_query($connect,$sql);
	header('location:index.php');
?>