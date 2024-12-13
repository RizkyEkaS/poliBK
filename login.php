<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Poliklinik - Login Dokter</title>

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,600&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/AdminLTE/dist/css/adminlte.min.css">
    <style>
        body {
            background-image: url('assets/images/medical-bg.jpg');
            background-size: cover;
            background-position: center;
            font-family: 'Poppins', sans-serif;
        }

        .login-box {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        .login-logo a {
            color: #007bff;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }

        .btn-primary {
            background: linear-gradient(to right, #007bff, #4facfe);
            border: none;
        }

        .btn-primary:hover {
            background: linear-gradient(to right, #4facfe, #007bff);
        }

        .login-card-body {
            text-align: center;
        }

        .login-card-body .input-group-text {
            background: #007bff;
            color: #fff;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Poliklinik</b> Login Dokter</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Login untuk melanjutkan</p>

                <form action="pages/login/checkLogin.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" name="username" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                    </div>
                </form>
                <p class="mt-3">
                    <a href="loginPasien.php">Login sebagai pasien</a> | <a href="index.php">Kembali</a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>
