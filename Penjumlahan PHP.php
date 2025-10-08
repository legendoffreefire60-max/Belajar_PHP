<?php
// Matriks A
$A = [
    [1, 1, 1],
    [2, 2, 2],
    [3, 3, 3]
];

// Matriks B
$B = [
    [3, 3, 3],
    [2, 2, 2],
    [1, 1, 1]
];

$hasil = [];

for ($i = 0; $i < count($A); $i++) {               
    for ($j = 0; $j < count($A[$i]); $j++) {       
        $hasil[$i][$j] = $A[$i][$j] + $B[$i][$j];  
    }
}

echo "Hasil penjumlahan matriks A + B:<br>";
for ($i = 0; $i < count($hasil); $i++) {
    for ($j = 0; $j < count($hasil[$i]); $j++) {
        echo $hasil[$i][$j] . " ";
    }
    echo "<br>";
}
?>
