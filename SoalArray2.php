<?php
echo "\n## Soal 2: Data Buah\n";
echo "---------------------\n";

// Array data buah
$buah = [
    ["Apel", 15000, 10],
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

// 1. Cetak nama buah pertama
// Indeks buah pertama adalah 0, dan indeks nama adalah 0
$namaBuahPertama = $buah[0][0];
echo "Nama buah pertama adalah: $namaBuahPertama\n";

// 2. Hitung total nilai (stok * harga) untuk semua buah
$totalNilaiStok = 0;
foreach ($buah as $item) {
    // $item[1] adalah harga, $item[2] adalah stok
    $nilaiItem = $item[1] * $item[2];
    $totalNilaiStok += $nilaiItem;
}

echo "Total nilai stok semua buah adalah: Rp " . number_format($totalNilaiStok) . "\n";
?>