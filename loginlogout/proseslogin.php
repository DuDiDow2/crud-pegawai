<?php
session_start();

include '../config/koneksi.php';

$username = $_POST["username"];
$password = $_POST["password"]; 

$data = mysqli_query($koneksi, "select * from users where username='$username' and password='$password'");
$cek = mysqli_num_rows($data);

if ($cek > 0){
if ($data) {
    header("Location: ../view/data_pegawai.php");
    }
}else {
    header("location: login.php");
}
?>