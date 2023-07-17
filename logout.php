<?php
// Mulai sesi
session_start();

// Menghapus semua data sesi
session_unset();

// Menghancurkan sesi
session_destroy();

// Redirect ke halaman login
header("Location: login.php");
?>
