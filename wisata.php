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
        <?php $nomor=1; ?>
        <?php $ambil=$koneksi->query("SELECT * FROM wisata"); ?>
        <? while($pecah = $ambil->fetch_assoc()) ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama_wisata']; ?></td>
            <td><?php echo $pecah['lokasi_wisata']; ?></td>
            <td><?php echo $pecah['harga_wisata']; ?></td>
            <td><?php echo $pecah['foto_wisata']; ?></td>
            <td>
                <a href="" class="btn-danger btn">Edit</a>
                <a href="" class="btn-btn warning">Delete</a>
            </td>
        </tr>
        <?php $nomor++; ?>
    </tbdoy> 
    dasdasdasd
</table>