<?php
$username = "admin";
$password = "12345";
$role = "admin"; // bisa admin atau user

$inputUser = "admin";
$inputPass = "12345";
$inputRole = "admin";

if ($inputUser == $username && $inputPass == $password) {
    if ($inputRole == "admin") {
        echo "Login berhasil sebagai Admin!";
    } else {
        echo "Login berhasil sebagai User!";
    }
} else {
    echo "Login gagal!";
}
?>