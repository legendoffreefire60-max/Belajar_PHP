<?php
$username = "admin";
$password = "12345";

$inputUser = "user";
$inputPass = "12345";

if ($inputUser != $username) {
    echo "Username salah!";
} elseif ($inputPass != $password) {
    echo "Password salah!";
} else {
    echo "Login berhasil!";
}
?>