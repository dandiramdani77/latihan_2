<?php
session_start();
if(!isset($_SESSION['iduser'])) {
	echo "<script>window.location='login.php';</script>";
}

include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Siswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
	<div class="judul">		
		<h2>Data Siswa</h2>
		<h3>SMK CIJANGKAR</h3>
	</div>

	<br />
	<div align="right">
		(Selamat datang, <?=$_SESSION['username']?>) |   
		<a href="logout.php">
			<span style="color:#ff3333">Logout</span>
		</a>
	</div>
	<div align="left">
		<a href="index.php">
			<span style="color:#ff3333">kembali</span>
		</a>
	</div>
	<div align="left">
		
		<a href="siswa_tambah.php">
			<button>+ Tambah Data Baru</button>
		</a>
	</div>
	<h3>Data Siswa</h3>
	<div style="overflow: auto;">
		<table border="1" class="table">
			<tr>
				<th>No.</th>
				<th>Nama siswa</th>
				<th>NIS</th>
				<th>Kelas</th>
				<th>Alamat</th>
				<th>Aksi</th>
					
			</tr>
			<?php 
			$query = $con->query("SELECT * FROM siswa"); // tampil menggunakan method query
			$nomor = 1;
			while($data = $query->fetch(PDO::FETCH_ASSOC)) { ?>
				<tr>
					<td align="center"><?php echo $nomor++; ?>.</td>
					<td><?php echo $data['nama']; ?></td>
					<td><?php echo $data['nis']; ?></td>
					<td><?php echo $data['kelas']; ?></td>
					<td><?php echo $data['alamat']; ?></td>
					
					<td width="90px" align="center">
						<a href="siswa_form_edit.php?id=<?php echo $data['nis']; ?>"><button>Edit</button></a> 
						<a href="siswa_proses_hapus.php?id=<?php echo $data['nis']; ?>" onclick="return confirm('Yakin hapus data?')"><button>Hapus</button></a>					
					</td>
				</tr>
			<?php
			} ?>
		</table>
	</div>
</body>
</html>

