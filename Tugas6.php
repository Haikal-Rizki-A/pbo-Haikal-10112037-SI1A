<?php

class bangunRuang {
    public $nama;
    public $sisi;
    public $jari2;
    public $tinggi;


    public function Volume(): float {
        if ($this->nama == "bola"){
            return (4/3) * pi() * pow($this->jari2, 3);
        }elseif ($this->nama == "kerucut"){
            return (1/3) * pi() * pow($this->jari2, 2) * $this->tinggi;
        }elseif ($this->nama == "limas segi empat"){
            return (1/3) * pow($this->sisi, 2) * $this->tinggi;
        }elseif ($this->nama == "kubus"){
            return pow($this->sisi, 3);
        }elseif ($this->nama == "tabung"){
            return pi() * pow($this->jari2, 2) * $this->tinggi;
        } else {
        return 0;}
}


}
$databangunRuang = [
    [
        "nama" => "bola",
        "sisi" => 0,
        "jari2" => 7,
        "tinggi" => 0,
    ],
    [
        "nama" => "kerucut",
        "sisi" => 0,
        "jari2" => 14,
        "tinggi" => 10,
    ],
    [
        "nama" => "limas segi empat",
        "sisi" => 8,
        "jari2" => 0,
        "tinggi" => 24,
    ],
    [
        "nama" => "kubus",
        "sisi" => 30,
        "jari2" => 0,
        "tinggi" => 0,
    ],
    [
        "nama" => "tabung",
        "sisi" => 0,
        "jari2" => 7,
        "tinggi" => 10,
    ]
];

 echo "<table border='1' cellpadding='3'>";
    echo "<tr>
            <th>Nama Bangun Ruang</th>
            <th>sisi</th>
            <th>jari-jari</th>
            <th>tinggi</th>
            <th>Volume</th>
        </tr>";

foreach ($databangunRuang as $data) {
    $bangun = new bangunRuang();
    $bangun->nama = $data["nama"];
    $bangun->sisi = $data["sisi"];
    $bangun->jari2 = $data["jari2"];
    $bangun->tinggi = $data["tinggi"];

    echo "<tr>
            <td>" . $bangun->nama . "</td>
            <td>" . $bangun->sisi . "</td>
            <td>" . $bangun->jari2 . "</td>
            <td>" . $bangun->tinggi . "</td>
            <td>" . $bangun->Volume() . "</td>
        </tr>";

}
