<?php
function penjumlahan ($angka1, $angka2)
{
    $a = $angka1;
    $b = $angka2;
    $hasil = $a + $b;
    return $hasil;
}

$hasil1 = penjumlahan(40,80);
$hasil2 = penjumlahan(5,11);
$hasil3 = penjumlahan(555,248);

echo "Hasil penjumlahan dari : </br>";
echo "1)  40 + 80 = $hasil1 </br>";
echo "2)  5 + 11 = $hasil2 </br>";
echo "3)  555 + 248 = $hasil3";
?>