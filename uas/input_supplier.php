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

    <h3>Input Data Supplier</h3>

    <form action="input-aksi_supplier.php" method="post">
        <table cellpadding="8">
            <tr>
                <td>ID Supplier</td>
                <td><input type="text" name="id_supplier" required placeholder="Contoh: SUP001"></td>
            </tr>
            <tr>
                <td>Nama Supplier</td>
                <td><input type="text" name="nama_supplier" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat_supplier" required></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td><input type="text" name="telepon_supplier" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email_supplier" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass_supplier" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan" class="tombol-simpan"></td>
            </tr>
        </table>
    </form>

</body>
</html>