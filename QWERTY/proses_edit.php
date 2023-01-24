<?php
include "koneksi.php";

$id = $_GET['id'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

$koneksi = new PDO('mysql:host=localhost;dbname=siswa','root','');
$query = $koneksi->query("UPDATE tbdatasiswa SET nis ='$nis', nama ='$nama',kelas ='$kelas'  WHERE id = '$id'");
$data = $query->fetch();

    header("location:edit.php");

?>