<?php
echo "\n## Soal 3: Produk E-commerce\n";
echo "-----------------------------\n";

// Buat array asosiatif multidimensi
$produk = [
    [
        "nama" => "Keyboard Mekanikal",
        "kategori" => "Elektronik",
        "harga" => 850000,
        "rating" => 4.8
    ],
    [
        "nama" => "Mouse Gaming",
        "kategori" => "Elektronik",
        "harga" => 550000,
        "rating" => 4.6
    ],
    [
        "nama" => "Headset Pro",
        "kategori" => "Elektronik",
        "harga" => 1200000,
        "rating" => 4.9
    ]
];

// Cetak produk dengan harga tertinggi
$hargaTertinggi = 0;
$produkTermahal = null; // Variabel untuk menyimpan data produk termahal

foreach ($produk as $item) {
    if ($item["harga"] > $hargaTertinggi) {
        $hargaTertinggi = $item["harga"];
        $produkTermahal = $item;
    }
}

echo "Produk dengan harga tertinggi adalah:\n";
echo "Nama: " . $produkTermahal["nama"] . " | Harga: Rp " . number_format($produkTermahal["harga"]) . "\n";
?>