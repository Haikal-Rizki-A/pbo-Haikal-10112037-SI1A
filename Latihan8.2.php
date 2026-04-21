<?php

class manusia{
    public $nama;
    public $warna;

    public function __construct()
    {
        echo "ini adalah method construct."."<br>";
    }

    public function __destruct()
    {
        echo "ini method destruct "."<br>";
    }

    function tampilkan_nama(){
        echo "nama saya Mahasiswa SI ". "<br>";
    }

}
$manusia1 = new manusia();
echo $manusia1->tampilkan_nama();


