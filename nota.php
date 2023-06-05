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



    <table class="table table-bordered">
        <BR><BR><BR>
    <h1>Detail Transaksi</h1>
    <thead>
        <th>No</th>
        <th>Nama Wisata</th>
        <th>Harga</th>
        <th>SubTotal</th>
    </thead>

    <tbdoy>
    <?php $koneksi = mysqli_connect("localhost","root","","pemesanan_tiket_liburan") ?>
                <?php $nomor=1; ?>
                <?php 
                    $ambil = $koneksi->query("SELECT * FROM transaksi JOIN tb_user JOIN wisata
                        ON transaksi.id_pelanggan = tb_user.id_pelanggan
                        WHERE transaksi.id_transaksi ='$_GET[id]'");
                        $detail = $ambil->fetch_assoc();
                    ?>
                 

        
    <br>

        <div class="col-md-3">
<h4> Nama :   <?php echo $detail['nama']; ?> </h4> 
        </div>

        <div class="col-md-3">
<h4>  No Whatsapp :   <?php echo $detail['no_whatsapp']; ?></h4> 
        </div>
 
    <td><?php echo $detail['nama_wisata']; ?></td> <br>
    <td><?php echo $detail['tanggal_pembelian']; ?> </td> <br>
    <td><?php echo $detail['harga_wisata']; ?> </td> <br>
    <td><?php echo $detail['total_pembelian']; ?> </td><br>
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
</body>
</html>