<?php

function formatRupiah($angka): string {
    return "Rp " . number_format($angka, 0, ',', '.');
}


class Belanja {
    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBeli;

    
    public function hitungSubtotal(): int {
        return $this->hargaBarang * $this->jumlahBeli;
}
    public function hitungtotaldengandiskon($persendiskon){
        $subtotal = $this->hitungSubtotal();
        $diskon = $persendiskon/100 * $subtotal;
        return $subtotal - $diskon;
    }


}

$data =[
    'namaPembeli'=> "Haikal",
    'namaBarang'=> "Kaos",
    'hargaBarang'=> 300000,
    'jumlahBeli'=> 1,
];

$belanja1 = new Belanja();
$belanja1->namaPembeli = $data["namaPembeli"];
$belanja1->namaBarang = $data["namaBarang"];
$belanja1->hargaBarang = $data["hargaBarang"];
$belanja1->jumlahBeli = $data["jumlahBeli"];

echo "<h2>Struk Belanja</h2>";

echo "Nama Pembeli : " . $belanja1->namaPembeli . "<br>";
echo "Nama Baramg : " . $belanja1->namaBarang . "<br>";
echo "Subtotal : " . formatRupiah($belanja1->hitungSubtotal()) . "<br>";
echo "Total (Diskon 20%) : " . formatRupiah($belanja1 ->hitungtotaldengandiskon(20)) . "<br>";
?>