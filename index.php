<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>POLIKLINIK</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/AdminLTE/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="hold-transition login-page">
    <div class="container-fluid d-flex flex-column justify-content-center align-items-center text-white p-5" style="height: 400px; background:rgb(14, 125, 139)">
        <h1 class="font-weight-bold mb-3">Sistem Poliklinik</h1>
        <h5>"Memberikan Pelayanan Terbaik Jadwal Janji Temu Antara Pasien dan Dokter"</h5>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-lg-center">
            <!-- Menu Login Pasien -->
            <div class="col-md-5">
                <div class="card mb-3" style="border: 2px solid rgb(16, 135, 151)">
                    <div class="card-body text-center">
                        <p class="card-text">Login sebagai <b>Pasien</b></p>
                        <a href="loginPasien.php" class="btn btn-block" style="background-color:rgb(8, 156, 156); color: white;">Login Pasien</a>
                    </div>
                </div>
            </div>
            <!-- Menu Login Dokter -->
            <div class="col-md-5">
                <div class="card mb-3" style="border: 2px solid rgb(16, 135, 151)">
                    <div class="card-body text-center">
                        <p class="card-text">Login sebagai <b>Dokter</b></p>
                        <a href="login.php" class="btn btn-block" style="background-color:rgb(8, 156, 156); color: white;">Login Dokter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php require 'components/footer.php'; ?>

    <!-- Scripts -->
    <script src="assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
    <script src="assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/AdminLTE/dist/js/adminlte.min.js"></script>
</body>

</html>