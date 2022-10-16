<?php 


$host = 'localhost';
$db = 'latihan_2';
$user = 'root';
$pass = '';
 
try {
    
    $con = new PDO("mysql:host={$host};dbname={$db}", $user, $pass);
    
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} catch(PDOException $e) {
    echo $e->getMessage();
}

/*
Code by YukCoding Tutor
www.yukcoding.id
*/
?>
