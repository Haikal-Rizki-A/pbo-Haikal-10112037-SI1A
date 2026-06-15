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
    <a href="data_customer.php" class="tombol">Kembali</a>
    <br><br>

    <h3>Edit Customer</h3>

    <?php
    include "koneksi.php";
    
    $id = $_GET['id'];
    $query_mysqli = mysqli_query($koneksi, "SELECT * FROM tb_customer WHERE id_customer = '$id'");
    
    while ($data = mysqli_fetch_array($query_mysqli)) {
    ?>
    <form action="update_customer.php" method="post">
        <table cellpadding="8">
            <tr>
                <td>Nama Customer</td>
                <td>
                    <input type="hidden" name="id_customer" value="<?php echo htmlspecialchars($data['id_customer']); ?>">
                    <input type="text" name="nama_customer" value="<?php echo htmlspecialchars($data['nama_customer']); ?>" required>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="jenis_kelamin" required style="width: 100%; padding: 5px;">
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="Laki-laki" <?php echo ($data['jenis_kelamin'] == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                        <option value="Perempuan" <?php echo ($data['jenis_kelamin'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat_customer" value="<?php echo htmlspecialchars($data['alamat_customer']); ?>" required></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td><input type="text" name="telepon_customer" value="<?php echo htmlspecialchars($data['telepon_customer']); ?>" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email_customer" value="<?php echo htmlspecialchars($data['email_customer']); ?>" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="pass_customer" value="<?php echo htmlspecialchars($data['pass_customer']); ?>" required></td>
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