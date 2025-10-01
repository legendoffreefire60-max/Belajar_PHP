<?php
date_default_timezone_set('Asia/Jakarta');
function bilanganTerbesar($angka1, $angka2)
{
    return ($angka1 > $angka2) ? $angka1 : $angka2;
}

$bil1 = 100;
$bil2 = 150;
$terbesar = bilanganTerbesar($bil1, $bil2);
echo "1. Bilangan terbesar antara $bil1 dan $bil2 adalah: <strong>$terbesar</strong><br>";

echo "<hr>"; // Garis pemisah

//Menampilkan tanggal dengan fungsi getdate() (Format: Rabu-09-2025)
// Ini adalah bagian yang paling penting sesuai permintaan Anda
$infoTanggal = getdate();
$tanggal = str_pad($infoTanggal['mday'], 2, "0", STR_PAD_LEFT); // Menambah angka 0 di depan jika tanggal < 10
$bulan = str_pad($infoTanggal['mon'], 2, "0", STR_PAD_LEFT);   // Menambah angka 0 di depan jika bulan < 10
$tahun = $infoTanggal['year'];

echo "2. Tampilan tanggal dari getdate(): <strong>$tanggal-$bulan-$tahun</strong><br>";

echo "<hr>"; // Garis pemisah

echo "3. Tampilan tanggal dari date('d-F-Y'): <strong>" . date('d-F-Y') . "</strong><br>";

?>