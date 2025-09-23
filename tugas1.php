<?php
// Meskipun keduanya adalah string, PHP akan mengubahnya menjadi angka
$variabel1 = "100";
$variabel2 = "50";

// Operator (+) memaksa PHP melakukan operasi matematika
$hasil_penjumlahan = $variabel1 + $variabel2; 

echo "Hasil dari \"100\" + \"50\" adalah: " . $hasil_penjumlahan; 
// Outputnya adalah 150, bukan "10050"
?>