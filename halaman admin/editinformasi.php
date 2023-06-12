<h2>Edit Informasi</h2><br><br>
<?php $koneksi = mysqli_connect("localhost","root","","pemesanan_tiket_liburan") ?>
<?php 
$ambil=$koneksi->query("SELECT * FROM informasi_wisata WHERE kode_info='$_GET[id]'");
$pecah=$ambil->fetch_assoc();


?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Judul Informasi</label>
        <input type="text" name="judul" class="form-control" value="<?php echo $pecah['judul_informasi']; ?>">
    </div>

    <div class="form-group">
        <label>tanggal</label>
        <input type="date" name="tanggal" class="form-control" value="<?php echo $pecah['tanggal']; ?>">
    </div>

    <div class="form-group">
        <label>Deskripsi</label>
        <input type="text" name="deskripsi" class="form-control" value="<?php echo $pecah['deskripsi']; ?>">
    </div>
    <div class="form-group">
        <img src="../halaman admin/foto_wisata/<?php echo $pecah['foto_informasi'] ?>" width="200">
    </div>

    <div class="form-group">
        <label>Ganti Foto</label>
        <input type="file" name="foto" class="form-control">
    </div>

    <button class="btn btn-primary" name="ubah">Ubah</button>

</form>
<?php
if (isset($_POST['ubah']))
{
    $namafoto=$_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];
    //jika foto dirubah
    if (!empty($lokasifoto))
    {
        move_uploaded_file($lokasifoto, "../halaman admin/foto_wisata/$namafoto");

        $koneksi->query("UPDATE informasi_wisata SET judul_informasi = '$_POST[judul]', tanggal = '$_POST[tanggal]',
        deskripsi = '$_POST[deskripsi]', foto_informasi ='$namafoto' WHERE kode_info='$_GET[id]' ");
    }
    else{
        $koneksi->query("UPDATE informasi_wisata SET judul_informasi = '$_POST[judul]', tanggal = '$_POST[tanggal]',
        deskripsi = '$_POST[deskripsi]', WHERE kode_info='$_GET[id]' ");
    }
    echo "<script>alert('Informasi Wisata telah di update');</script>";
    echo "<script>location='index.php?halaman=Informasi_wisata';</script>";
}
?>