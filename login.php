
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.5">
  <title>Login Form</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

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
  <link href="signin.css" rel="stylesheet">

</head>

<body class="text-center">
  <form class="form-signin" method="post" action="">

    <h1 class="h3 mb-3 font-weight-normal">Silahkan Login</h1>
    <label for="email" class="sr-only">Username</label>
    <input type="email" id="email" class="form-control" placeholder="Email" name="email" required autofocus>
    <label for="password" class="sr-only">Password</label>
    <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>

    <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
    <a href="register.php" class="btn btn-lg btn-success btn-block">Register</a>
  </form>

  <?php
session_start();
$koneksi = new mysqli("localhost","root","","pemesanan_tiket_liburan")
?>

  <?php 
  //jika ada tombol simpan(tombol simpan ditekan)
  if (isset($_POST["login"]))
  {
    $email = $_POST["email"];
    $password = $_POST["password"];
    //lakukan quert mengecek akun di tabel tb_user di database
    $ambil = $koneksi->query("SELECT * FROM tb_user WHERE email='$email' AND password_akun='$password'");

    //ngitung akun yang terambil
    $akuncocok = $ambil->num_rows;

    //jika 1 akun yang cocok, maka diloginkan
    if ($akuncocok==1)
    {
      //anda sudah login
      //mendapatkan akun dalam bentuk array
      $akun = $ambil->fetch_assoc();
      //simpan di session pelanggan
      $_SESSION["pelanggan"] = $akun;
      echo "<script>alert('Berhasil Melakukan Login');</script>";
      echo "<script>location='index.php';</script>";
    }
    else
    {
      //anda gagal login
      echo "<script>alert('anda gagal login, periksa username atau password anda');</script>";
      echo "<script>location='login.php';</script>";
    }
  }
  ?>
</body>

</html>