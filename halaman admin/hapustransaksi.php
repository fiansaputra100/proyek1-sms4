<?php $koneksi = mysqli_connect("localhost","root","","pemesanan_tiket_liburan") ?>
<?php 

$ambil = $koneksi->query("SELECT * FROM transaksi WHERE id_transaksi = $_POST[id]");
$pecah = $ambil->fetch_assoc();


$koneksi->query("DELETE FROM transaksi WHERE id_transaksi='$_POST[id]'");

echo "<script>alert('transaksi dihapus karena melebihi deadline');</script>";
echo "<script>location='index.php?halaman=pembelian';</script>";
?>