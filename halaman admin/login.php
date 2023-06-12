<?php 
$koneksi = new mysqli("localhost", "root", "pemesanan_tiket_liburan");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Login Holyayy</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> Holyayy Admin : Login</h2>
               
                <h5>( Login yourself to get access )</h5>
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Silahkan Melakukan Login </strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" method="post">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="username" id="username" class="form-control" placeholder="Username" name="username" required autofocus/>
                                        </div>
                                            <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required />
                                        </div>
                                    <div class="form-group">
            
                                        </div>
                                     
                                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
                                    <hr />
                                    Not register ? <a href="register.php" >click here </a> 
                                    </form>
                                   
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>
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
    $ambil = $koneksi->query("SELECT * FROM admin_1 WHERE username='$username' AND password='$password'");
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

     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>


