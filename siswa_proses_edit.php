<?php 
session_start();
if(!isset($_SESSION['iduser'])) {
	echo "<script>window.location='login.php';</script>";
}
include "koneksi.php";

$params = [
   
    "nama"     => $_POST['nama'],
    "nis"      => $_POST['nis'],
    "kelas"     => $_POST['kelas'],
    "alamat"     => $_POST['alamat'],
    
  ];

$sql = "UPDATE siswa SET
            nama = :nama,
            nis = :nis,
            kelas = :kelas,
            alamat = :alamat
        WHERE nis = :nis";
$query = $con->prepare($sql);
if($query->execute($params)) { // prepare > execute menggunakan parameter array
    echo "<script>alert('Data berhasil diedit'); window.location='siswa.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}