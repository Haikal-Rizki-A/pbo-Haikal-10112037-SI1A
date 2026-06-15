<?php
include "koneksi.php";
$kd_customer = $_POST['kd_customer'];
$nama = $_POST['nama_customer'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat_customer'];
$telepon = $_POST['telepon_customer'];
$email = $_POST['email_customer'];
$password = $_POST['pass_customer'];

mysqli_query($koneksi, "update tb_customer set nama_customer='$nama',jenis_kelamin='$jenis_kelamin', alamat_customer='$alamat', telepon_customer='$telepon', email_customer='$email', pass_customer='$password' where kd_customer='$kd_customer'");
header("location:data_customer.php?pesan=update");
?>