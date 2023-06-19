<?php 
session_start();
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
                    <a href="tempat_wisata.php" class="nav-item nav-link active">Destinasi</a>
                    <a href="informasi.php" class="nav-item nav-link">Informasi</a>
                    <a href="keranjang.php" class="nav-item nav-link ">Keranjang Belanja</a>
                    <a href="riwayat.php" class="nav-item nav-link">Riwayat Belanja</a>
                                        <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                </div>
                <a href="logout.php" class="btn btn-primary rounded-pill py-2 px-4">Logout</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Enjoy Liburanmu Bersama Kami</h1>
                <p class="fs-4 text-white mb-4 animated slideInDown">Silahkan Cari Destinasi Tempat Wisata Kesukaan Kalian</p>
                        <div class="position-relative w-75 mx-auto animated slideInDown">
                        <form action="pencarian.php" method="get" class="navbar-form-navbar-right">
                            <input type="text" class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" name="keyword" placeholder="Eg: Jatim Park 2">
                            <button class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


<!-- Package Start -->

<section class="content">
        <div class="container" >
            <!-- Package Start -->
<br><br><br>
<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">Wisata</h1>
            </div>
            <div class="row">
        
            <?php $koneksi = mysqli_connect("localhost","root","","pemesanan_tiket_liburan") ?>   
            
            <?php
             $ambil = $koneksi->query("SELECT * FROM wisata"); ?>
            <?php while($perwisata = $ambil->fetch_assoc()) { ?> 
                <div class="col-md-4" >
                    <div class="thumbnail">
                    <?="<img src='../halaman admin/foto_wisata/".$perwisata['foto_wisata']."'style='width:300px; height:150px; float:center; margin:5px; border-radius:20;'>"?>    
                <div class="caption">
                    <h3><?php echo $perwisata['nama_wisata']; ?></h3>
                    <h5>Rp. <?php echo number_format($perwisata['harga_wisata']); ?></h5>
                    <p><?php echo $perwisata['lokasi_wisata']; ?></p>
                    <a href="detail.php?id=<?php echo $perwisata['kode_wisata']; ?>" class="btn btn-primary">Pesan Sekarang</a>

                </div>    
                </div>
                </div>
                <br><br>
            <?php } ?>
            </div>

        </div>
     </section>  

    <!-- Package End -->
    <br><br><br>
    <footer style="background-color:#09f; color:white;">
			<div id="footer" style="color:white;">
				<div class="container">
					<div class="row row-bottom-padded-md">
						
						<div class="col-md-4 col-sm-1 col-xs-15 fh5co-footer-link " >
                            <br>
							<h3 style="color:white;">Maps Wisata Populer</h3>
							<ul style="color:white;">
                            <a href="https://www.google.com/maps/place/Pantai+Balekambang/@-8.4035709,112.5342213,16z/data=!3m1!4b1!4m6!3m5!1s0x2e78a9458651084f:0x6b8da077d5b83e2f!8m2!3d-8.4034458!4d112.5391259!16s%2Fg%2F122kcmqv?entry=ttu" button class="btn btn-primary" >Pantai Balekambang</button>
                            <a href="https://www.google.com/maps/search/raja+ampat/@-0.6062106,129.0509665,8z/data=!3m1!4b1?entry=ttu" button class="btn btn-primary">Raja Ampat</button>
                            <a href="https://www.google.com/maps/place/Gili+Trawangan/@-8.3503091,116.0259064,15z/data=!3m1!4b1!4m6!3m5!1s0x2dcde0ab4ff1579f:0xfcea7c174732d4b2!8m2!3d-8.3482917!4d116.0384335!16zL20vMDdkeDIx?entry=ttu" button class="btn btn-primary" >Gilitrawangan</button>
                            <a href="https://www.google.com/maps/place/Pegunungan+Jayawijaya/@-4.3499989,139.3776979,14z/data=!3m1!4b1!4m6!3m5!1s0x683faa7003406a75:0x350c517cab46fb07!8m2!3d-4.35!4d139.416667!16zL20vMDducjV5?entry=ttu" button class="btn btn-primary" >Pegunungan Jayawijaya</button>
								
			
						</div>
					
						
					</div>
					<div class="row">
						
							<p style="color:white;">Created by Fian Rifky Saputra And Satria Yudhistira, Mahasiswa JTI POLINEMA. </p>
						</div>
					</div>
				</div>
			</div>
		</footer>

</body>
</html>


