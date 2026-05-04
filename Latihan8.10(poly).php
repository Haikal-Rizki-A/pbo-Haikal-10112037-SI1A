<?php

abstract class hewan{
    abstract public function makan();
    abstract public function bergerak();
    abstract public function beranak();
}
class burung extends hewan{
    public function makan(){
        return "makan biji-bijian";
    }
    public function bergerak(){
        return "terbang";
    }
    public function beranak(){
        return "bertelur";
    }
}

class kambing extends hewan{
    public function makan(){
        return "makan rumput";
    }
    public function bergerak(){
        return "berjalan";
    }
    public function beranak(){
        return "melahirkan anak kambing";
    }
}

$burung1 = new burung();
$kambing1 = new kambing();

echo "<b>Perilaku Burung</b><br>";
echo "makan : " . $burung1->makan() . "<br>";
echo "bergerak : " . $burung1->bergerak() . "<br>";
echo "beranak : " . $burung1->beranak() . "<br>";

echo "<br>";
echo "<b>Perilaku Kambing</b><br>";
echo "makan : " . $kambing1->makan() . "<br>";
echo "bergerak : " . $kambing1->bergerak() . "<br>";
echo "beranak : " . $kambing1->beranak() . "<br>";
?>