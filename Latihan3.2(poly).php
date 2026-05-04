<?php

class kendaraan {
    var $jumlahroda;
    var $warna;
    var $bahanbakar;
    var $harga;
    var $merk;

    function statusHarga(){
        if ($this->harga > 50000000) {
            $status = "Mahal";
        } else {    
            $status = "Murah";
        }
        return $status;
    }

    function setmerek ($x) {
        $this->merk = $x;
    }

    function setharga ($x) {
        $this->harga = $x;
    }
    
}

$kendaraan1 = new kendaraan();
$kendaraan1-> setmerek("MIO Sporty");
$kendaraan1-> setharga(15000000);
echo $kendaraan1->statusHarga();

