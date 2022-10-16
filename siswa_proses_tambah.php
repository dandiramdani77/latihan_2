<?php 
session_start();
if(!isset($_SESSION['iduser'])) {
	echo "<script>window.location='login.php';</script>";
}
include "koneksi.php";

$nama = $_POST['nama'];
$nis = $_POST['nis'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];


$query = $con->prepare("INSERT INTO siswa (nama, nis, kelas, alamat) 
                        VALUES (:nama, :nis, :kelas, :alamat)");

$query->bindparam(':nama', $nama); // menggunakan bindparam
$query->bindparam(':nis', $nis);
$query->bindparam(':kelas', $kelas);
$query->bindparam(':alamat', $alamat);
if($query->execute($params)) { // prepare > execute menggunakan parameter array
    echo "<script>alert('Data berhasil ditambahkan'); window.location='siswa.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}
?>