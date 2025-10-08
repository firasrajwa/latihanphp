<?php
// Array 2 dimensi (tabel mahasiswa: nama, jurusan, angkatan)
$mahasiswa = [
  ["Andi", "Informatika", 2021],
  ["Budi", "Sistem Informasi", 2020],
  ["Citra", "Bisnis Digital", 2022]
];

// Akses elemen dan beri baris baru
echo $mahasiswa[0][0]; // Output: Andi
echo "<br>"; // Pindah ke baris baru
echo $mahasiswa[1][1]; // Output: Sistem Informasi
?>