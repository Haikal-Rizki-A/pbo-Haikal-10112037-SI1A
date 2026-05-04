<?php

class manusia{
    protected $nama = "Ardi";
    var $kelas = "SI-1A";

    protected function nama(){
        return "Nama : " . $this->nama;
    }

    function tampilkan_nama(){
        return $this->nama;
    }

    protected function tampilkan_kelas(){
        return "Kelas : " . $this->kelas;
    }
}

$manusia1 = new manusia();
echo $manusia1->tampilkan_nama() . "<br>";
echo $manusia1->tampilkan_kelas();
?>