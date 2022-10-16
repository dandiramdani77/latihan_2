<?php 
session_start();
if(!isset($_SESSION['iduser'])) {
	echo "<script>window.location='login.php';</script>";
}
include "koneksi.php";

$nis = $_GET['id'];
$param = array(':nis' => $nis);

$query = $con->prepare("DELETE FROM siswa WHERE nis= :nis");

if($query->execute($param)) {
    echo "<script>alert('Data berhasil dihapus'); window.location='siswa.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location='siswa.php';</script>";
}

