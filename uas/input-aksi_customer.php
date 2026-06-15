<?php
ini_set('display_error',1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);

include "koneksi.php";

$id_customer = $_POST['id_customer'];
$nama = $_POST['nama_customer'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat_customer'];
$telepon = $_POST['telepon_customer'];
$email = $_POST['email_customer'];
$password = $_POST['pass_customer'];


mysqli_query($koneksi, "insert into tb_customer(id_customer, nama_customer,jenis_kelamin,alamat_customer,telepon_customer,email_customer,pass_customer )values('$id_customer','$nama','$jenis_kelamin','$alamat','$telepon','$email','$password')") or die(mysqli_error($koneksi));
header("location:data_customer.php?pesan=input");
?>