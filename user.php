<?php
session_start();

// Memeriksa apakah pengguna sudah login dan memiliki akses sebagai pengguna
if (!isset($_SESSION['username']) || $_SESSION['level'] !== 'User') {
    header('Location: login.php');
    exit;
}

// Tambahkan kode atau logika khusus untuk halaman pengguna di sini

// Tambahkan tombol logout jika diperlukan
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Pengguna</title>
</head>
<body>
    <h2>Selamat datang, Pengguna!</h2>
    <!-- Tambahkan konten halaman pengguna di sini -->
    <a href="logout.php">Logout</a>
</body>
</html>
