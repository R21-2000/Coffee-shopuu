<!DOCTYPE html>
<html>

<head>
    <title>Halaman Admin</title>
    <!-- Tambahkan link stylesheet Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
            background: linear-gradient(45deg, #f8f9fa, #ffffff);
        }

        .card {
            max-width: 500px;
            margin: 0 auto;
        }

        .card-header {
            background-color: #f8f9fa;
            border-bottom: none;
            position: relative;
        }

        .nav-item {
            margin-right: 10px;
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
        }

        .card-text {
            margin-bottom: 20px;
        }

        .logo {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 40px;
        }
    </style>
</head>

<body>
    <div class="card text-center">
        <div class="card-header">
            <img class="logo" src="https://png.pngtree.com/template/20191203/ourmid/pngtree-coffee-logo-design-vector-image_337940.jpg" alt="Logo Kopi">
            <ul class="nav nav-pills card-header-pills justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="admin.php">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="logout.php" tabindex="-1">Logout</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <h5 class="card-title">Selamat Datang di Halaman Admin</h5>
            <p class="card-text">Laman ini adalah Laman admin. Tekan Tambah Pesanan Untuk Memeriksa Berbagai Macam Pesanan</p>
            <a href="pesanan.php" class="btn btn-primary">Tambah Pesanan</a>
            <a href="admin.php" class="btn btn-warning">Tetap di Laman Ini</a>
        </div>
    </div>

    <!-- Tambahkan link script Bootstrap dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
