<?php

class kendaraan {
    var $jumlahroda;
    var $warna;
    var $bahanbakar;
    var $harga;
    var $merk;
    var $tahunpembuatan;

    function setmerek ($x) {
        $this->merk = $x;
    }

    function getmerek() {
        return $this->merk;
    }

    function setharga ($y) {
        $this->harga = $y;
    }

    function getharga() {
        return $this->harga;
    }
    
}

$kendaraan1 = new kendaraan();
$kendaraan1-> setmerek("MIO Sporty");
$kendaraan1-> setharga(15000000);
echo $kendaraan1->getmerek() . "<br>";
echo $kendaraan1->getharga() . "<br>";

