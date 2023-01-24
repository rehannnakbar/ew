<?php
session_start();

if(!isset($_SESSION['nis'])){
	
}


?>


<?
include "koneksi.php";  

?>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">  

<body>
<table border="1" height="70%" width= "60%" align="center">
<form action="proses_isi_data.php" method="POST">
    <td> 
    <table align="center"> 
    <style>
                    body{
                        background-image: url("sambo.jpg") ;
                        background-size: cover;
                    }
                    table{
                        background-color:green;
                    }
                    </style>
                  
                  <h2 class ="text-white text-center">isi data</h2>
    <tr>
        <td class ="text-black text center"> nis :</td>
        <td><input type="text" name="nis" required></td>
    </tr>
    <tr> 
        <td class ="text-black text center"> nama : </td>
        <td><input type="text" name="nama"required></td>
    </tr>
    <tr>
        <td class ="text-black text center"> kelas : </td>
        <td><input type="text" name="kelas" required></td>
    </tr>

    <td align="center"><input type="submit" name = "simpan" values ="simpan"></td>







<?php

$db = new PDO("mysql:host=localhost;dbname=siswa",'root','');
$query = $db->query("SELECT * FROM tbdatasiswa");
?>
<div class="container-sm">
<table border="1" cellpadding="10" cellspacing="0" class="table-primary table-striped">

<table border="align"="center" width="100%" height="20%"> 
    <td>    
        <table border="1" height="60%" width= "100%" align="center" style="background-color:greenyellow;"> 
            <tr> 
                <th>nis</th>
                <th>nama</th>
                <th>kelas</th>
                <th>aksi</th>
                
            </tr>
            <?php

            ?>
            </tbody>
             <?php while($data =$query->fetch()) : ?>
             <tr> 
                 <td><?= $data['nis']?></td>
                 <td><?=$data['nama']?></td>
                 <td><?= $data['kelas']?></td>
             </tr>
            <?php endwhile; ?>
        </table>
        <br><br>
        
    </td>
    <table>

    <?php

foreach($query as $querys){
 
    echo "<tr>";
    echo "<td>";
    echo $querys["nis"];
    echo "</td>";
    echo "<td>";
    echo $querys["nama"];
    echo "</td>";
    echo "<td>";
    echo $querys["kelas"];
    echo "</td>";
    echo "<td>";
    echo "<a href='edit.php?id=".$querys["id"]."'class=btn btn-danger'>UPDATE</a> | ";
    echo "<a href='proses_hapus2.php?id=".$querys["id"]."'class=btn btn-danger'>HAPUS</a>";
    echo "</td>";
    echo "</td>";
}
?>
</tbody>
<?php while($data =$query->fetch()) : ?>
<tr> 
<td><?= $data['nis']?></td>
<td><?=$data['nama']?></td>
<td><?= $data['kelas']?></td>
</tr>
<?php endwhile; ?>



</table>
</body>
</html>