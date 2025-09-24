<?php
$username = "admin";
$password = "12345";

$inputUser = "";
$inputPass = "";

if (empty($inputUser) || empty($inputPass)) {
    echo "Username atau Password tidak boleh kosong!";
} elseif ($inputUser == $username && $inputPass == $password) {
    echo "Login berhasil!";
} else {
    echo "Login gagal!";
}
?>