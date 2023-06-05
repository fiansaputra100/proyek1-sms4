<?php $koneksi = mysqli_connect("localhost","root","","pemesanan_tiket_liburan") ?>
<?php 
$ambil = $koneksi->query("SELECT * FROM transaksi JOIN tb_user
    ON transaksi.id_pelanggan = tb_user.id_pelanggan
    WHERE transaksi.id_transaksi ='$_GET[id]'");
    $detail = $ambil->fetch_assoc();
?>


<table class="table table-bordered">
    <h2>Detail Transaksi</h2>
    <thead>
        <th>Tanggal Pembelian</th>
        <th>Total Pembelian</th>
    </thead>

                
    <tbdoy>
    <?php $koneksi = mysqli_connect("localhost","root","","pemesanan_tiket_liburan") ?>
                <?php 
                    $ambil = $koneksi->query("SELECT * FROM transaksi JOIN tb_user JOIN wisata
                        ON transaksi.id_pelanggan = tb_user.id_pelanggan
                        WHERE transaksi.id_transaksi ='$_GET[id]'");
                        $detail = $ambil->fetch_assoc();
                    ?>
                    <p>Nama : <?php echo $detail['nama'];?></p>
                    <p>Email : <?php echo $detail['email'];?></p>
                    <p>Email : <?php echo $detail['no_whatsapp'];?></p>
<td><?php echo $detail['nama_wisata']; ?></td>
    <td><?php echo $detail['tanggal_pembelian']; ?> </td> <br>
    <td>Rp. <?php echo $detail['total_pembelian']; ?> </td><br>
    </tbdoy>
</table>