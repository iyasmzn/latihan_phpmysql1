<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<?php 
		include 'connection.php';
		$id= $_GET['id'];
		$data = "SELECT * FROM santri WHERE id=$id";
		$result = mysqli_query($connect, $data);
		$row = mysqli_fetch_assoc($result);
	?>
	<form action="edit_proccess.php" method="POST">
		<input type="text" name="id" value="<?php echo $id;?>" readonly style="width: 20px;">
		<table>
			<tr>
				<td><label for="inputName">Nama</label></td>
				<td>:</td>
				<td><input id="inputName" type="text" name="name" value="<?php echo $row['name'];?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<label for="LK">Laki-Laki</label>
						<input type="radio" name="gender" id="LK" value="1" <?= ($row['gender']) ? "checked" : "" ; ?> >
					<label for="PR">Perempuan</label>
						<input type="radio" name="gender" id="PR" value="0" <?= ($row['gender']) ? "" : "checked" ; ?> >
				</td>
			</tr>
			<tr>
				<td><label for="addressInput">Alamat</label></td>
				<td>:</td>
				<td><textarea id="addressInput" name="address"><?php echo $row['address']?></textarea></td>
			</tr>
			<tr>
				<td colspan="3"><button type="submit">Edit</button></td>
			</tr>
		</table>
	</form>
</body>
</html>