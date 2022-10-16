<?php
session_start();
if(!isset($_SESSION['iduser'])) {
	echo "<script>window.location='login.php';</script>";
}

include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Siswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<div class="judul">		
		<h2>Data Siswa</h2>
		<h3>SMK CIJANGKAR</h3>
	</div>

	<br />
	<a href="index.php">
		<button>< Lihat Semua Data</button>
	</a>
	
	<h3>Edit Data Siswa</h3>
	<form action="siswa_proses_edit.php" method="post">
		<?php
		$nis = $_GET['id'];

		$query = $con->prepare("SELECT * FROM siswa WHERE nis = :nis"); // tampil menggunakan method prepare
		$query->bindValue(':nis', $nis); // menggunakan binValue
		$query->execute();
		$data = $query->fetch();
		?>		
		<table>
			<tr>
				<td>Nama Siswa</td>
				<td>
					
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>" required>
				</td>					
			</tr>	
			<tr>
				<td>NIS</td>
				<input type="hidden" name="nis" value="<?php echo $data['nis'] ?>">
				<td><input type="nis" name="merk" value="<?php echo $data['nis'] ?>" required></td>					
			</tr>	
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas" value="<?php echo $data['kelas'] ?>" required></td>					
			</tr>	
			
			<tr>
				<td>Alamat</td>
				<td><textarea name="alamat" required><?php echo $data['alamat'] ?></textarea></td>					
			</tr>
				<td></td>
				<td><button type="submit">Simpan</button></td>				
			</tr>				
		</table>
	</form>
</body>
</html>