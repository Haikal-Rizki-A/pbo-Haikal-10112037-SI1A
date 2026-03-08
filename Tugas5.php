<?php
function formatRupiah($angka): string {
    return "Rp " . number_format($angka, 0, ',', '.');
}

class Warung{
    public $nama;
    public $barang;
    public $harga;
    public $jumlah;
    public $member;

public function hitungSubtotal(): int {
        return $this->harga * $this->jumlah;
    }

public function diskonMember(){
    $diskon = 0;
    $subtotal = $this->hitungSubtotal();
    if ($this->member == 1){                
        if ($subtotal >= 500000){
            $diskon = 50000;
        } elseif ($subtotal >= 200000){
            $diskon = 15000;
        } else {
            $diskon = 0; 
        }
    } 
    elseif ($subtotal >= 100000){
        $diskon = 5000;
    }                

    return $diskon;
    }

public function Hsd(){
    return $this->hitungSubtotal() - $this->diskonMember();
    }
}

$errors = [];


$nama =trim ($_POST['nama'] ?? '');
$barang =trim ($_POST['barang'] ?? '');
$harga = (int) ($_POST['harga'] ?? 0);
$jumlah = (int) ($_POST['jumlah'] ?? 0);
$member = (isset($_POST['member']) && $_POST['member'] == "1") ? 1 : 0;

if (empty($nama))
     $errors[] = "Nama pembeli tidak boleh kosong";

if (empty($barang)) 
    $errors[] = "Nama barang tidak boleh kosong";

if ($jumlah <= 0) 
    $errors[] = "Barang harus lebih dari 0";

if ($harga <= 0) 
    $errors[] = "Harga harus lebih dari 0";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hasil Belanja</title>
</head>
<body>
   <h2>Hasil Proses Belanja</h2> 

   <?php if (!empty($errors)) : ?>
    <div style ="color:red;">
        <b>TERJADI KESALAHAN</b>
        <ul>
            <?php foreach($errors as $error) :?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <a href="form_tugas5.php">Kembali Ke Form</a>

<?php else: ?>
    <?php
    $belanja = new Warung();
    $belanja->nama = htmlspecialchars($nama);
    $belanja->barang = htmlspecialchars($barang);
    $belanja->harga = $harga;
    $belanja->jumlah = $jumlah;
    $belanja->member = $member;

    $subtotal = $belanja->hitungSubtotal();
    $diskon = $belanja->diskonMember();
    $total = $belanja->Hsd();


    ?>
    Nama Pembeli : <?= $belanja->nama ?><br>
    Nama Barang : <?= $belanja->barang ?><br>
    Subtotal : <?= formatRupiah($subtotal) ?><br>
    Diskon : <?= formatRupiah($diskon) ?><br>
    <b>Total : <?= formatRupiah($total) ?></b><br><br>

    <a href="form_tugas5.php">Kembali Ke Form</a>
<?php endif; ?>

    
</body>
</html>