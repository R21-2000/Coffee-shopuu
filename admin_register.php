<?php
// Konfigurasi koneksi database
$host = 'localhost';
$usernamedb = 'root';
$passwordb = '';
$database = 'coffeeshopu';

// Membuat koneksi ke database
$connection = new mysqli($host, $usernamedb, $passwordb, $database);

// Memeriksa koneksi database
if ($connection->connect_error) {
    die("Koneksi database gagal: " . $connection->connect_error);
}

// Memeriksa apakah ada data yang dikirimkan melalui metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil data dari formulir pendaftaran
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Memeriksa apakah password cocok dengan konfirmasi password
    if ($password !== $confirmPassword) {
        $error = "Konfirmasi password tidak cocok.";
    } else {
        // Melakukan query untuk memeriksa apakah username sudah digunakan
        $query = "SELECT * FROM users WHERE username = '$username'";
        $result = $connection->query($query);

        // Memeriksa apakah username sudah digunakan
        if ($result && $result->num_rows > 0) {
            $error = "Username sudah digunakan. Silakan pilih username lain.";
        } else {
            // Melakukan query untuk menyimpan data admin baru ke database
            $query = "INSERT INTO users (username, password, level) VALUES ('$username', '$password', 'Admin')";
            $insertResult = $connection->query($query);

            if ($insertResult) {
                // Pendaftaran admin berhasil, alihkan ke halaman admin.php
                header("Location: admin.php");
                exit;
            } else {
                // Terjadi kesalahan saat menyimpan data admin baru
                $error = "Terjadi kesalahan dalam pendaftaran. Silakan coba lagi.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Register Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: linear-gradient(220deg, #Af337296, #AAb3);
        }
        
        .register-card {
            max-width: 400px;
            padding: 20px;
            margin: 0 auto;
            background-color: #AAf;
            border-radius: 20px;
            box-shadow: 0 2px 5px rgba(5, 5, 5, 0.3);
        }

        .register-card .card-title {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .register-card .form-control {
            margin-bottom: 15px;
        }

        .register-card .btn-primary {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="register-card">
                    <h4 class="card-title">Register Admin</h4>
                    <?php if (isset($error)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $error; ?>
                        </div>
                    <?php } ?>
                    <form action="admin_register.php" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
// Menutup koneksi database
$connection->close();
?>
