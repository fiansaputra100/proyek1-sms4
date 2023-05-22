<h2>Tambah Wisata</h2>
<form method="post" enctype="multipart/form-data">
    <div class="form-grup">
    <label>Nama</label>
<input type="text" class="form-control" name="nama">
</div>

<div class="form-grup">
    <label>Lokasi</label>
<input type="text" class="form-control" name="lokasi">
</div>

<div class="form-grup">
    <label>Harga</label>
<input type="number" class="form-control" name="harga">
</div>

<div class="form-grup">
    <label>Foto</label>
<input type="file" class="form-control" name="foto">
</div>
<button class="btn btn-primary" name="save">Simpan</button>
</form>

<?php $koneksi = mysqli_connect("localhost","root","","pemesanan_tiket_liburan") ?>
<?php 
if (isset($_POST ['save']))
{
    $nama = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi, "foto_wisata/".$nama);
    $koneksi->query("INSERT INTO wisata
    (nama_wisata,lokasi_wisata,harga_wisata,foto_wisata)
    VALUES('$_POST[nama]','$_POST[lokasi]', '$_POST[harga]')");

    echo "<div class='alert alert-info'>Data Tersimpan</div>";
    echo "<meta http-equive='refresh' content='1;url=index.php?halaman=wisata'>";
}
?>