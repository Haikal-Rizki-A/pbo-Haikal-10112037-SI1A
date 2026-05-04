<?php

class manusia{
    private $nama = "Ardi";
    private $kelas = "SI-1A";

    private function m_nama(){
        return $this->nama;
    }

    function tampilkan_nama(){
        return $this->m_nama();
    }

    function tampilkan_kelas(){
        return $this->kelas;
    }
}

$manusia1 = new manusia();
echo "Nama : " . $manusia1->tampilkan_nama() . "<br>";
echo "Kelas : " . $manusia1->tampilkan_kelas();
?>