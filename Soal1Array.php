<?php
echo "## Soal 1: Data Siswa\n";
echo "-----------------------\n";

// Buat array 2 dimensi berisi data 3 siswa
$siswa = [
    ["Budi", 80, 85], // Siswa ke-1
    ["Citra", 90, 88], // Siswa ke-2
    ["Andi", 75, 82]  // Siswa ke-3
];

// Cetak nilai Bahasa dari siswa ke-2
// Indeks siswa ke-2 adalah 1, dan indeks nilai Bahasa adalah 2
$nilaiBahasaCitra = $siswa[1][2];
echo "Nilai Bahasa dari siswa ke-2 (Citra) adalah: $nilaiBahasaCitra\n\n";

// Cetak semua data menggunakan looping
echo "Semua data siswa:\n";
foreach ($siswa as $data) {
    echo "Nama: " . $data[0] . ", Nilai Matematika: " . $data[1] . ", Nilai Bahasa: " . $data[2] . "\n";
}
?>