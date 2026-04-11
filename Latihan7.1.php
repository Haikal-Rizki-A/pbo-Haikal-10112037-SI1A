<?php

class Produk {
    public $nama;
    public $harga;
    
    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
   
    }
    public function Getinfo(){
        return "Nama Produk : ".$this->nama."<br>"."Harga : Rp ".number_format($this->harga, 0, ',', '.');
    }
}

class produkdigital extends produk {
    public $ukuranfile;

    public function __construct($nama, $harga, $ukuranfile) {
        parent::__construct($nama, $harga);
        $this->ukuranfile = $ukuranfile;
    }
    public function Getinfo(){
        return "produk digital <br>"."Nama Produk : ".$this->nama."<br>"."Harga : Rp ".number_format($this->harga, 0, ',', '.')."<br>"."Ukuran File : ".$this->ukuranfile." MB";
    }
}

$produk1 = new produk("Buku", 50000);
$produkdigital1 = new produkdigital("E-book PHP", 200000, 100);

echo $produk1->Getinfo();
echo "<br><br>";
echo $produkdigital1->Getinfo();   
?>