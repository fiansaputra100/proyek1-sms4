
<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Login Basic - Pages | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../admin/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../admin/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../admin/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../admin/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../admin/assets/css/demo.css" />
    <link rel="stylesheet" href="css/stylelogin.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="../admin/assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="../admin/assets/vendor/js/helpers.js"></script>
    <script src="css/stylelogin.css"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

</head>

<body class="text-center">
  <form class="form-signin" method="post" action="">

    <h1 class="h3 mb-3 font-weight-normal">Silahkan Login</h1>
    <label for="username" class="sr-only">Username</label>
    <input type="type" id="username" class="form-control" placeholder="Username" name="username" required autofocus>
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
    $username = $_POST["username"];
    $password = $_POST["password"];
    //lakukan quert mengecek akun di tabel tb_user di database
    $ambil = $koneksi->query("SELECT * FROM tb_user WHERE username='$username' AND password_akun='$password'");
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
      echo "<script>location='home.php';</script>";


    }

    else
    {
      //anda gagal login
      echo "<script>alert('anda gagal login, periksa username atau password anda');</script>";
      echo "<script>location='login.php';</script>";
    }
  }
  ?>
      <!-- build:js assets/vendor/js/core.js -->
      <script src="../admin/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../admin/assets/vendor/libs/popper/popper.js"></script>
    <script src="../admin/assets/vendor/js/bootstrap.js"></script>
    <script src="../admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../admin/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>