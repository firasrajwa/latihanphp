<?php
// 1. Membuat array awal
$punakawan = array("Perunggu", "The Adams", "Fstvlst", "Alkateri");

// 2. Menampilkan elemen index ke-0, hasilnya " perunggu"
echo $punakawan[0]; 
echo "<br>";

// 3. Menampilkan elemen index ke-3, hasilnya "Bagong"
echo $punakawan[3]; 
echo "<br>";

// 4. Mengubah nilai pada array
$punakawan[1] = "Perunggu";   // Mengubah "The Adams" menjadi "Perunggu"
$punakawan[2] = "The Adams";  // Mengubah "Fstvlst" menjadi "The Adams"
$punakawan[3] = "Fstvlst";  // Mengubah "Alkateri" menjadi "Fstvlst"
$punakawan[4] = "Alkateri";  // Menambahkan elemen baru di index ke-4

// 5. Menampilkan elemen index ke-3 setelah diubah, hasilnya "Fstvlst"
echo $punakawan[3]; 
?>