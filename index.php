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
	<title>Halaman awal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
	<div class="judul">		
		<h2>Selamat Datang di Web Sekolah</h2>
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
		<a href="siswa.php">
			<button>Siswa</button>
		</a>
	</div>
	<div align="left">
		<a href="guru.php">
			<button>Guru</button>
		</a>
	</div>
	<div align="left">
		<a href="nilai.php">
			<button>Nilai</button>
		</a>
	</div>
	<div align="left">
		<a href="matpel.php">
			<button>Mata Pelajaran</button>
		</a>
	</div>
</body>
</html>

