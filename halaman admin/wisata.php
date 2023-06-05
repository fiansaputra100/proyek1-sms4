<h2>Data Wisata</h2>

<table class="table table-bordered">
    <thead>
        <th>No</th>
        <th>Nama Wisata</th>
        <th>lokasi</th>
        <th>harga wisata</th>
        <th>foto</th>
        <th>aksi</th>
    </thead>

    <tbdoy>

        <?php $koneksi = mysqli_connect("localhost","root","","pemesanan_tiket_liburan") ?>
      
        <?php $nomor = 1; ?>
        <?php 
        $ambil=$koneksi->query("SELECT * FROM wisata"); ?>
        <?php while($pecah = $ambil->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama_wisata']; ?></td>
            <td><?php echo $pecah['lokasi_wisata']; ?></td>
            <td><?php echo $pecah['harga_wisata']; ?></td>
            <td><img src="foto_wisata/<?php echo $pecah['foto_wisata'];?>" width="100">
            </td>
            <td>  
                <a href="index.php?halaman=editwisata&id=<?php echo $pecah['kode_wisata'];?> 
                " class="btn btn-primary" style="background-color:red; border:0px;">Edit</a><br>
                <br>
                <form action="hapuswisata.php" method="post">
                <input type="hidden" value="<?php echo $pecah['kode_wisata'];?>" name="id">
                <input class="btn btn-primary" type="submit" value="Hapus"></input>
                </form>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbdoy>
</table>
<a href="index.php?halaman=tambahwisata" class="btn btn-primary">Tambah Data </a>