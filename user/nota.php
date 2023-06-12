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
    <?php 
    session_start();
    ?>
<?php $koneksi = mysqli_connect("localhost","root","","pemesanan_tiket_liburan") ?>   
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
                    <a href="contact.php" class="nav-item nav-link">Contact Us</a>
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



    <table class="table table-bordered">
        <BR><BR><BR>
    <h3 style="color:#09f;">Detail Transaksi</h3>
    <thead>
        <th>No</th>
        <th>Nama Wisata</th>
        <th>Tanggal Pembelian</th>
        <th>Tanggal Pergi</th>
        <th>Harga</th>
        <th>SubTotal</th>
    </thead>

    <tbdoy>
    <?php $koneksi = mysqli_connect("localhost","root","","pemesanan_tiket_liburan") ?>
                <?php $nomor=1; ?>

                <?php 
                    $ambil = $koneksi->query("SELECT * FROM transaksi JOIN tb_user JOIN wisata
                        ON transaksi.id_pelanggan = tb_user.id_pelanggan
                        WHERE transaksi.id_transaksi ='$_GET[id]' ");
                        $detail = $ambil->fetch_assoc();
                    ?>
                 
<!-- jika pelanggan yang beli tidak sama dengan pelanggan yg login, maka dilarikan ke riwayat.php
karena dia tidak berhak melihat nota orang lain -->
<!-- pelanggan yang beli harus pelanggan yg login -->
<?php 
//mendapatkan id pelanggan yang beli
$idpelangganygbeli = $detail["id_pelanggan"];

//mendapatkan id_pelanggan yg login
$idpelangganyglogin = $_SESSION["pelanggan"]["id_pelanggan"];

if($idpelangganygbeli!==$idpelangganyglogin)
{
    echo "<script>alert('data harus dilihat sesuai yang beli')</script>";
    echo "<script>location = 'riwayat.php'</script>";
    exit();
}
?>

    <br>
    <?php $nomor=1; ?>   

              <div class="row" >
                <div class="col-12">
                  <div class="card mb-4">
                    <div class="card-body " >
                      <h6 class="card-text" >
        <div class="col-md-3">
<p> Nama :   <?php echo $detail['nama']; ?> </p> 
        </div>

        <div class="col-md-3">
<p>  No Whatsapp :   <?php echo $detail['no_whatsapp']; ?></p> 
        </div>
</h6>
                    </div>
                  </div>
                </div>
              </div>
              
 <tr>
 <td><?php echo $nomor; ?></td>
    <td><?php echo $detail['nama_wisata']; ?></td> <br>
    <td><?php echo $detail['tanggal_pembelian']; ?> </td> <br>
    <td><?php echo $detail['tanggal_pergi']; ?> </td> <br>
    <td><?php echo $detail['harga_wisata']; ?> </td> <br>
    <td><?php echo $detail['total_pembelian']; ?> </td><br>
 </tr>
    <?php $nomor++; ?>

    </tbdoy>

</table>
<a href="checkout.php" class="btn btn-primary " style="border-radius: 0 30px 30px 0;">Kembali</a>

<br><BR><BR>
<div class="row">
    <div class="col-md-7">
        <div class="alert alert-info">
            <p>
                Silahkan melakukan Pembayaran Rp. <?php echo number_format($detail['total_pembelian']); ?><br>
                <strong>BANK MANDRI : 1309978988771414 (FIAN RIFKY SAPUTRA) </strong>
            </p>
        </div>
    </div>
</div>

<div class="row" >
    <div class="col-md-7">
        <div class="alert alert-info"style="background-color:red; color:white;">
            <p>
                Silahkan melakukan Pembayaran Rp. <?php echo number_format($detail['total_pembelian']); ?><br>
                <strong>LINK AJA : 0855 46259011 (FIAN RIFKY SAPUTRA) </strong>
            </p>
        </div>
    </div>
</div>

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