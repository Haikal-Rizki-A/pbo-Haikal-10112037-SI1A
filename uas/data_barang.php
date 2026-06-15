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

    <div class="menu">
        <ul>
            <li><a href="index.php">Data User</a></li>
            <li><a href="">Data Transaksi</a></li>
            <li><a href="">Laporan</a></li>
            <li class="dropdown">
                <a href="#"><span>Data Master</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                    <li><a href="data_barang.php">Data Barang</a></li>
                    <li><a href="data_supplier.php">Data Supplier</a></li>
                    <li><a href="data_customer.php">Data Customer</a></li>
                </ul>
            </li>
        </ul>
    </div>
      
    <br>

    <?php
    if (isset($_GET['pesan'])) {
        $pesan = $_GET['pesan'];
        if ($pesan == "input") {
            echo "<p class='alert' style='color: green; font-weight: bold;'>Data berhasil di-input</p>";
        } else if ($pesan == "update") {
            echo "<p class='alert' style='color: blue; font-weight: bold;'>Data berhasil di-update</p>";
        } else if ($pesan == "delete") {
            echo "<p class='alert' style='color: red; font-weight: bold;'>Data berhasil di-hapus</p>";
        }
    }
    ?>

    <br>
    <a href="input_barang.php" class="tombol">Tambah Data Baru</a>

    <h3>Data Barang</h3>
    <table class="table" border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Kode Jenis</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Gambar</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            include "koneksi.php";
            $nomor = 1;
            $query_mysql = mysqli_query($koneksi, "SELECT * FROM tb_barang");
            
            while ($data = mysqli_fetch_array($query_mysql)) {
            ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo htmlspecialchars($data['kd_barang']); ?></td>
                <td><?php echo htmlspecialchars($data['kode_jenis']); ?></td>
                <td><?php echo htmlspecialchars($data['nama_barang']); ?></td>
                <td><?php echo htmlspecialchars($data['stok']); ?></td>
                <td><?php echo htmlspecialchars($data['harga_beli']); ?></td>
                <td><?php echo htmlspecialchars($data['harga_jual']); ?></td>
                
                <td>
                    <?php if (!empty($data['gambar_produk'])): ?>
                        <img src="img/<?php echo htmlspecialchars($data['gambar_produk']); ?>" alt="Gambar Barang" width="50" height="50" style="object-fit: cover;">
                    <?php else: ?>
                        <span style="color: gray; font-style: italic;">Tidak ada gambar</span>
                    <?php endif; ?>
                </td>
                
                <td>
                    <a href="edit_barang.php?id=<?= $data['kd_barang'] ?>" class="edit">Edit</a>
                    |
                    <a href="hapus_barang.php?id=<?= $data['kd_barang'] ?>" class="hapus" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>