<?php
$matriks = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriks[$i][$j] = rand(1, 9);
    }
}

echo "<h3>Matriks 3x3:</h3>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
$total = 0;

for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 3; $j++) {
        echo "<td align='center'>" . $matriks[$i][$j] . "</td>";
        $total += $matriks[$i][$j];
    }
    echo "</tr>";
}
echo "</table>";

echo "<br><b>Jumlah total semua elemen: " . $total . "</b>";
?>