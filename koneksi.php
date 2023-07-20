<?php
// Konfigurasi koneksi database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'coffeeshopu';

// Membuat koneksi ke database
$connection = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi database
if ($connection->connect_error) {
    die("Koneksi database gagal: " . $connection->connect_error);
}

// Memeriksa apakah ada data yang dikirimkan melalui metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil data dari formulir tambah pesanan
    $idPesanan = $_POST['id'];
    $nmPelanggan = $_POST['nmPelanggan'];
    $pembayaran = $_POST['pembayaran'];
    $catatanPesanan = $_POST['catatan'];

    // Menyiapkan pernyataan SQL
    $stmt = $connection->prepare("INSERT INTO pesanan (id, nmPelanggan, pembayaran, catatan) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $idPesanan, $nmPelanggan, $pembayaran, $catatanPesanan);

    // Menjalankan pernyataan SQL
    if ($stmt->execute()) {
        // Pesanan berhasil ditambahkan, alihkan kembali ke halaman sebelumnya
        header("Location: tambahpesanan.php");
        exit;
    } else {
        // Terjadi kesalahan saat menambahkan pesanan
        echo "Terjadi kesalahan saat menambahkan pesanan: " . $stmt->error;
    }

    // Menutup pernyataan dan koneksi
    $stmt->close();
    $connection->close();
}
?>
