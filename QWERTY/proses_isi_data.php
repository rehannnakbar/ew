<?php
include ("koneksi.php");    
if(isset($_POST['simpan'])){   
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

$koneksi = new PDO('mysql:host=localhost;dbname=siswa','root','');
$query = $koneksi->query("INSERT INTO   `tbdatasiswa` VALUES ('$nis','$nama','$kelas')");
$data = $query->fetch();

header("Location: isi_data.php");
}
?>
