<?php
ini_set('display_error',1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);

include "koneksi.php";
$id_supplier = $_POST ['id_supplier'];
$nama = $_POST['nama_supplier'];
$alamat = $_POST['alamat_supplier'];
$telepon = $_POST['telepon_supplier'];
$email = $_POST['email_supplier'];
$password = $_POST['pass_supplier'];


mysqli_query($koneksi, "insert into tb_supplier(id_supplier,nama_supplier,alamat_supplier,telepon_supplier,email_supplier,pass_supplier )values('$id_supplier','$nama','$alamat','$telepon','$email','$password')") or die(mysqli_error($koneksi));
header("location:index.php?pesan=input");
?>