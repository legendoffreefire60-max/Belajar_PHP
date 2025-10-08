<?php
$produk = [
    [
        "nama" => "Smartphone X200",
        "kategori" => "Elektronik",
        "harga" => 3500000,
        "rating" => 4.5
    ],
    [
        "nama" => "Headphone Bass Boost",
        "kategori" => "Aksesori",
        "harga" => 750000,
        "rating" => 4.7
    ],
    [
        "nama" => "Laptop Pro 14",
        "kategori" => "Komputer",
        "harga" => 8500000,
        "rating" => 4.8
    ]
];

$tertinggi = $produk[0];
foreach ($produk as $item) {
    if ($item["harga"] > $tertinggi["harga"]) {
        $tertinggi = $item;
    }
}

echo "<h3>Produk dengan Harga Tertinggi:</h3>";
echo "Nama Produk: " . $tertinggi["nama"] . "<br>";
echo "Kategori: " . $tertinggi["kategori"] . "<br>";
echo "Harga: Rp " . number_format($tertinggi["harga"], 0, ',', '.') . "<br>";
echo "Rating: " . $tertinggi["rating"] . "<br>";
?>