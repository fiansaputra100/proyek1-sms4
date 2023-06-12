<h1>Selamat Datang di Administrator Holyayy</h1><br>
<?php $koneksi = mysqli_connect("localhost","root","","pemesanan_tiket_liburan") ?>
<?php
//mendapatkan id_pembelian dari url

//mengambil data pembayaran berdasarkan id_pembelian
$ambil = $koneksi->query("SELECT * FROM admin_1 ");
$pecah = $ambil->fetch_assoc();
?>
<form method="post" >
    <div class="row">
        <div class="col-md-5">
            <div class="form-group">
                <h2 >Nama : <?php echo $pecah['nama'];?></h2>
            </div>
        </div>
</form>


<br><br><br><br><br><br>

<h2>Data Wisata</h2>
<table class="table table-bordered">
    <thead>
        <th>No</th>
        <th>Nama Wisata</th>
        <th>lokasi</th>
        <th>harga wisata</th>
        <th>foto</th>
        <th>aksi</th>
    </thead>

    <tbdoy>

        <?php $koneksi = mysqli_connect("localhost","root","","pemesanan_tiket_liburan") ?>
      
        <?php $nomor = 1; ?>
        <?php 
        $ambil=$koneksi->query("SELECT * FROM wisata"); ?>
        <?php while($pecah = $ambil->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama_wisata']; ?></td>
            <td><?php echo $pecah['lokasi_wisata']; ?></td>
            <td><?php echo $pecah['harga_wisata']; ?></td>
            <td><img src="foto_wisata/<?php echo $pecah['foto_wisata'];?>" width="100">
            </td>
            <td>  
                <a href="index.php?halaman=editwisata&id=<?php echo $pecah['kode_wisata'];?> 
                " class="btn btn-success" >Edit</a><br>
                <br>
                <form action="hapuswisata.php" method="post">
                <input type="hidden" value="<?php echo $pecah['kode_wisata'];?>" name="id">
                <input class="btn btn-primary" type="submit" value="Hapus"></input>
                </form>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbdoy>
</table>
<a href="index.php?halaman=tambahwisata" class="btn btn-primary">Tambah Data </a>












<br><br><br>

<h2>Informasi Wisata</h2>

<table class="table table-bordered">
    <thead>
        <th>No</th>
        <th>Judul Informasi</th>
        <th>Tanggal</th>
        <th>Deskripsi</th>
        <th>Foto</th>
    <th>Aksi</th>
    </thead>

    <tbdoy>

        <?php $koneksi = mysqli_connect("localhost","root","","pemesanan_tiket_liburan") ?>
      
        <?php $nomor = 1; ?>
        <?php 
        $ambil=$koneksi->query("SELECT * FROM informasi_wisata"); ?>
        <?php while($pecah = $ambil->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['judul_informasi']; ?></td>
            <td><?php echo $pecah['tanggal']; ?></td>
            <td><?php echo $pecah['deskripsi']; ?></td>
            <td><img src="foto_wisata/<?php echo $pecah['foto_informasi'];?>" width="100">
            </td>

            <td>
                <a href="index.php?halaman=editinformasi&id=<?php echo $pecah['kode_info'];?> 
                " class="btn btn-primary" style="background-color:red; border:0px;">Edit</a><br>
                <br>
                <form action="hapusinformasi.php" method="post">
                <input type="hidden" value="<?php echo $pecah['kode_info'];?>" name="id">
                <input class="btn btn-primary" type="submit" value="Hapus"></input>
                </form>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbdoy>
</table>
<a href="index.php?halaman=tambah_informasi" class="btn btn-primary">Tambah Informasi </a>









<br><br><br>
<h2>Data Pembelian</h2>

<table class="table table-bordered">
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Tanggal</th>
        <th>Status Pembelian</th>
        <th>Total</th>
        <th>Aksi</th>
    </thead>

    <tbdoy>

        <?php $koneksi = mysqli_connect("localhost","root","","pemesanan_tiket_liburan") ?>
      
        <?php $nomor = 1; ?>
        <?php 
        $ambil=$koneksi->query("SELECT * FROM transaksi join tb_user on transaksi. id_pelanggan = tb_user.id_pelanggan"); ?>
        <?php while($pecah = $ambil->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama']; ?></td>
            <td><?php echo $pecah['tanggal_pembelian']; ?></td>
            <td><?php echo $pecah['status_pembelian']; ?></td>
            <td><?php echo $pecah['total_pembelian']; ?></td>
            <td>
                <a href="index.php?halaman=detail&id=<?php echo $pecah['id_transaksi']?>" class="btn btn-primary">detail</a>
            
        <?php if ($pecah['status_pembelian']=="sudah kirim pembayaran"): ?>
        <a href="index.php?halaman=pembayaran&id=<?php echo $pecah['id_transaksi'] ?>" class="btn btn-success">Lihat Pembayaran</a>  
        <?php endif ?>       
    </td>
 </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbdoy>
</table>









<br><br><br>
<h2>Data Pelanggan</h2>

<table class="table table-bordered">
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>username</th>
         <th>Email</th>
         <th>No Whatsapp</th>
         <th>Aksi</th>
    </thead>

    <tbdoy>

        <?php $koneksi = mysqli_connect("localhost","root","","pemesanan_tiket_liburan") ?>
      
        <?php $nomor = 1; ?>
        <?php 
        $ambil=$koneksi->query("SELECT * FROM tb_user"); ?>
        <?php while($pecah = $ambil->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama']; ?></td>
            <td><?php echo $pecah['username']; ?></td>
            <td><?php echo $pecah['email']; ?></td>
            <td><?php echo $pecah['no_whatsapp']; ?></td>

            <td>
                <form action="hapuspelanggan.php" method="post">
                <input type="hidden" value="<?php echo $pecah['id_pelanggan'];?>" name="id">
                <input class="btn btn-success" type="submit" value="Hapus"></input>
                </form>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbdoy>
</table>










<br><br><br>
<?php $koneksi = mysqli_connect("localhost","root","","pemesanan_tiket_liburan") ?>
<?php 
$semuadata=array();
$tgl_mulai="-";
$tgl_selesai="-";
if (isset($_POST["kirim"]))
{
    $tgl_mulai = $_POST["tglm"];
    $tgl_selesai = $_POST["tgls"];
    $ambil = $koneksi->query("SELECT * FROM transaksi ts LEFT JOIN tb_user tb ON
    ts.id_pelanggan = tb.id_pelanggan WHERE tanggal_pembelian BETWEEN '$tgl_mulai' AND '$tgl_selesai'");
    while($pecah = $ambil->fetch_assoc())
    {
        $semuadata[]=$pecah;
    }


}
?>

<h2>Laporan Pembelian dari <?php $tgl_mulai ?> hingga <?php echo $tgl_selesai ?></h2>

<hr>

<form method="post">
    <div class="row">
        <div class="col-md-5">
            <div class="form-group">
                <label>Tanggal Mulai</label>
                <input type="date" class="form-control" name="tglm" value="<?php echo $tgl_mulai ?>">
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <label>Tanggal Selesai</label>
                <input type="date" class="form-control" name="tgls" value="<?php echo $tgl_selesai ?>">
            </div>
        </div>
        <div class="col-md-2">
        <label>&nbsp;</label><br>
            <button class="btn btn-primary" name="kirim"> Lihat</div>
    </div>
</form>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Pelanggan</th>
            <th>Tanggal</th>
            <th>Jumlah</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php $total=0; ?>
        <?php foreach ($semuadata as $key => $value): ?>
            <?php $total+= $value['total_pembelian'] ?>
        <tr>
            <td><?php echo $key+1; ?></td>
            <td><?php echo $value["nama"] ?></td>
            <td><?php echo $value["tanggal_pembelian"] ?></td>
            <td>Rp. <?php echo number_format($value["total_pembelian"]) ?></td>
            <td><?php echo $value["status_pembelian"] ?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
    <tfoot>
<tr>
    <th colspan="3">Total</th>
    <th>Rp. <?php echo number_format($total) ?></th>
    <th></th>
</tr>
    </tfoot>
</table>