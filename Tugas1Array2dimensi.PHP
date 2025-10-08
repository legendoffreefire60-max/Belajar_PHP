<?php
$siswa = array(
    array("Nama" => "Andi", "Matematika" => 85, "Bahasa" => 90),
    array("Nama" => "Budi", "Matematika" => 78, "Bahasa" => 88),
    array("Nama" => "Citra", "Matematika" => 92, "Bahasa" => 95)
);

echo "Nilai Bahasa siswa ke-2 (" . $siswa[1]["Nama"] . ") adalah: " . $siswa[1]["Bahasa"] . "<br><br>";

echo "Daftar Nilai Siswa:<br>";
foreach ($siswa as $data) {
    echo "Nama: " . $data["Nama"] . "<br>";
    echo "Nilai Matematika: " . $data["Matematika"] . "<br>";
    echo "Nilai Bahasa: " . $data["Bahasa"] . "<br><br>";
}
?>
