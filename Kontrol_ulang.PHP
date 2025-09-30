<?php
$nilai = 80;

echo "CONTOH IF ELSE <br>";
if ($nilai >= 0 && $nilai <= 40) {
    echo "Nilai Anda $nilai, mendapat grade E <br>";
} elseif ($nilai >= 41 && $nilai <= 50) {
    echo "Nilai Anda $nilai, mendapat grade D <br>";
} elseif ($nilai >= 51 && $nilai <= 60) {
    echo "Nilai Andas $nilai, mendapat grade C <br>";
} elseif ($nilai >= 61 && $nilai <= 70) {
    echo "Nilai Anda $nilai, mendapat grade B <br>";
} elseif ($nilai >= 71 && $nilai <= 100) {
    echo "Nilai Anda $nilai, mendapat grade A <br>";
} else {
    echo "Nilai tidak valid, harus 0 - 100 <br>";
}

echo "CONTOH SWITCH <br>";
switch (true) {
    case ($nilai >= 0 && $nilai <= 40):
        echo "Grade E <br>";
        break;
    case ($nilai >= 41 && $nilai <= 50):
        echo "Grade D <br>";
        break;
    case ($nilai >= 51 && $nilai <= 60):
        echo "Grade C <br>";
        break;
    case ($nilai >= 61 && $nilai <= 70):
        echo "Grade B <br>";
        break;
    case ($nilai >= 71 && $nilai <= 100):
        echo "Grade A <br>";
        break;
    default:
        echo "Nilai tidak valid <br>";
        break;
}

echo "CONTOH FOR <br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Looping FOR ke : " . $i . "<br>";
}

echo "CONTOH WHILE <br>";
$j = 1;
while ($j <= 5) {
    echo "Looping While ke : " . $j . "<br>";
    $j++;
}
?>
