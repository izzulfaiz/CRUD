<html>
<head>
  <title>TAMBAH DATA</title>
</head>
<body>
  <h1>Tambah Data Kota</h1>
  <form method="post" action="dataTambah.php">
    <table cellpadding="8">
			<tr>			
				<td>Nama Kota</td>
				<td><input type="text" name="Name"></td>
			</tr>
			<tr>
				<td>Asal Negara</td>
				<td><input type="text" name="CountryCode"></td>
			</tr>
			<tr>
				<td>Wilayah</td>
				<td><input type="text" name="District"></td>
			</tr>
            <tr>
				<td>Total Populasi</td>
				<td><input type="number" name="Population"></td>
			</tr>
            
			<tr>
				<td></td>
				<td><input type="submit" value="submit"></td>
				<a href="index.php"><input type="button" value="Batal"></a>
			</tr>		
		</table>
	</form>

	<?php
	// if(isset($_POST['Submit'])) {
	// 	$nama_kota = $_POST['nama kota'];
	// 	$asal_negara = $_POST['asal negara'];
	// 	$wilayah = $_POST['wilayah'];
	// 	$total_populasi = $_POST['total populasi'];
		
	// 	include 'connection.php';
				
	// 	$result = mysqli_query($mysqli, "INSERT INTO city(nama kota,asal negara, wilayah, total populasi) VALUES('$nama_kota','$asal_negara', $wilayah, '$total_populasi')");
		
	// 	echo "data berhasil ditambahkan. <a href='index.php'>View Users</a>";
	// }
	?>
</body>
</html>

