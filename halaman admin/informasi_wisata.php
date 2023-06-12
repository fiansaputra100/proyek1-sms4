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