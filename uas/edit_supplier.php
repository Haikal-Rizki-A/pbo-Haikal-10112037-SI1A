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
    <a href="data_supplier.php" class="tombol">Kembali</a>
    <br><br>

    <h3>Edit Supplier</h3>

    <?php
    include "koneksi.php";
    
    $id = $_GET['id'];
    $query_mysqli = mysqli_query($koneksi, "SELECT * FROM tb_supplier WHERE id_supplier = '$id'");
    
    while ($data = mysqli_fetch_array($query_mysqli)) {
    ?>
    <form action="update_supplier.php" method="post">
        <table cellpadding="8">
            <tr>
                <td>Nama Supplier</td>
                <td>
                    <input type="hidden" name="id_supplier" value="<?php echo htmlspecialchars($data['id_supplier']); ?>">
                    <input type="text" name="nama_supplier" value="<?php echo htmlspecialchars($data['nama_supplier']); ?>" required>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <input type="text" name="alamat_supplier" value="<?php echo htmlspecialchars($data['alamat_supplier']); ?>" required>
                </td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td><input type="text" name="telepon_supplier" value="<?php echo htmlspecialchars($data['telepon_supplier']); ?>" required></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td><input type="text" name="telepon_customer" value="<?php echo htmlspecialchars($data['telepon_customer']); ?>" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email_supplier" value="<?php echo htmlspecialchars($data['email_supplier']); ?>" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="pass_supplier" value="<?php echo htmlspecialchars($data['pass_supplier']); ?>" required></td>
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