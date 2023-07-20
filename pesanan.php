<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rakhafian.A.F| XII RPL 1</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .navbar-brand {
            font-weight: bold;
        }

        .container {
            max-width: 800px;
        }

        .title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .btn-wrapper {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
        }

        .btn-wrapper a {
            margin-left: 10px;
        }

        .table th {
            font-weight: bold;
        }

        .modal-title {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Kopi Kita</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="admin.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Pesanan Kopi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2 class="title">Tabel Pesanan</h2>
        <div class="btn-wrapper">
            <a href="tambahpesanan.php" class="btn btn-primary">Tambah Pesanan</a>
            <a href="#" class="btn btn-success" onclick="printData()">Cetak</a>
        </div>

        <?php
        include 'koneksi.php';
        $koneksi = new mysqli($host, $username, $password, $database);
        
        if ($koneksi->connect_error) {
            die("Koneksi database gagal: " . $koneksi->connect_error);
        }
        
        $no = 1;
        $hasil = $koneksi->query("SELECT * FROM pesanan");
        ?>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Pesanan</th>
                    <th>Pesanan</th>
                    <th>Metode Pembayaran</th>
                    <th>Catatan Pesanan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $hasil->fetch_assoc()) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['nmPelanggan']; ?></td>
                        <td><?= $row['pembayaran']; ?></td>
                        <td><?= $row['catatan']; ?></td>
                        <td>
                            <a href="editpesanan.php?edit=<?= $row['id']; ?>" class="btn btn-warning">Edit</a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#hapusModal<?= $row['id']; ?>">
                                Hapus
                            </button>
                        </td>
                    </tr>

                    <!-- Modal Hapus -->
                    <div class="modal fade" id="hapusModal<?= $row['id']; ?>" tabindex="-1"
                        aria-labelledby="hapusModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="hapusModalLabel">Konfirmasi Hapus</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah Anda yakin ingin menghapus data ini?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                    <a href="koneksi.php?id=<?= $row['id']; ?>"
                                        class="btn btn-danger">Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script>
        function printData() {
            window.print();
        }
    </script>
</body>

</html>
