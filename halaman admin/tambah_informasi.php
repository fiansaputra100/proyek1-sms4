<h2>Tambah Informasi</h2>
<form method="post" enctype="multipart/form-data">
    <div class="form-grup">
    <label>Judul Informasi</label>
<input type="text" class="form-control" name="judul">
</div>

<div class="form-grup">
    <label>Tanggal</label>
<input type="Date" class="form-control" name="tanggal">
</div>

<div class="form-grup">
    <label>Deskripsi</label>
<input type="text" class="form-control" name="deskripsi">
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
    move_uploaded_file($lokasi, "../foto_wisata/".$nama);
    $koneksi->query("INSERT INTO informasi_wisata
    (judul_informasi,tanggal,deskripsi,foto_informasi)
    VALUES('$_POST[judul]','$_POST[tanggal]', '$_POST[deskripsi]', '$nama')");

    echo "<div class='alert alert-info'>Informasi Tersimpan</div>";
    echo "<meta http-equive='refresh' content='1;url=informasi_wisata.php?halaman=informasi_wisata'>";
}
?>