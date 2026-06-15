<?php
include "koneksi.php";
$kd_barang = $_POST['kd_barang'];
$nama_barang = $_POST['nama_barang'];
$stok = $_POST['stok'];
$harga_beli = $_POST['harga_beli'];
$harga_jual = $_POST['harga_jual'];



mysqli_query($koneksi, "update tb_barang set nama_barang='$nama_barang', stok='$stok', harga_beli='$harga_beli', harga_jual='$harga_jual' where kd_barang='$kd_barang'");
header("location:data_barang.php?pesan=update");
?>