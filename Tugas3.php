<?php
class Peminjaman {
    public $pinjam;
    public $bunga;
    public $lamaAngsuran;
    public $keterlambatan;

public function pbunga(){
    $pbunga = $this->bunga/100;
    return $pbunga;
 }

public function tambahan(){
    $tambah = $this->pinjam * $this->pbunga();
    return $tambah;
}
public function Ptotal() {
    $ptotal = $this->pinjam + $this->tambahan();
    return $ptotal;
}
public function Angsuran(){
    $ang = $this->Ptotal()/$this->lamaAngsuran;
    return $ang;
}
public function pdenda(){
    $pden = ($this->keterlambatan * 0.15)/100;
    return $pden;
}

public function denda(){
    $den = $this->Angsuran() * $this->pdenda();
    return $den; 
}

public function tdenda(){
    $tden = $this->Angsuran() + $this->denda();
    return $tden; 
}

}

$pinjaman1 = new Peminjaman();

$pinjaman1->pinjam = htmlspecialchars($_POST['pinjam']);
$pinjaman1->bunga = htmlspecialchars($_POST['bunga']);
$pinjaman1->lamaAngsuran = htmlspecialchars($_POST['lamaAngsuran']);
$pinjaman1->keterlambatan = htmlspecialchars($_POST['keterlambatan']);
echo "<h2>Data Peminjaman</h2>";
echo "jumlah pinjaman : Rp. " . $pinjaman1->pinjam . "<br>";
echo "Bunga : " . $pinjaman1->bunga." %"."<br>";
echo "Total Pinjaman : Rp. " . $pinjaman1->Ptotal(). "<br>";
echo "Lama Angsuran : ". $pinjaman1->lamaAngsuran." Bulan"."<br>";
echo "Besaran angsuran : Rp. ". $pinjaman1->Angsuran()."<br>";
echo "Keterlambatan Angsuran : ". $pinjaman1->keterlambatan." Hari"."<br>";
echo "Denda Keterlambatan : Rp. ". $pinjaman1->denda()."<br>";
echo "Besaran Pembayaran : Rp. ". $pinjaman1->tdenda()."<br>";

?>