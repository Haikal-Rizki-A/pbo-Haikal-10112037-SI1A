<?php


class Belanja{ //class belanja sebagai blueprint

    //jenis variabel instance 
    public string $namapembeli; //variabel ini pake string karena yang diimputkan berupa nama 
    public string $namabarang="syal";
    public int $harga=100000; //variabel ini menggunaka integer karena isinya adalah bilangan bulat
    public int $jumlah=1;
    public float $total=100000;
    public float $diskon=0.1; //variabel ini menggunaka float karena isinya adalah bilangan desimal

    //jenis variabel static
    public static float $pajak=0.01;
  
    //method
    public function __construct ($namapembeli){
        $this->namapembeli = $namapembeli;
    }

    public function total(): float{
        $subtotal = $this->harga * $this->jumlah; // operator aritmatika untuk mengihutng total
        return $subtotal;

    }

    public function Diskon(): float{
        $diskon = $this->total() * $this->diskon ; // Menghitung diskon nya 
        return $diskon;
       
    }
    
    public function hargadiskon(): float{
        $HSD = $this->total() - $this->Diskon() ; // Menghiung harga setelah diskon
        return $HSD;
       
    }
    

    public function TampilRincian(): void{
        echo "nama Pembeli  : " . $this->namapembeli . "<br>"; //Menampilkan nama pembeli
        echo "nama Barang   : " . $this->namabarang . "<br>"; //Menampilkan nama barang
        echo "nama Harga    : " . $this->harga . "<br>"; //Menampilkan harga barang
        echo "Jumlah Barang : " . $this->jumlah . "<br>"; //Menampilkan jumlah barang
        echo "Total Bayar   : " . $this->total() . "<br>";
        echo "Diskon        : " . $this->Diskon() . "<br>";
        echo "Harga setelah diskon  : " . $this->hargadiskon() . "<br>";

    }
}

$belanja1 = new Belanja("Amba");
$belanja1->TampilRincian($belanja1->namapembeli);
?>
 