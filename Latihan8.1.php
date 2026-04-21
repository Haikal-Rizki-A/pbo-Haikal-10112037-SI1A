<?php

class segitiga {

    public $lebar;
    public $tinggi;
    

    public function __construct($lebar, $tinggi)
    {
        $this->lebar = $lebar;
        $this->tinggi = $tinggi;
    }

    public function luas()
    {
        $luas = $this->lebar * $this->tinggi;
        echo "tinggi segitiga : " . $this->tinggi . "<br>";
        echo "lebar segitiga : " . $this->lebar . "<br>";
        echo "luas segitiga : " . $luas . "<br>";
    }

}

$segitiga1 = new segitiga(10, 5);
$segitiga1->luas();
?>