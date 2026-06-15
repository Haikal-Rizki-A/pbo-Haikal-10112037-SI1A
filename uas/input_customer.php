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

    <h3>Input Data Customer</h3>

    <form action="input-aksi_customer.php" method="post">
        <table cellpadding="8">
            <tr>
                <td>ID Customer</td>
                <td><input type="text" name="id_customer" required></td>
            </tr>
            <tr>
                <td>Nama Customer</td>
                <td><input type="text" name="nama_customer" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="jenis_kelamin" required style="width: 100%; padding: 5px;">
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat_customer" required></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td><input type="text" name="telepon_customer" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email_customer" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="pass_customer" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan" class="tombol-simpan"></td>
            </tr>
        </table>
    </form>

</body>
</html>