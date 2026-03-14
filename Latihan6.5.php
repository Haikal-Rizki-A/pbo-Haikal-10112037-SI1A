<?php

function formatRupiah($angka): string {
    return "Rp " . number_format($angka, 0, ',', '.');
}

class Belanja {
    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBeli;
    public $member;

    public function hitungSubtotal(): int {
        return $this->hargaBarang * $this->jumlahBeli;
    }

    public function diskonMember() {
    $diskon = 0;
    $subtotal = $this->hitungSubtotal();

    if ($this->member == true) {
        if ($subtotal >= 500000) {
            $diskon = 50000;
        } elseif ($subtotal >= 200000) {
            $diskon = 15000;
        } 
        } else {
        if ($subtotal >= 100000) {
            $diskon = 5000;
        }
    }
    
    return $diskon;
}

    public function hitungtotaldengandiskon() {
        $subtotal = $this->hitungSubtotal();
        $diskon = $this->diskonMember();
        return $subtotal - $diskon;
    }
}

$data = [
    [
        "namaPembeli" => "Lau siape pruy",
        "namaBarang" => "Kaos",
        "hargaBarang" => 300000,
        "jumlahBeli" => 1,
        "member" => true,
    ],
    [
        "namaPembeli" => "Budi",
        "namaBarang" => "celana",
        "hargaBarang" => 200000,
        "jumlahBeli" => 1,
        "member" => true,
    ],
    [
        "namaPembeli" => "Haikal",
        "namaBarang" => "RTX 5090",
        "hargaBarang" => 20000000,
        "jumlahBeli" => 1,
        "member" => true,
    ]
];

echo "<table border='1' cellpadding='6'>";

       echo "<tr>
            <th>No</th>
            <th>Nama Pembeli</th>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Jumlah Beli</th>
            <th>member</th>
            <th>Subtotal</th>
            <th>Diskon</th>
            <th>Total Bayar</th>
        </tr>";

        $no = 1;
foreach($data as $d) {


    $belanja = new Belanja();
    $belanja->namaPembeli = $d["namaPembeli"];
    $belanja->namaBarang = $d["namaBarang"];
    $belanja->hargaBarang = $d["hargaBarang"];
    $belanja->jumlahBeli = $d["jumlahBeli"];
    $belanja->member = $d["member"];

    echo "<tr>
            <td>$no</td>
            <td>{$belanja->namaPembeli}</td>
            <td>{$belanja->namaBarang}</td>
            <td>" . formatRupiah($belanja->hargaBarang) . "</td>
            <td>{$belanja->jumlahBeli}</td>
            <td>" . ($belanja->member ? "Ya" : "Tidak") . "</td>
            <td>" . formatRupiah($belanja->hitungSubtotal()) . "</td>
            <td>" . formatRupiah($belanja->diskonMember()) . "</td>
            <td><b>" . formatRupiah($belanja->hitungtotaldengandiskon()) . "</b></td>
        </tr>";

    $no++;
}

echo "</table>";

?>