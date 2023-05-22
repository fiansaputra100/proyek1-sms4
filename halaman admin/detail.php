<h2>Detail Transaksi</h2>
    <?php $koneksi = mysqli_connect("localhost","root","","pemesanan_tiket_liburan") ?>
<?php 
$ambil = $koneksi->query("SELECT * FROM transaksi JOIN tb_user
    ON transaksi.id_pelanggan = tb_user.id_pelanggan
    WHERE transaksi.id_transaksi ='$_GET[id]'");
    $detail = $ambil->fetch_assoc();
?>

<pre><?php print_r($detail); ?></pre>

<strong><?php echo $detail['nama_pelanggan']; ?></strong><br>
<p>
    <?php echo $detail['email']; ?> <br>
    <?php echo $detail['Nomor Whatsapp']; ?> 
</p>

<p>
    <?php echo $detail['tanggal_pembelian']; ?> <br>
    <?php echo $detail['total_pembelian']; ?> <br>
</p>