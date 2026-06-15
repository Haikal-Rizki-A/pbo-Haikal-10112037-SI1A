<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "delete from tb_customer where id_customer='$id'");

header("location:data_customer.php?pesan=hapus");

?>