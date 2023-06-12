<?php $koneksi = mysqli_connect("localhost","root","","pemesanan_tiket_liburan") ?>
<?php 

$ambil = $koneksi->query("SELECT * FROM informasi_wisata WHERE kode_info = $_POST[id]");
$pecah = $ambil->fetch_assoc();
$foto_wisata = $pecah['foto_informasi'];
if(file_exists("../foto_wisata/$foto_wisata"))
{
    unlink("../foto_wisata/$foto_wisata");
}

$koneksi->query("DELETE FROM informasi_wisata WHERE kode_info='$_POST[id]'");

echo "<script>alert('wisata dihapus');</script>";
echo "<script>location='index.php?halaman=informasi_wisata';</script>";
?>