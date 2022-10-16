<?php
session_start();
if(!isset($_SESSION['iduser'])) {
	echo "<script>window.location='login.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Siswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<div class="judul">		
		<h2>Data Siswa</h2>
		<h3>SMK CIJANGKAR</h3>
	</div>

	<br />
	<a href="siswa.php">
		<button>< Lihat Semua Data</button>
	</a>

	<h3>Input Data Siswa</h3>
	<form action="siswa_proses_tambah.php" method="post">		
		<table>
			<tr>
				<td>Nama Siswa</td>
				<td><input type="text" name="nama" required></td>					
			</tr>	
			<tr>
				<td>NIS</td>
				<td><input type="text" name="nis" required></td>					
			</tr>	
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas" required></td>					
			</tr>	
				<td>Alamat</td>
				<td><textarea name="alamat" required></textarea></td>					
			</tr>
				<td></td>
				<td><button type="submit">Simpan</button></td>					
			</tr>				
		</table>
	</form>
	
</body>
</html>
