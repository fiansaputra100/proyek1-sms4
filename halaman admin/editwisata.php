<h2>Edit Wisata</h2><br><br>
<?php $koneksi = mysqli_connect("localhost","root","","pemesanan_tiket_liburan") ?>
<?php 
$ambil=$koneksi->query("SELECT * FROM wisata WHERE kode_wisata='$_GET[id]'");
$pecah=$ambil->fetch_assoc();


?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Wisata</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_wisata']; ?>">
    </div>

    <div class="form-group">
        <label>Lokasi Wisata</label>
        <input type="text" name="lokasi" class="form-control" value="<?php echo $pecah['lokasi_wisata']; ?>">
    </div>

    <div class="form-group">
        <label>Harga Wisata</label>
        <input type="number" name="harga" class="form-control" value="<?php echo $pecah['harga_wisata']; ?>">
    </div>
    <div class="form-group">
        <img src="../halaman admin/foto_wisata/<?php echo $pecah['foto_wisata'] ?>" width="200">
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
    $namafoto=$_FILE['foto']['name'];
    $lokasifoto = $_FILE['foto']['tmp_name'];
    //jika foto dirubah
    if (!empty($lokasifoto))
    {
        move_uploaded_file($lokasifoto, "../halaman admin/foto_wisata/$namafoto");

        $koneksi->query("UPDATE wisata SET nama_wisata = '$_POST[nama]', lokasi_wisata = '$_POST[lokasi]',
        harga_wisata = '$_POST[harga]', WHERE kode_wisata='$_GET[id]' ");
    }
}
?>