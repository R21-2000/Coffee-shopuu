<!DOCTYPE html>
<html>

<head>
    <title>Customer  page</title>
    <!-- Tambahkan link stylesheet Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }

        .card {
            max-width: 500px;
            margin: 0 auto;
        }

        .card-header {
            background-color: #f8f9fa;
            border-bottom: none;
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
    </style>
</head>

<body>
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-pills card-header-pills justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="logout.php" tabindex="-1">Logout</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <h5 class="card-title">Selamat Datang di Halaman Pelanggan</h5>
            <p class="card-text">Laman ini adalah Laman Pelanggan.Pilih untuk melihat opsi pemesanan</p>
            <a href="cetakdata.php" class="btn btn-primary">Cek Pesanan</a>
            <a href="user.php" class="btn btn-warning">Tetap di Laman Ini</a>
        </div>
    </div>

    <!-- Tambahkan link script Bootstrap dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>