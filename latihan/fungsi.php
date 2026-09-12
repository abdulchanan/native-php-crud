<?php

function kali($angka1, $angka2) {
    $jumlah = $angka1 * $angka2;
    return $jumlah;
}

$penjumlahan = kali(9, 7);
echo $penjumlahan;



echo "Hari ini adalah :"  . date("Y/m/d") . "<br>";
echo "Hari ini adalah :"  . date("l, F j, Y");


?>