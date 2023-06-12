<?php $koneksi = mysqli_connect("localhost","root","","pemesanan_tiket_liburan") ?>
<?php 

$ambil = $koneksi->query("SELECT * FROM tb_user WHERE id_pelanggan = $_POST[id]");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM tb_user WHERE id_pelanggan='$_POST[id]'");

echo "<script>alert('Akun Pelanggan dihapus');</script>";
echo "<script>location='index.php?halaman=pelanggan';</script>";
?>