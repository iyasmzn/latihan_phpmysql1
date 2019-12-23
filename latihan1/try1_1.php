<html>
	<head>
		<title>TRY 1</title>
		<style>
			table td,th {
				padding: 5px;
			}
			table td {
				text-align: left;
				border: 2px solid white;
			}
			table th {
				border: 3px solid white;aaaa
			}
		</style>
	</head>
	<body>
		<table style="text-align: center; margin: auto;background-color: rgba(0,0,0,0.5);color: white;border-radius: 5px;padding: 10px;border: 3px solid black;">
			<tr>
				<th>NO</th>
				<th>ID</th>
				<th>NAMA</th>
				<th>ALAMAT</th>
				<th>UMUR</th>
			</tr>
			<?php
			
			    include	'try1.php';
			    $nomer = 1;
			    $sql = "select * from siswa";
			    $result = mysqli_query($con, $sql);
			    if (mysqli_num_rows($result)) {
			    	while ($baris = mysqli_fetch_assoc($result)) {
			    		echo "
			    			<tr>
			    				<td>".$nomer++."</td>
			    				<td>".$baris['id']."</td>
			    				<td>".$baris['name']."</td>
			    				<td>".$baris['address']."</td>
			    				<td>".$baris['age']."</td>
			    			</tr>
			    		";
			    	}
			    }
			
			?>
		</table>
	</body>
</html>
