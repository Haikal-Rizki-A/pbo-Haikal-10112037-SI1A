<?php
include "koneksi.php";
$id = $_POST['id_user'];
$nama = $_POST['username'];
$password = $_POST['password'];
$tipe_user = $_POST['tipe_user'];

mysqli_query($koneksi, "update user set username='$nama', password='$password', tipe_user='$tipe_user' where id_user='$id'");
header("location:index.php?pesan=update");

?>


