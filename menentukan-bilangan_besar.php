<?php



function cariBilanganTerbesar($a, $b) {
    return max($a, $b);
}


$bilangan_pertama = 100;
$bilangan_kedua   = 150;
$terbesar_hasil   = cariBilanganTerbesar($bilangan_pertama, $bilangan_kedua);

echo "===============================================\n";
echo "1. HASIL FUNGSI BILANGAN TERBESAR\n";
echo "===============================================\n";
echo "Input Bilangan: $bilangan_pertama dan $bilangan_kedua\n";
echo "Bilangan Terbesar: **$terbesar_hasil**\n\n";


$data_getdate = getdate();


$tgl = str_pad($data_getdate['mday'], 2, '0', STR_PAD_LEFT);
$bln = str_pad($data_getdate['mon'], 2, '0', STR_PAD_LEFT);
$thn = $data_getdate['year'];

echo "===============================================\n";
echo "2. TAMPILAN TANGGAL DENGAN getdate()\n";
echo "===============================================\n";
echo "Tanggal Saat Ini (DD-MM-YYYY): **$tgl-$bln-$thn**\n";
echo "(Contoh: 28-11-2012)\n\n";



$tanggal_date_format = date('d-F-Y');

echo "===============================================\n";
echo "('Senin-Mei-2025')\n";
echo "===============================================\n";
echo " (Senin-Mei-2025): **$tanggal_date_format**\n";
echo "(01-October-2025)\n";


?>