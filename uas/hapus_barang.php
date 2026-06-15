<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "delete from tb_barang where kd_barang='$id'");

header("location:data_barang.php?pesan=hapus");

?>