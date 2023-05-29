<?php $koneksi = mysqli_connect("localhost","root","","pemesanan_tiket_liburan") ?>
<?php 

$ambil = $koneksi->query("SELECT * FROM wisata WHERE kode_wisata = $_POST[id]");
$pecah = $ambil->fetch_assoc();
$foto_wisata = $pecah['foto_wisata'];
if(file_exists("../foto_wisata/$foto_wisata"))
{
    unlink("../foto_wisata/$foto_wisata");
}

$koneksi->query("DELETE FROM wisata WHERE kode_wisata='$_POST[id]'");

echo "<script>alert('wisata dihapus');</script>";
echo "<script>location='index.php?halaman=wisata';</script>";
?>