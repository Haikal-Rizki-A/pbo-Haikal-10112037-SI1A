<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>membuat CRUD dengan php dan mysql</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>membuat CRUD dengan php dan mysql</h1>
        <h2>menampilkan data dari database</h2>
    </div>
    <br>

    <a href="index.php">kembali</a>

    <br>
    <h3>edit data</h3>
    <?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query_mysqli = mysqli_query($koneksi, "select * from user where id_user=".$id);
    $nomor = 1;
    while($data = mysqli_fetch_array($query_mysqli)){
    ?>
    <form action="update.php" method="post">
        <table>
            <tr>
                <td>username</td>
                <td>
                    <input type="hidden" name="id_user" value="<?php echo $data['id_user']?>">
                    <input type="text" name="username" value="<?php echo $data['username']?>">
                </td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="text" name="password" value="<?php echo $data['password']?>"></td>
            </tr>
            <tr>
                <td>tipe user</td>
                <td><input type="text" name="tipe_user" value="<?php echo $data['tipe_user']?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="simpan"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>