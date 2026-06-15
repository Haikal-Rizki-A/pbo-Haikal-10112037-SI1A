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

    <h3>Input Data Barang</h3>
    
    <form action="input-aksi_barang.php" method="post">
        <table cellpadding="8">
            <tr>
                <td>Kode Barang</td>
                <td><input type="text" name="kd_barang" required placeholder="Contoh: BRG001"></td>
            </tr>
            <tr>
                <td>Kode Jenis</td>
                <td>
                <select name="kode_jenis" required style="width: 100%; padding: 5px;">
                <option value="">-- Pilih Jenis Barang --</option>
                <?php
                include "koneksi.php";
                $query_jenis = mysqli_query($koneksi, "SELECT * FROM tb_jenis");
                
                while ($jenis = mysqli_fetch_array($query_jenis)) {
                    echo "<option value='".$jenis['kode_jenis']."'>".$jenis['kode_jenis']." - ".$jenis['nama_jenis']."</option>";
                }
                ?>
                </select>
                </td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang" required></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="number" name="stok" min="0" required></td>
            </tr>
            <tr>
                <td>Harga Beli</td>
                <td><input type="text" name="harga_beli" min="0" required></td>
            </tr>
            <tr>
                <td>Harga Jual</td>
                <td><input type="text" name="harga_jual" min="0" required></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>
                    <input type="file" name="gambar_produk" accept="image/*">
                    <small style="color: gray; display: block; margin-top: 5px;">*Boleh dikosongkan jika tidak ada gambar</small>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan" class="tombol-simpan"></td>
            </tr>
        </table>
    </form>

</body>
</html>