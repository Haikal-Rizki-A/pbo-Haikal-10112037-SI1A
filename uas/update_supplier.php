<?php
include "koneksi.php";
$kd_supplier = $_POST['kd_supplier'];
$nama = $_POST['nama_supplier'];
$alamat = $_POST['alamat_supplier'];
$telepon = $_POST['telepon_supplier'];
$email = $_POST['email_supplier'];
$password = $_POST['pass_supplier'];

mysqli_query($koneksi, "update tb_supplier set nama_supplier='$nama', alamat_supplier='$alamat', telepon_supplier='$telepon', email_supplier='$email', pass_supplier='$password' where kd_supplier='$kd_supplier'");
header("location:data_supplier.php?pesan=update");
?>