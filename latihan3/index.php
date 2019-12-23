<html>
	<head>
		<title>Latihan</title>
		<style>
			table {
				border: 2px solid black;
				border-collapse: collapse;
			}
			th {
				border: 2px solid black;
			}
			td {
				border: 1px solid black;
				}
		</style>
	</head>
	<body>
		<a href="tambah.php">Tambah Data</a>
		<br>
		<br>
		<table cellpadding="10" style="">
			<tr>
				<th>No</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Alamat</th>
				<th>Tgl Lahir</th>	
				<th></th>
			</tr>
			<?php
			include 'koneksi.php';
			$nomor  = 1;
			$sql    = "select * from mahasiswa";
			$result = mysqli_query($connect,$sql);
			if(mysqli_num_rows($result)>0){
				while ($row = mysqli_fetch_assoc($result)) {
					echo "
					<tr>
						<td>".$nomor++."</td>
						<td>".$row['nim']."</td>
						<td>".$row['nama']."</td>
						<td>".$row['email']."</td>
						<td>".$row['alamat']."</td>
						<td>".$row['tgl_lahir']."</td>
						<td>
							<a href='edit.php?id=".$row['id']."'>Edit</a>
							<a href='delete.php?id=".$row['id']."' onclick='javascript:return confirm(\"Apakah anda yakin ingin menghapus data ini?\")'>Hapus</a>
						</td>
					</tr>
					";
				}
			}
			?>
		</table>
	</body>
</html>
