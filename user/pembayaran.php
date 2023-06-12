<?php 
session_start();
include 'koneksi.php';

//jika tidak ada session pelanggan (blm login)
if(!isset($_SESSION["pelanggan"]) OR empty($_SESSION["pelanggan"]))
{
    echo "<script>alert('silahkan login terlebih dahulu');</script>";
    echo "<script>location ='login.php'</script>";
    exit();
}
?>
<?php
//mendapatkan id_Pembelian dari url
$idpem = $_GET["id"];
$ambil = $koneksi->query("SELECT * FROM transaksi WHERE id_transaksi='$idpem'");
$detpem = $ambil->fetch_assoc();



//mendapatkan id_pelanggan yg belu
$id_pelanggan_beli = $detpem["id_pelanggan"];
$id_pelanggan_login = $_SESSION["pelanggan"]["id_pelanggan"];

if($id_pelanggan_login !==$id_pelanggan_beli)
{
    echo "<script>alert('jika melakukan pembayaran harus sesuai yang bayar')</script>";
    echo "<script>location='riwayat.php'</script>";
    exit();
}
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <title>Halaman Pembayaran</title>
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
<h2>Konfirmasi Pembayaran</h2>
<p>Kirim bukti pembayaran Anda disini</p>
<div class="alert alert-info">Total pembayaran anda <strong>Rp. <?php echo
number_format($detpem["total_pembelian"]) ?></strong></div>
    <div class="container">
    
        <form method="post" enctype="multipart/form-data">

<div class="form-group">
        <label>Nama Penyetor</label>
        <input type="text" class="form-control" name="nama">
</div>

<div class="form-group">
    <label>Bank</label>
    <input type="text" class="form-control" name="bank">
</div>

<div class="form-group">
    <label>Jumlah</label><br>
    <input type="number" class="form-conrol" name="jumlah" min="1">
</div>

<div class="form-group">
    <label>Foto Bukti</label>
    <input type="file" class="form-control" name="bukti">
    <p class="text-danger">foto bukti harus JPG maksimakl 2 MB</p>
</div>

<button class="btn btn-primary" name="kirim">Kirim</button>
        </form>
    
    </div>

<?php
//jika ada tombol kirim
if(isset($_POST["kirim"]))
{
    //upload dulu foto bukti
    $namabukti = $_FILES["bukti"]["name"];
    $lokasibukti = $_FILES["bukti"]["tmp_name"];
    $namafiks = date("YmdHis").$namabukti;
    move_uploaded_file($lokasibukti, "../bukti_pembayaran/$namafiks");

    $nama=$_POST["nama"];
    $bank=$_POST["bank"];
    $jumlah=$_POST["jumlah"];
    $tanggal=date("Y-m-d");

    $koneksi->query("INSERT INTO pembayaran(id_pembelian,nama_yg_bayar,bank,jumlah,tanggal,bukti_pembayaran)
    VALUES ('$idpem','$nama','$bank','$jumlah','$tanggal','$namafiks')");

    //update data pembelian dari pending menjadi sudah di kirim
    $koneksi->query("UPDATE transaksi SET status_pembelian='sudah kirim pembayaran'
    WHERE id_transaksi='$idpem'");
                //mengkosongkan keranjang belanja
          
    echo "<script>alert('terima kasih sudah memesan tiket di Holyayy');</script>";
    echo "<script>location='riwayat.php'</script>;";
}
?>


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