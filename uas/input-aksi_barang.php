<?php
include "koneksi.php";

$kd_barang   = $_POST['kd_barang'];
$kode_jenis  = $_POST['kode_jenis'];
$nama_barang = $_POST['nama_barang'];
$stok        = $_POST['stok'];
$harga_beli  = $_POST['harga_beli'];
$harga_jual  = $_POST['harga_jual'];
$gambar_produk = $_POST['gambar_produk'];



mysqli_query($koneksi, "insert into tb_barang(kd_barang, kode_jenis, nama_barang, stok, harga_beli, harga_jual, gambar_produk) values('$kd_barang', '$kode_jenis', '$nama_barang', '$stok', '$harga_beli', '$harga_jual', '$gambar_produk')") or die(mysqli_error($koneksi));
header("location:data_barang.php?pesan=input");
?>