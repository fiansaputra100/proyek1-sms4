<html>
    <head>
    <meta charset="utf-8">
    <title>Keranjang Belanja</title>
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
                    <a href="keranjang.php" class="nav-item nav-link active">Keranjang Belanja</a>
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


    <?php 
session_start(); 


$koneksi = new mysqli("localhost","root","","pemesanan_tiket_liburan");  

if(empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"]))
{
    echo "<script>alert('keranjang kosong, silahkan belanja dulu');</script>";
    echo "<script>location='tempat_wisata.php';</script>";
}
?>

 
        <section class="konten">
            <div class="container">
                <h1>Keranjang Belanja</h1>
                <hr>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Wisata</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Subharga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $nomor=1; ?>                      
                        <?php foreach ($_SESSION["keranjang"] as $kode_wisata => $jumlah): ?>
                       <!-- menampilkan wisata yg diperulangkan berdasarkan kode_wisata-->
                       <?php 
                       $ambil = $koneksi->query("SELECT * FROM wisata 
                       WHERE kode_wisata='$kode_wisata'"); 
                       $pecah = $ambil->fetch_assoc();
                       $subharga = $pecah["harga_wisata"]*$jumlah;
          

                       ?>     
                            <tr>
                            <td><?php echo $nomor; ?></td>
                            <td><?php echo $pecah["nama_wisata"]; ?></td>
                            <td>Rp. <?php echo number_format($pecah["harga_wisata"]); ?></td>
                            <td><?php echo $jumlah; ?></td>
                      
                            <td>Rp. <?php echo number_format($subharga); ?></td>         
                        <td>
                            <a href="hapuskeranjang.php?id=<?php echo $kode_wisata ?>" class="btn btn-danger btn-xs">Hapus</a>
                        </td>
                        </tr>
                        <?php $nomor++; ?>
                        <?php endforeach ?>
                    </tbody>
                </table>

                <a href="wisata.php" class="btn btn-primary">Lanjutkan Belanja</a>
                <a href="checkout.php" class="btn btn-primary">Checkout</a>
            </div>
        </section>
    </body>
</html>