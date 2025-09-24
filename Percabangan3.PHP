<?php
$username = "admin";
$password = "12345";

$inputUser = "admin";
$inputPass = "1234"; // salah
$attempt = 3;

if ($inputUser == $username && $inputPass == $password) {
    echo "Login berhasil!";
} else {
    $attempt--;
    if ($attempt > 0) {
        echo "Login gagal! Sisa percobaan: $attempt";
    } else {
        echo "Akun diblokir!";
    }
}
?>