<?php 
session_start();
//mendapatkan kode wisata dari url
$kode_wisata = $_GET['id'];

//jika sudah ada wisata dikeranjang, maka wisata itu jumlahnya di +1
if(isset($_SESSION['keranjang'][$kode_wisata]))
{
    $_SESSION['keranjang'][$kode_wisata]+=1;
}
//selain itu ketika belum ada di keranjang, maka wisata tersebut dianggap dibeli 1
else
{
    $_SESSION['keranjang'][$kode_wisata] = 1;
}


echo "<script>alert('produk telah dimasukkan ke keranjang belanja');</script>";
echo "<script>location='keranjang.php';</script>";

?> 




