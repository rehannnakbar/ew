<?php
session_start();

if(!isset($_SESSION['nik'])){
	header('location:login.php');
}


?>

<!DOCTYPE html>
<html>
<head>	
	<table border="1" height="400%" width= "80%" align="center">
		<td><h3 align="center">selamat datang <?php echo $_SESSION['username']; ?> di website peduli diri</h3></td>
	<title> PENGADUAN MASYARAKAT </title>

	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>

</head>
<body>

<div class="content">
	<header>
		<h1 class="judul"> WEBSITE </h1>
		<h3 class="deskripsi"> PENGADUAN MASYARAKAT</h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="catatan_perjalanan.php?page=tentang">MEMBERIKAN TANGGAPAN</a>
			<li><a href="isi_data.php">ISI LAPORAN</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "home.php";
				break;
			case 'catatan.perjalanan':
				include "catatan_perjalanan.php";
				break;
			case 'isi_data':
				include "isi_data.php";
				break;			
			
		}
	}else{
		
	}

	
 
	 ?>
	 	 <br>
<form action="logout.php">
        <button onclick="alert('Anda Telah Logout')"class="btn btn-outline-primary">Logout</button>
    </form>
    <br>

	</div>
</div>
</body>
</html>