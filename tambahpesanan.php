<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pesanan</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f8f9fa;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3 class="text-center mb-4">Tambah Pesanan Kopi</h3>
        <form action="koneksi.php" method="POST">
            <div class="form-group">
                <label for="id">ID Pesanan</label>
                <input type="text" class="form-control" name="id" placeholder="ID Pesanan" required>
            </div>
            <div class="form-group">
                <label for="nmPesanan">Nama Pesanan</label>
                <input type="text" class="form-control" name="nmPesanan" placeholder="Nama Pesanan" required>
            </div>
            <div class="form-group">
                <label for="mdPembayaran">Jenis Pembayaran</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="mdPembayaran" value="Tunai" required>
                    <label class="form-check-label">Tunai</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="mdPembayaran" value="Non Tunai" required>
                    <label class="form-check-label">Non Tunai</label>
                </div>
            </div>
            <div class="form-group">
                <label for="catatan">Catatan Pesanan</label>
                <textarea class="form-control" name="catatan" id="catatan" rows="5" placeholder="catatan"
                    required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" name="simpan" class="btn btn-primary btn-block">
                    <i class="fas fa-hospital"></i> Simpan
                </button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>