<h2>Data Pelanggan</h2>

<table class="table table-bordered">
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>username</th>
         <th>Email</th>
         <th>No Whatsapp</th>
    </thead>

    <tbdoy>

        <?php $koneksi = mysqli_connect("localhost","root","","pemesanan_tiket_liburan") ?>
      
        <?php $nomor = 1; ?>
        <?php 
        $ambil=$koneksi->query("SELECT * FROM tb_user"); ?>
        <?php while($pecah = $ambil->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama']; ?></td>
            <td><?php echo $pecah['username']; ?></td>
            <td><?php echo $pecah['email']; ?></td>
            <td><?php echo $pecah['Nomor Whatsapp']; ?></td>
            <td>
                <a href="" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbdoy>
</table>