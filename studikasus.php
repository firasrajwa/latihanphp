<?php

// Mengatur header agar output di browser bisa menampilkan HTML
header('Content-Type: text/html; charset=utf-t');

echo "<h1>Kumpulan 5 Contoh Kasus Percabangan PHP</h1>";
echo "<hr>";

// ===================================================================
// KASUS 1: Proses Login Pengguna
// ===================================================================
echo "<h2>1. Kasus: Proses Login Pengguna</h2>";

// Data yang seharusnya disimpan di database
$user_tersimpan = 'admin';
$pass_tersimpan = 'rahasia123';

// Data yang diinput oleh pengguna (disimulasikan)
$input_user = 'admin';
$input_pass = 'rahasia123';

echo "Mencoba login dengan username: '{$input_user}' dan password: '{$input_pass}'<br>";

// Percabangan untuk mengecek login
if ($input_user == $user_tersimpan && $input_pass == $pass_tersimpan) {
    echo "<b>Hasil:</b> ✅ Login berhasil! Selamat datang, {$input_user}.<br>";
} else {
    echo "<b>Hasil:</b> ❌ Username atau password salah!<br>";
}
echo "<hr>";


// ===================================================================
// KASUS 2: Penentuan Hak Akses (User Role)
// ===================================================================
echo "<h2>2. Kasus: Penentuan Hak Akses (User Role)</h2>";

// Role pengguna setelah login (disimulasikan)
$role = 'admin'; // Coba ganti menjadi 'member' atau 'tamu'

echo "Mengecek hak akses untuk role: '{$role}'<br>";

if ($role == 'admin') {
    echo "<b>Hasil:</b> Selamat datang, Admin! Anda dapat mengakses semua fitur.<br>";
} elseif ($role == 'member') {
    echo "<b>Hasil:</b> Selamat datang, Member! Anda dapat mengakses fitur terbatas.<br>";
} else {
    echo "<b>Hasil:</b> Maaf, role Anda tidak dikenali.<br>";
}
echo "<hr>";


// ===================================================================
// KASUS 3: Validasi Form Input
// ===================================================================
echo "<h2>3. Kasus: Validasi Form Input (Wajib Isi)</h2>";

// Mensimulasikan data dari input form
$nama_lengkap = "Budi Santoso"; // Coba dikosongkan menjadi ""

echo "Memvalidasi input nama...<br>";

if (empty($nama_lengkap)) {
    echo "<b>Hasil:</b> ⚠️ Peringatan: Nama lengkap wajib diisi!<br>";
} else {
    echo "<b>Hasil:</b> ✔️ Data valid. Halo, {$nama_lengkap}!<br>";
}
echo "<hr>";


// ===================================================================
// KASUS 4: Pemberian Diskon Belanja
// ===================================================================
echo "<h2>4. Kasus: Pemberian Diskon Belanja</h2>";

// Total belanja pelanggan
$total_belanja = 250000; // Coba ganti menjadi 150000

echo "Total Belanja Anda: Rp " . number_format($total_belanja) . "<br>";

$diskon = 0;

// Cek apakah total belanja lebih dari 200.000 untuk dapat diskon 10%
if ($total_belanja > 200000) {
    $diskon = 0.10 * $total_belanja; // Diskon 10%
    echo "Anda mendapatkan diskon sebesar Rp " . number_format($diskon) . "!<br>";
} else {
    echo "Anda tidak mendapatkan diskon karena belanja kurang dari Rp 200.000.<br>";
}

$total_bayar = $total_belanja - $diskon;
echo "<b>Hasil:</b> Total yang harus dibayar adalah <strong>Rp " . number_format($total_bayar) . "</strong><br>";
echo "<hr>";


// ===================================================================
// KASUS 5: Konversi Nilai Angka ke Grade Huruf
// ===================================================================
echo "<h2>5. Kasus: Konversi Nilai Angka ke Grade Huruf</h2>";

// Nilai ujian siswa
$nilai = 85; // Coba ganti nilainya

$grade = '';

if ($nilai >= 90) {
    $grade = 'A';
} elseif ($nilai >= 80) {
    $grade = 'B';
} elseif ($nilai >= 70) {
    $grade = 'C';
} elseif ($nilai >= 60) {
    $grade = 'D';
} else {
    $grade = 'E';
}

echo "Siswa dengan nilai {$nilai} mendapatkan grade: <strong>{$grade}</strong><br>";
echo "<hr>";

?>