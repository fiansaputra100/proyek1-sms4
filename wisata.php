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
                    <a href="index.html" class="nav-item nav-link ">Home</a>
                    <a href="#" class="nav-item nav-link active">Destinasi</a>
                    <a href="#" class="nav-item nav-link">Informasi</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                    <a href="#" class="nav-item nav-link">Booking</a>
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
                            <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Thailand">
                            <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


<!-- Package Start -->
<div class="container-xxl py-4">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">Tempat Wisata</h1>
            </div>
            <div class="row g-4 justify-content-left">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item d-grid" style="width: 1100px">
                  
                        <div class="p-3 d-grid">
                        <?php $koneksi = mysqli_connect("localhost","root","","pemesanan_tiket_liburan") ?>   
                        <?php $ambil = $koneksi->query("SELECT * FROM wisata"); ?>
                        <?php while($perwisata = $ambil->fetch_assoc()) { ?> 
                            <h3 class="mb-0">Rp. <?php echo number_format($perwisata['harga_wisata']); ?></h3>
                            <h3 class="mb-9" text-color:red><?php echo $perwisata['nama_wisata']; ?></h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p><?php echo $perwisata['lokasi_wisata']; ?></p>
                            <div class="d-flex justify-content-left mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Lihat Map</a>
                                <a href="booking.html" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Pesan Sekarang</a>
                            </div>
                            <?php } ?> 
                        </div>
                    </div>
                </div>     
                
            </div>
        </div>
    </div>
  
    <!-- Package End -->

   
</body>
</html>