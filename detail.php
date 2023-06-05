
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
                    <a href="index.php" class="nav-item nav-link ">Home</a>
                    <a href="wisata.php" class="nav-item nav-link active">Destinasi</a>
                    <a href="#" class="nav-item nav-link">Informasi</a>
                    <a href="keranjang.php" class="nav-item nav-link ">Keranjang Belanja</a>
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

    
<?php include 'koneksi.php'; ?>
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
            <div class="col-md-3">
                <h2><?php echo $detail["nama_wisata"]; ?></h2>
                <h4>Rp. <?php echo number_format($detail["harga_wisata"]); ?></h4>
                <form method="post">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="number" min="1" class="form-control" name="jumlah">
                            <div class="input-group-btn">
                                <button class="btn btn-primary" name="beli">Pesan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
    </div>
        </div>
    </section>
</body>
</html>