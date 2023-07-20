<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pesanan</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .title {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-control {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: #007bff;
        }

        .radio-group {
            margin-bottom: 20px;
        }

        .radio-group label {
            display: inline-block;
            margin-right: 10px;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
            font-weight: bold;
            color: #ffffff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0069d9;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3 class="title">Tambah Pesanan Kopi</h3>
        <form action="koneksi.php" method="POST">
            <div class="form-group">
                <label for="id">ID Pesanan</label>
                <input type="text" class="form-control" name="id" placeholder="ID Pesanan" required>
            </div>
            <div class="form-group">
                <label for="nmPelanggan">Nama Pesanan</label>
                <input type="text" class="form-control" name="nmPelanggan" placeholder="Nama Pesanan" required>
            </div>
            <div class="radio-group">
                <label>Jenis Pembayaran</label>
                <div>
                    <label><input type="radio" name="pembayaran" value="Tunai" required> Tunai</label>
                    <label><input type="radio" name="pembayaran" value="Non Tunai" required> Non Tunai</label>
                </div>
            </div>
            <div class="form-group">
                <label for="catatan">Catatan Pesanan</label>
                <textarea class="form-control" name="catatan" id="catatan" rows="5" placeholder="Catatan"
                    required></textarea>
            </div>
            <button type="submit" name="simpan" class="btn btn-primary">
                Simpan
            </button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
