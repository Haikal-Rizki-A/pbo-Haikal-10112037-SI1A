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
    <a href="input_customer.php" class="tombol">Tambah Data Baru</a>

    <h3>Data Customer</h3>
    <table class="table" border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>id customer</th>
                <th>Nama Customer</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Email</th>
                <th>Password</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            include "koneksi.php";
            $nomor = 1;
            $query_mysql = mysqli_query($koneksi, "SELECT * FROM tb_customer");
            
            while ($data = mysqli_fetch_array($query_mysql)) {
            ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo htmlspecialchars($data['id_customer']); ?></td>
                <td><?php echo htmlspecialchars($data['nama_customer']); ?></td>
                <td><?php echo htmlspecialchars($data['jenis_kelamin']); ?></td>
                <td><?php echo htmlspecialchars($data['alamat_customer']); ?></td>
                <td><?php echo htmlspecialchars($data['telepon_customer']); ?></td>
                <td><?php echo htmlspecialchars($data['email_customer']); ?></td>
                <td><?php echo htmlspecialchars($data['pass_customer']); ?></td>
                
                <td>
                    <a href="edit_customer.php?id=<?= $data['id_customer'] ?>" class="edit">Edit</a>
                    |
                    <a href="hapus_customer.php?id=<?= $data['id_customer'] ?>" class="hapus" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>