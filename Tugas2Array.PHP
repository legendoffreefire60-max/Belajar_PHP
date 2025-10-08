<?php
$buah = [
    ["Apel", 15000, 10],
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

echo "Nama buah pertama adalah: " . $buah[0][0] . "<br><br>";

$total = 0;
foreach ($buah as $item) {
    $subtotal = $item[1] * $item[2]; // harga * stok
    $total += $subtotal;
    echo "Buah: " . $item[0] . " | Harga: " . $item[1] . " | Stok: " . $item[2] . " | Total: " . $subtotal . "<br>";
}

echo "<br>Total keseluruhan nilai stok buah adalah: Rp " . number_format($total, 0, ',', '.');
?>