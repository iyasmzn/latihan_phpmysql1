<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles/index.css">
	<title>Data Santri</title>
</head>
<body>
	<div>
	<a href="add.php">Plus Plus++</a>
	<table>
		<tr>
			<th>Nomor</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>Set</th>
		</tr>
		<?php 
			include 'connection.php';
			$no = 1;
			$sql = "SELECT * FROM santri";
			$res = mysqli_query($connect,$sql);
			function gender($gender) {
				// if ($gender) {
				// 	return "Laki - Laki";
				// }
				// else {
				// 	return "Perempuan";
				// }
				return ($gender) ? "Laki - Laki":"Perempuan";
			}
			if (mysqli_num_rows($res)>0) {
				while ($row = mysqli_fetch_assoc($res)) {
					echo "
					<tr>
						<td>".$no++."</td>
						<td>".$row['name']."</td>
						<td>"
								.gender($row['gender']).
								// .(($row['gender']) ? "Laki - Laki" : "Perempuan").
						"</td>
						<td>".$row['address']."</td>
						<td>
							<a href='edit.php?id=".$row['id']."'>Edit</a>
							<a href='delete.php?id=".$row['id']."' onclick='javascript:return confirm(\" Apakah anda ingin menghapus data ini? \")'>Delete</a>
						</td>
					</tr>
					";
				}
			}
		?>
	</table>
	</div>
</body>
</html>