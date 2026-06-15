<?php
ini_set('display_error',1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);

include "koneksi.php";
$nama = $_POST['nama'];
$password = $_POST['password'];
$tipe_user = $_POST['tipe_user'];

mysqli_query($koneksi, "insert into user(username,password,tipe_user)values('$nama','$password','$tipe_user')") or die(mysqli_error($koneksi));
header("location:index.php?pesan=input");
?>