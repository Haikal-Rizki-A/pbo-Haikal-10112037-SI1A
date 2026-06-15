<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat CRUD dengan PHP dan MySQL</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="judul">
        <h1>Membuat CRUD dengan PHP dan MySQL</h1>
        <h2>Menampilkan Data dari Database</h2>
    </div>
    
    <br>
    <a href="data_barang.php" class="tombol">Kembali</a>
    <br><br>

    <h3>Edit Barang</h3>
    
    <?php
    include "koneksi.php";
    
    $id = $_GET['id'];
    $query_mysqli = mysqli_query($koneksi, "SELECT * FROM tb_barang WHERE kd_barang = '$id'");
    
    while ($data = mysqli_fetch_array($query_mysqli)) {
    ?>
    <form action="update_barang.php" method="post">
        <table cellpadding="8">
            <tr>
                <td>Nama Barang</td>
                <td>
                    <input type="hidden" name="kd_barang" value="<?php echo htmlspecialchars($data['kd_barang']); ?>">
                    <input type="text" name="nama_barang" value="<?php echo htmlspecialchars($data['nama_barang']); ?>" required>
                </td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="number" name="stok" value="<?php echo htmlspecialchars($data['stok']); ?>" required></td>
            </tr>
            <tr>
                <td>Harga Beli</td>
                <td><input type="number" name="harga_beli" value="<?php echo htmlspecialchars($data['harga_beli']); ?>" required></td>
            </tr>
            <tr>
                <td>Harga Jual</td>
                <td><input type="number" name="harga_jual" value="<?php echo htmlspecialchars($data['harga_jual']); ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan" class="tombol-simpan"></td>
            </tr>
        </table>
    </form>
    <?php } ?>

</body>
</html>