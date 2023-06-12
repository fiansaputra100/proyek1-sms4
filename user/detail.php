<?php session_start(); ?> 
<?php 

include 'koneksi.php';

//jika tidak ada session pelanggan (blm login)
if(!isset($_SESSION["pelanggan"]) OR empty($_SESSION["pelanggan"]))
{
    echo "<script>alert('silahkan login terlebih dahulu');</script>";
    echo "<script>location ='../login/login.php'</script>";
    exit();
}
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Halaman Wisata</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min1.css" rel="stylesheet">
 

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>HolYayy</h1>
                
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                    <a href="home.php" class="nav-item nav-link ">Home</a>
                    <a href="tempat_wisata.php" class="nav-item nav-link">Destinasi</a>
                    <a href="informasi.php" class="nav-item nav-link">Informasi</a>
                    <a href="keranjang.php" class="nav-item nav-link ">Keranjang Belanja</a>
                    <a href="riwayat.php" class="nav-item nav-link">Riwayat Belanja</a>
                </div>
                <a href="logout.php" class="btn btn-primary rounded-pill py-2 px-4">Logout</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">

            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


     <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">


              <!-- Collapse -->

              <div class="row">
                <div class="col-12">
                  <div class="card mb-4">

                    <div class="card-body">

                      <p class="demo-inline-spacing">
                      <?php 
//mendapatkan kode_wisata dari url
$kode_wisata = $_GET["id"];

//query ambil data
$ambil = $koneksi->query("SELECT * FROM wisata WHERE kode_wisata ='$kode_wisata'");
$detail = $ambil->fetch_assoc();


?>
    <section class="kontent">
        <div class="container">
    <div class="row">

        <br><br>
            <div class="col-md-8">
            <h2 class="card-text" style="color:#09f;">
Lanjut Ke Pembayaran
</h2>
                <br><br>
                <h4>Wisata Yang Dipilih = <?php echo $detail["nama_wisata"]; ?></h4>
                <h4>Harga = Rp. <?php echo number_format($detail["harga_wisata"]); ?></h4>
                <form method="post">
                    <div class="form-group">
                    <div class="form-grup" style="width:1000px;">
    <br><br>
                                <h4>Masukkan Jumlah Tiket</h4>
                        <div class="input-group">
                
                            <input type="number" min="1" class="form-control" name="jumlah">
                            <div class="input-group-btn">
                            <div class="form-group">
                
                            </div>

                    </div>
                    </div>
                    <br>

                    <br>
                    <button class="btn btn-primary" name="beli" style="width:500px;">Pesan</button>
                </form>

                <?php
                //jika ada tombol beli
                if (isset($_POST["beli"]))
                {
                    //mendapatkan jumlah yang diinputkan
                    $jumlah = $_POST["jumlah"];

                    //masukkan di keranjang belanja
                    $_SESSION["keranjang"][$kode_wisata] = $jumlah;
   

                    echo "<script>alert('tiket telah masuk ke keranjang belanja');</script>";
                    echo "<script>location='keranjang.php'</script>";
                }
                ?>
            </div>
    </div>
        </div>
    </section>




        </div>
     </section>  
                        
                  </div>
                </div>
              </div>


                </div>
              </div>
            </div>


     </body>
</html>