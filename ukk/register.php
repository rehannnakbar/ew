<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORM REGISTER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
  </head>
  <body>
  <h2 class="text-info text-center">PENGADUAN</h2>
  <p class="text-center text-secondary small mb-5">MASYARAKAT</p>
  <div class="container text-center mt-5">
  <form action="proses_register.php" method="POST"> 
  <div class="row">
    <div class="col">
      
     
    </div>
    <div class="col shadow-lg p-3 mb-5 bg-body-tertiary rounded">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">NIK</label>
        <input type="number" name="nik" class="form-control" id ="exampleFormControlInput1">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">NAMA</label>
        <input type="text" name="nama" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">USERNAME</label>
        <input type="text" name="username" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">PASSWORD</label>  
        <input type="password" name="password" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">NO TELP</label>
        <input type="number" name="telp" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
    <div class="form-group-form-button">
    
    <button type="submit" name="kirim" class="btn btn-primary mt-2">DAFTAR</button>
    <a href="login.php" class="mt-5">Sudah Punya Akun? Login disini</a>
    </div>
    </div>
    </div>
    <div class="col">
   
    
      
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>