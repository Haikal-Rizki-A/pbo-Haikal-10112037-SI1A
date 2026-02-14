<?php

class suhu {
    public float $Celci;

    public function __construct ($Celci){
        $this->Celci = $Celci;
    }
//Fahrenheit
    public function Fahren(): float {
        $F = ($this->Celci * 9/5) + 32;
        return $F;
    }
//Reamur
    public function Reamur(): float {
        $R = $this->Celci * 4/5;
        return $R;
    }
//Kelvin
    public function Kelvin(): float {
        $K = $this->Celci + 273;
        return $K;
    }

    public function Tampilkan(){
        echo "KALKULATOR SUHU" . "<br>";
        echo "Celsius    : " . $this->Celci . "°C" . "<br>";
        echo "Fahrenheit : " . $this->Fahren() ."°F" . "<br>";
        echo "Reamur     : " . $this->Reamur() ."°R" . "<br>";
        echo "Kelvin     : " . $this->Kelvin() ."°K" . "<br>";
    }

}

$Suhu1 = new suhu(30);
$Suhu1 ->Tampilkan($Suhu1->Celci)
?>