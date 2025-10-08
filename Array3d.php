<?php

// Mengatur header agar output dibaca sebagai teks biasa, berguna jika dijalankan via web server
header('Content-Type: text/plain');

// =======================================================
// 1. PEMBUATAN (CREATE): Mendefinisikan Array 3 Dimensi
// =======================================================
// Struktur: [Nama Fakultas] -> [Nama Prodi] -> [Detail Prodi]
$dataAkademik = [
    'Fakultas Teknik' => [
        'Informatika' => ['Jenjang' => 'S1', 'Akreditasi' => 'A', 'Jumlah Mahasiswa' => 1200],
        'Teknik Sipil' => ['Jenjang' => 'S1', 'Akreditasi' => 'A', 'Jumlah Mahasiswa' => 950]
    ],
    'Fakultas Ekonomi' => [
        'Akuntansi' => ['Jenjang' => 'S1', 'Akreditasi' => 'Unggul', 'Jumlah Mahasiswa' => 1100],
        'Manajemen' => ['Jenjang' => 'S1', 'Akreditasi' => 'B', 'Jumlah Mahasiswa' => 1350]
    ]
];

echo "========================================\n";
echo "OPERASI PADA ARRAY 3 DIMENSI\n";
echo "========================================\n\n";

// =======================================================
// 2. PEMBACAAN (READ): Mengakses data
// =======================================================
echo "A. Mengakses Data (Read)\n";
$akreditasiInformatika = $dataAkademik['Fakultas Teknik']['Informatika']['Akreditasi'];
echo "   - Akreditasi Prodi Informatika adalah: $akreditasiInformatika\n\n";

// =======================================================
// 3. PEMBARUAN (UPDATE): Mengubah data
// =======================================================
echo "B. Memperbarui Data (Update)\n";
echo "   - Jumlah mahasiswa Manajemen sebelum diupdate: " . $dataAkademik['Fakultas Ekonomi']['Manajemen']['Jumlah Mahasiswa'] . "\n";
// Update jumlah mahasiswa Manajemen
$dataAkademik['Fakultas Ekonomi']['Manajemen']['Jumlah Mahasiswa'] = 1400;
echo "   - Jumlah mahasiswa Manajemen setelah diupdate: " . $dataAkademik['Fakultas Ekonomi']['Manajemen']['Jumlah Mahasiswa'] . "\n\n";

// =======================================================
// 4. PENAMBAHAN DATA BARU (CREATE - Lanjutan)
// =======================================================
echo "C. Menambah Data Baru\n";
$dataAkademik['Fakultas Teknik']['Arsitektur'] = ['Jenjang' => 'S1', 'Akreditasi' => 'B', 'Jumlah Mahasiswa' => 700];
echo "   - Prodi baru 'Arsitektur' telah ditambahkan ke Fakultas Teknik.\n\n";

// =======================================================
// 5. MENGHAPUS DATA (DELETE)
// =======================================================
echo "D. Menghapus Data\n";
unset($dataAkademik['Fakultas Teknik']['Teknik Sipil']);
echo "   - Prodi 'Teknik Sipil' telah dihapus.\n\n";

// =======================================================
// 6. VISUALISASI: Menampilkan semua data akhir dalam format teks
// =======================================================
echo "========================================\n";
echo "DATA FINAL AKADEMIK SETELAH DIMODIFIKASI\n";
echo "========================================\n\n";

// Loop pertama: Mengambil setiap Fakultas
foreach ($dataAkademik as $namaFakultas => $daftarProdi) {
    echo "Fakultas: $namaFakultas\n";
    echo "+----------------------+----------+-------------+--------------------+\n";
    // Menggunakan printf untuk format tabel teks
    // %-20s artinya: string, rata kiri (-), dengan lebar 20 karakter
    printf("| %-20s | %-8s | %-11s | %-18s |\n", "Program Studi", "Jenjang", "Akreditasi", "Jumlah Mahasiswa");
    echo "+----------------------+----------+-------------+--------------------+\n";
    
    // Loop kedua: Mengambil setiap Prodi
    foreach ($daftarProdi as $namaProdi => $detailProdi) {
        printf(
            "| %-20s | %-8s | %-11s | %-18s |\n",
            $namaProdi,
            $detailProdi['Jenjang'],
            $detailProdi['Akreditasi'],
            number_format($detailProdi['Jumlah Mahasiswa'])
        );
    }
    echo "+----------------------+----------+-------------+--------------------+\n\n";
}

?>