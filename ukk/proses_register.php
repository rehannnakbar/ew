<?php
include "koneksi.php";
$nik=$_REQUEST['nik'];
$nama=$_REQUEST['nama'];
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$telp=$_REQUEST['telp'];

// var_dump($_REQUEST);
$koneksi = new PDO('mysql:host=localhost;dbname=pengaduanmasyarakat;','root','');
$query = $koneksi->query("INSERT INTO `masyarakat` VALUES ('$nik','$nama','$username','$password','$telp')");
$data = $query->fetch();

    header("Location:login.php");
?>