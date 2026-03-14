<?php

$data = [
    ["nama"=>"Haikal","nilai"=>90],
    ["nama"=>"Budi","nilai"=>80],
    ["nama"=>"Mulyono","nilai"=>75]
];

echo "<table border='1'>";
echo "<tr><th>Nama</th><th>Nilai</th></tr>";

foreach ($data as $d) {
    echo "<tr>";
    echo "<td>" . $d["nama"] . "</td>";
    echo "<td>" . $d["nilai"] . "</td>";
    echo "</tr>";
}

echo "</table>";

?>