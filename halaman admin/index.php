<?
$koneksi = mysqli_connect("localhost","root","","pemesanan_tiket_liburan");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AdminHolyayy</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom1.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Tiketku</a> 
            </div>
            
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> &nbsp; <a href="login.php" class="btn btn-danger square-btn-adjust">Logout</a> 
</div>


        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                   
					</li>
				
					
                    <li>
                        <h4 style="color:white;">Pages</h4>
                        <a href="index.php"><i class="fa fa-home "></i> Home</a>
                        <br>
                        <h4 style="color:white;">Destination</h4>
                        <a href="index.php?halaman=wisata"><i class="fa fa-cube "></i> Wisata</a>
                        <a href="index.php?halaman=informasi_wisata"><i class="fa fa-info "></i> Informasi Wisata</a>
                        <br>
                        <h4 style="color:white;">Transaksi</h4>
                        <a href="index.php?halaman=pembelian"><i class="fa fa-shopping-cart "></i> Pembelian</a>
                        <a href="index.php?halaman=laporan_pembelian"><i class="fa fa-file "></i> Laporan</a>
                        <h4 style="color:white;">Account</h4>
                        <a href="index.php?halaman=pelanggan"><i class="fa fa-user "></i> Pelanggan</a>
                        <a href="login.php"><i class="fa fa-user "></i> Logout</a>

                    </li>
                     
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php
                if (isset($_GET['halaman']))
                {
                    if($_GET['halaman']=="wisata"){
                   
                    include 'wisata.php';
                    }
               
                    if($_GET['halaman']=="pembelian")
                {
                    include 'pembelian.php';
                    }

                    if($_GET['halaman']=="pelanggan")
                {
                    include 'pelanggan.php';
                    }
                    if($_GET['halaman']=="detail")
                    {
                        include 'detail.php';
                        }
                    if($_GET['halaman']=="tambahwisata")
                        {
                            include 'tambahwisata.php';
                        }    
                    if($_GET['halaman']=="hapuswisata")
                        {
                            include 'hapuswisata.php';
                        }   

                    if($_GET['halaman']=="editwisata")
                        {
                            include 'editwisata.php';
                        } 

                         if($_GET['halaman']=="pembayaran")
                        {
                            include 'pembayaran.php';
                        } 

                        
                        if($_GET['halaman']=="laporan_pembelian")
                        {
                            include 'laporan_pembelian.php';
                        } 

                        if($_GET['halaman']=="informasi_wisata")
                        {
                            include 'informasi_wisata.php';
                        }
                        if($_GET['halaman']=="tambah_informasi")
                        {
                            include 'tambah_informasi.php';
                        }
                        if($_GET['halaman']=="editinformasi")
                        {
                            include 'editinformasi.php';
                        }
                        if($_GET['halaman']=="hapusinformasi")
                        {
                            include 'hapusinformasi.php';
                        }
                        if($_GET['halaman']=="hapuspelanggan")
                        {
                            include 'hapuspelanggan.php';
                        }

                        if($_GET['halaman']=="hapustransaksi")
                        {
                            include 'hapustransaksi.php';
                        }   
                        }

                        
                else
                {
                    include 'home.php';
                }
                ?>
                </div>     
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
