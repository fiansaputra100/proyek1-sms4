<?php 
session_start();
include 'koneksi.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HolYay - Pemesanan Tiket Liburan Online</title>
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

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


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
                    <a href="home.php" class="nav-item nav-link active ">Home</a>
                    <a href="tempat_wisata.php" class="nav-item nav-link">Destinasi</a>
                    <a href="informasi.php" class="nav-item nav-link">Informasi</a>

                    <a href="keranjang.php" class="nav-item nav-link">Keranjang Belanja</a>
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


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/kayutangan.jpeg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Selamat Datang di <span class="text-primary">Holyayy</span></h1>
                    <p class="mb-4">Website ini adalah website yang melayani customer dalam memesan tiket liburan secara online atau ingin mendapatkan informasi terbaru terkait tempat wisata</p>
                    <p class="mb-4"></p>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
 <!-- Service Start -->
 <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
           
                <h1 class="mb-5">Apa Yang Ada Di Website Ini</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5>Pemesanan Tiket Liburan</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                            <h5>Bisa Pesan Dari Rumah</h5>
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user text-primary mb-4"></i>
                            <h5>Keamanan Terjamin</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                            <h5>Fitur yang memadai</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5>Riwayat Pembelian yang aman</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                            <h5>Berbagai tempat wisata yang bagus</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user text-primary mb-4"></i>
                            <h5>Berbagai Informasi yang lengkap</h5>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                            <h5>Konsultasi</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
<!-- Kategori -->

    <!-- Destination Start -->
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">Wisata Populer</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/destination-1.jpg" alt="">
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Maldives</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/destination-2.jpg" alt="">
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Raja Ampat, Papua</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/destination-3.jpg" alt="">
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Pantai Baku Benkung, Malang</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/destination-4.jpg" alt="" style="object-fit: cover;">
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Indonesia</div>
                    </a>
                </div>
            </div>

            
        </div>
    </div>
    <!-- Destination Start -->


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
            <?php $ambil = $koneksi->query("SELECT * FROM wisata"); ?>
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
        <!-- Package Start -->

<div class="container-xxl py-4">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">Informasi Wisata Terbaru</h1>
            </div>
            <div class="row g-4 justify-content-left">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item d-grid" style="width: 1100px">
                  
                        <div class="p-3 d-grid">
                            <br>
                        <?php $koneksi = mysqli_connect("localhost","root","","pemesanan_tiket_liburan") ?>   
                        <?php $ambil = $koneksi->query("SELECT * FROM informasi_wisata"); ?>
                        <?php while($perinfo = $ambil->fetch_assoc()) { ?> 
                            <h3 class="mb-0"><?php echo ($perinfo['judul_informasi']); ?></h3>
                            <h3 class="mb-9" text-color:red><?php echo $perinfo['tanggal']; ?></h3>
                            <td><?="<img src='../halaman admin/foto_wisata/".$perinfo['foto_informasi']."'style='width:800px; height:300px; float:right; margin:5px;'>"?></td>
    
                            <div class="overflow-hidden">   
                            
                           <br><br>
                            <a href="detail_informasi.php?id=<?php echo $perinfo['kode_info']; ?>" class="btn btn-primary">Baca Selangkapnya</a>
    
                        </div>
                            <br><br>

                            <?php } ?> 
                            <?php 
				?>
                        </div>
                    </div>
                </div>     
                
            </div>
        </div>

        
    </div>

    <!-- Package End -->
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

    <!-- Back to Top -->



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>