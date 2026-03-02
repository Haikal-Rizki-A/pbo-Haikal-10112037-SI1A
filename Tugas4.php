<?php

class Nilai{
    public $nama; 
    public $kelas;
    public $matkul;
    public $nilai;

public function statusKelulusan(){
    if ($this->nilai >= 82){
        $status = "LULUS";
    }else{
        $status = "TIDAK LULUS";
    }
    return $status;
}


}
    
$dataNama = [
    '0' => "Haikal",
    '1'=> "Joko",
    '2'=> "Anwar",
];

$dataNilai = [
    '0' => 92,
    '1'=> 82,
    '2'=> 79,
];

$dataUmum = [
    'Kelas' => "SI-1A",
    'Matkul' => "Pemograman Berorientasi Objek",
];

$NilaiH = new Nilai();
$NilaiH -> nama = $dataNama["0"];
$NilaiH -> kelas = $dataUmum["Kelas"];
$NilaiH -> matkul = $dataUmum["Matkul"];
$NilaiH -> nilai = $dataNilai["0"];

echo "<h2>Data Kelususan</h2>";
echo "Nama : ". $NilaiH->nama ."<br>";
echo "Kelas : ". $NilaiH->kelas ."<br>";
echo "Mata kuliah : ". $NilaiH->matkul ."<br>";
echo "Nilai : ". $NilaiH->nilai ."<br>";
echo "Nama : ". $NilaiH->statusKelulusan() ."<br>";
echo "=================================================================================================="."<br>";

$NilaiJ = new Nilai();
$NilaiJ -> nama = $dataNama["1"];
$NilaiJ -> kelas = $dataUmum["Kelas"];
$NilaiJ -> matkul = $dataUmum["Matkul"];
$NilaiJ -> nilai = $dataNilai["1"];


echo "Nama : ". $NilaiJ->nama ."<br>";
echo "Kelas : ". $NilaiJ->kelas ."<br>";
echo "Mata kuliah : ". $NilaiJ->matkul ."<br>";
echo "Nilai : ". $NilaiJ->nilai ."<br>";
echo "Nama : ". $NilaiJ->statusKelulusan() ."<br>";
echo "=================================================================================================="."<br>";

$NilaiA = new Nilai();
$NilaiA -> nama = $dataNama["2"];
$NilaiA -> kelas = $dataUmum["Kelas"];
$NilaiA -> matkul = $dataUmum["Matkul"];
$NilaiA -> nilai = $dataNilai["2"];

echo "Nama : ". $NilaiA->nama ."<br>";
echo "Kelas : ". $NilaiA->kelas ."<br>";
echo "Mata kuliah : ". $NilaiA->matkul ."<br>";
echo "Nilai : ". $NilaiA->nilai ."<br>";
echo "Nama : ". $NilaiA->statusKelulusan() ."<br>";
echo "=================================================================================================="."<br>";

?>