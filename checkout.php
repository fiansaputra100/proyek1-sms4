
<!DOCTYPE html>
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
<?php 
session_start(); 


$koneksi = new mysqli("localhost","root","","pemesanan_tiket_liburan");  

if(empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"]))
{
    echo "<script>alert('keranjang kosong, silahkan belanja dulu');</script>";
    echo "<script>location='wisata.php';</script>";
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor=1; ?>    
                        <?php $totalbelanja = 0; ?>                  
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
                        </tr>
                        <?php $nomor++; ?>
                        <?php $totalbelanja+=$subharga; ?>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="4">Total Belanja</th>
                            <th>Rp. <?php echo number_format($totalbelanja) ?> </th>
                        </tr>
                    </tfoot>
                </table>
                <form method="post">
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" readonly value="<?php print_r($_SESSION['pelanggan']['nama']) ?>" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" readonly value="<?php print_r($_SESSION['pelanggan']['no_whatsapp']) ?>" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" readonly value="<?php print_r($_SESSION['pelanggan']['email']) ?>" class="form-control">
                            </div>
                        </div>                   
                    </div>
                    <br>
                    <button class="btn btn-primary" name="checkout">Checkout</button>
                </form>

                <?php
                if (isset($_POST["checkout"]))
                {
                  $id_pelanggan =  $_SESSION["pelanggan"]["id_pelanggan"];
                  $tanggal_pembelian = date("Y-m-d");


                  $total_pembelian = $totalbelanja;

                  //1. Menyimpan data ke tabel transaksi
                  $koneksi->query("INSERT INTO transaksi (id_pelanggan,
                  tanggal_pembelian,total_pembelian) VALUES ('$id_pelanggan','$tanggal_pembelian','$total_pembelian')");
                
                //mendapatkan id_transaksi barusan terjadi
                $id_transaksi_barusan = $koneksi->insert_id;

         
                foreach ($_SESSION["keranjang"] as $kode_wisata => $jumlah)
                {
                    $koneksi->query("INSERT INTO pembelian_tiket (id_transaksi,kode_wisata,jumlah)
                     VALUES ('$id_transaksi_barusan','$kode_wisata','$jumlah')");
                }

                //mengkosongkan keranjang belanja
                unset($_SESSION["keranjang"]);

                //tampilaan dialihkan ke halaman nota, nota dari pembelian yg barusan
                echo "<script>alert('pembelian sukses');</script>";
                echo "<script>location='nota.php?id=$id_transaksi_barusan';</script>";
            }
                 ?>
            </div>
        </section>

</body>
</html>