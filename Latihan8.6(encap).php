<?php

class manusia{
    public $nama = "Ardi";
    public $kelas = "SI-1A";

    function tampilkan_nama(){
        return $this->nama;
    }

    function tampilkan_kelas(){
        return $this->kelas;
    }
}

$manusia1 = new manusia();
echo "Nama : " . $manusia1->tampilkan_nama() . "<br>";
echo "Kelas : " . $manusia1->tampilkan_kelas();

?>