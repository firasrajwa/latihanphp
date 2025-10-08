<?php
echo "\n## Soal 4: Matriks Acak 3x3\n";
echo "---------------------------\n";

// Buat array 2 dimensi 3x3 berisi angka acak (1-9)
$matriks = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriks[$i][$j] = rand(1, 9);
    }
}

// Cetak array dalam bentuk matriks
echo "Matriks 3x3 Acak:\n";
$totalJumlah = 0;
foreach ($matriks as $baris) {
    foreach ($baris as $elemen) {
        echo $elemen . "  "; // Cetak elemen
        $totalJumlah += $elemen; // Tambahkan elemen ke total
    }
    echo "\n"; // Pindah baris setelah satu baris selesai
}

// Hitung jumlah total semua elemen
echo "\nJumlah total semua elemen dalam matriks adalah: $totalJumlah\n";
?>