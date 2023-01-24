<?php
$id = $_GET['id'];
$db = new PDO("mysql:host=localhost;dbname=siswa", 'root', '');
$query = $db->query("SELECT * FROM `tbdatasiswa` WHERE id=$id");
$data = $query->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>
    <div class="container-sm">
    <form action="proses_edit.php?id=<?= $data['id'] ?>" method="post">
        <input type="hidden" name="id" value="<?= $data['id']?>">
        <div>
            <label for="">nis</label>
            <input type="text" name="nis" class="form-control" value="<?= $data['nis']?>">
        </div>
        <div>
            <label for="">nama</label>
            <input type="text" name="waktu" class="form-control" value="<?= $data['text']?>">
        </div>
        <div>
            <label for="">kelas</label>
            <input type="text" name="kelas" class="form-control" value="<?= $data['kelas']?>">
        </div>
        </div>
        <br> 
    </div>
</body>
</html>