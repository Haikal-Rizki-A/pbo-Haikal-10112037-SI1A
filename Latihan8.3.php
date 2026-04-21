<?php

echo "silahkan masukan username: ";
$input_nama = fopen("php://stdin", "r");
$nama = trim(fgets($input_nama));

echo "welcome, $nama"; 


?>