<?php 
session_start();
$kode_wisata=$_GET["id"];
unset($_SESSION["keranjang"][$kode_wisata]);

echo "<script>alert('produk dihapus dari keranjang'); </script>";
echo "<script>location='keranjang.php';</script>";
?>