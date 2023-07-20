<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: linear-gradient(120deg, #A3dd20, #FFaa);
        }
        
        .card {
            max-width: 400px;
            padding: 20px;
            margin: 0 auto;
            background-color: #fffa;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(5, 5, 1, 0.3);
        }

        .card .card-title {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .card .form-control {
            margin-bottom: 15px;
        }

        .card .btn-primary {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="login-card">
                    <h4 class="card-title">Login</h4>
                    <?php if (isset($error)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $error; ?>
                        </div>
                    <?php } ?>
                    <form action="login.php" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
