<h2>Data Pembelian</h2>

<table class="table table-bordered">
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Tanggal</th>
        <th>Status Pembelian</th>
        <th>Total</th>
        <th>Aksi</th>
    </thead>

    <tbdoy>

        <?php $koneksi = mysqli_connect("localhost","root","","pemesanan_tiket_liburan") ?>
      
        <?php $nomor = 1; ?>
        <?php 
        $ambil=$koneksi->query("SELECT * FROM transaksi join tb_user on transaksi. id_pelanggan = tb_user.id_pelanggan"); ?>
        <?php while($pecah = $ambil->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama']; ?></td>
            <td><?php echo $pecah['tanggal_pembelian']; ?></td>
            <td><?php echo $pecah['status_pembelian']; ?></td>
            <td><?php echo $pecah['total_pembelian']; ?></td>
            <td>
                <a href="index.php?halaman=detail&id=<?php echo $pecah['id_transaksi']?>" class="btn btn-primary">detail</a>
            
        <?php if ($pecah['status_pembelian']=="sudah kirim pembayaran"): ?>
        <a href="index.php?halaman=pembayaran&id=<?php echo $pecah['id_transaksi'] ?>" class="btn btn-success">Lihat Pembayaran</a>  
        <?php endif ?>       
<br><br>
        <form action="hapustransaksi.php" method="post">
                <input type="hidden" value="<?php echo $pecah['id_transaksi'];?>" name="id">
                <input class="btn btn-primary" style="background-color:red; border-color:red;" type="submit" value="Hapus"></input>
                </form>
    </td>
 </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbdoy>
</table>