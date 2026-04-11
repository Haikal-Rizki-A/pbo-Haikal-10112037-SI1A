<?php

class employee {
  public $gaji;
  public $masakerja;
  public function __construct($gaji, $masakerja) {
    $this->gaji = $gaji;
    $this->masakerja = $masakerja;
  }

}
class Programer extends employee {
    public function bonus() {
        if ($this->masakerja >= 10) {
            return $this->gaji * 0.02;
        } elseif ($this->masakerja > 1 && $this->masakerja < 10) {
            return $this->gaji * 0.01;
        } else {
            return 0;
        }
    }
}

class direktur extends employee {
    public function bonus() {
        return ($this->gaji * 0.5);
    }
    public function tunjangan() {
        return ($this->gaji * 0.1);
    }
}

class pegawai extends employee {
    public $stokbarang = 100;
    public $hargabarang = 100000;
    public function __construct($gaji, $masakerja, $stokbarang, $hargabarang) {
        $this->gaji = $gaji;
        $this->masakerja = $masakerja;
        $this->stokbarang = $stokbarang;
        $this->hargabarang = $hargabarang;
    }
    public function bonus() {
        if ($this->stokbarang > 70) {
            return ($this->hargabarang * 0.1 * $this->stokbarang);
        } else {
            return ($this->hargabarang * 0.03 * $this->stokbarang);
        }

    }
}

$datapegawai = [
    [
        "nama" => "Budi",
        "gaji" => 5000000,
        "masakerja" => 12,
        "jabatan" => "Programer"
    ],
    [
        "nama" => "Andi",
        "gaji" => 5000000,
        "masakerja" => 5,
        "jabatan" => "Programer"
    ],
    [
        "nama" => "Siti",
        "gaji" => 5000000,
        "masakerja" => 0,
        "jabatan" => "Programer"
    ],
    [
        "nama" => "Haikal",
        "gaji" => 5000000,
        "masakerja" => 12,
        "jabatan" => "Direktur"
    ],
     [
        "nama" => "kurniawan",
        "gaji" => 5000000,
        "masakerja" => 12,
        "stokbarang" => 80,
        "jabatan" => "pegawai",
    ],
     [
        "nama" => "mulyono",
        "gaji" => 5000000,
        "masakerja" => 4,
        "stokbarang" => 50,
        "jabatan" => "pegawai",
    ]
];

echo "<table border='1' cellpadding='3'>";
echo"<tr>
    <th>Nama</th>
    <th>Gaji Pokok</th>
    <th>Masa Kerja</th>
    <th>Jabatan</th>
    <th>Bonus/Tunjangan</th>
    <th>Total Gaji</th>
</tr>";

foreach ($datapegawai as $d) {
            echo "<tr>";
            echo "<td>" . $d["nama"] . "</td>";
            echo "<td>Rp " . number_format($d["gaji"], 0, ',', '.') . "</td>";
            echo "<td>" . $d["masakerja"] . " Tahun</td>";
            echo "<td>" . ucfirst($d["jabatan"]) . "</td>";

            if ($d["jabatan"] == "Programer") {
                $pegawai = new Programer($d["gaji"], $d["masakerja"]);
                $bonus = $pegawai->bonus();
                $total = $d["gaji"] + $bonus;
                
                echo "<td>Rp " . number_format($bonus, 0, ',', '.') . "</td>";
                echo "<td>Rp " . number_format($total, 0, ',', '.') . "</td>";

            } elseif ($d["jabatan"] == "Direktur") {
                $pegawai = new direktur($d["gaji"], $d["masakerja"]);
                $extra = $pegawai->bonus() + $pegawai->tunjangan();
                $total = $d["gaji"] + $extra;

                echo "<td>Rp " . number_format($extra, 0, ',', '.') . "</td>";
                echo "<td>Rp " . number_format($total, 0, ',', '.') . "</td>";

            } elseif ($d["jabatan"] == "pegawai") {
                $pegawai = new pegawai($d["gaji"], $d["masakerja"], $d["stokbarang"], 100000);
                $tambahan = $pegawai->bonus();
                $total = $d["gaji"] + $tambahan;

            
                echo "<td>Rp " . number_format($tambahan, 0, ',', '.') . "</td>";
                echo "<td>Rp " . number_format($total, 0, ',', '.') . "</td>";
            }
            echo "</tr>";
        }