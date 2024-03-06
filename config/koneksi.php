<?php
$server = "localhost";
$username = "root";
$password = ""; 
$database = "belajar_crudrpl1"; 

$koneksi = mysqli_connect($server, $username, $password, $database);

// cek koneksi
if (!$koneksi){
    die("Koneksi Database Gagal : ". mysqli_connect_error());
}
?>