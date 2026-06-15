<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "delete from tb_supplier where id_supplier='$id'");

header("location:data_supplier.php?pesan=hapus");

?>