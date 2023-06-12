<!doctype html>
<html lang="en" class="h-100">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Register Form</title>
 
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sticky-footer/">
 
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
 
 
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
 
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="sticky-footer.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">
    <!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Register Form</h1>
    <p class="lead">Silahkan Daftarkan Identitas Anda</p>
    <hr/>
    <form method="post" action="">
    <div class="form-group row">
      <label for="username" class="col-sm-2 col-form-label">Username</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
      </div>
    </div>
 
    <div class="form-group row">
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
      </div>
    </div>
 
 
  <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="email">
    </div>
  </div>
  <div class="form-group row">
    <label for="nowhatsapp" class="col-sm-2 col-form-label">No Whatsapp</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="nowhatsapp" name="nowhatsapp" placeholder="nowhatsapp">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <a href="login.php" class="btn btn-success">Login</a>
      <button type="submit" class="btn btn-primary" name="register">Register</button>
    </div>
  </div>
</form>

<?php session_start(); ?>
<?php include('koneksi.php'); ?>
<?php 
//jika ada tombol daftar(ditekan)
if (isset($_POST["register"]))
{
  //mengambil isian daftar
  $username = $_POST["username"];
  $nama = $_POST["nama"];
  $password = $_POST["password"];
  $email = $_POST["email"];
  $no_whatsapp = $_POST["nowhatsapp"];

  //cek apakah email sudah digunakan
  $ambil = $koneksi->query("SELECT*FROM tb_user WHERE username ='$username'");
  $ygcocok =$ambil->num_rows;
if($ygcocok==1)
{
  echo "<script>alert('pendaftaran gagal, email sudah digunakan');</script>";
  echo "<script>location='register.php';</script>";
}
else
{
  //query insert ke tabel user
 $koneksi->query("INSERT INTO tb_user (username,nama,password_akun,email,no_whatsapp) 
  VALUES('$username','$nama','$password','$email','$no_whatsapp')");
    echo "<script>alert('pendaftaran berhasil, silahkan melakukan login');</script>";
    echo "<script>location='login.php';</script>";
}
}
?>

  </div>
</main>
 

</body>
</html>