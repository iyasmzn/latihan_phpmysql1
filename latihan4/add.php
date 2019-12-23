<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="add_proccess.php" method="POST">
		<table>
			<tr>
				<td><label for="inputName">Nama</label></td>
				<td>:</td>
				<td><input id="inputName" type="text" name="name" placeholder="input your name here"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<label for="LK">Laki-Laki</label>
						<input type="radio" name="gender" id="LK" value="1">
					<label for="PR">Perempuan</label>
						<input type="radio" name="gender" id="PR" value="0">
				</td>
			</tr>
			<tr>
				<td><label for="addressInput">Alamat</label></td>
				<td>:</td>
				<td><textarea id="addressInput" name="address"></textarea></td>
			</tr>
			<tr>
				<td colspan="3"><button type="submit">Tambah</button></td>
			</tr>
		</table>
	</form>
</body>
</html>