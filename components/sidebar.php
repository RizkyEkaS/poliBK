<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <center>
            <span class="brand-text font-weight-bold text-uppercase">Poliklinik</span>
        </center>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <?php
        require 'config/koneksi.php';
        if ($_SESSION['akses'] == 'admin') {
            $tampilData = array(
                'nama' => 'Admin'
            );
        } else if ($_SESSION['akses'] == 'dokter') {
            $getData = mysqli_query($mysqli, "SELECT * FROM dokter WHERE id = '$id_dokter'");
            $tampilData = mysqli_fetch_assoc($getData);
        } else if ($_SESSION['akses'] == 'pasien') {
            $getData = mysqli_query($mysqli, "SELECT * FROM pasien WHERE id = '$idPasien'");
            $tampilData = mysqli_fetch_assoc($getData);
        }
        $userName = htmlspecialchars($tampilData['nama'], ENT_QUOTES, 'UTF-8');
        ?>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <?php
                if ($_SESSION['akses'] == "admin") {
                    echo <<<HTML
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
                        <div class="image">
                            <img src="assets/AdminLTE/dist/img/user8-128x128.jpg" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block text-white">{$userName}</a>
                        </div>
                    </div>
                    <li class="nav-item">
                        <a href="tampilDashboard.php" class="nav-link">
                            <i class="nav-icon fas fa-th text-primary"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="tampilDokter.php" class="nav-link">
                            <i class="fas fa-user-nurse nav-icon text-info"></i>
                            <p>Dokter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="tampilPoli.php" class="nav-link">
                            <i class="fas fa-hospital nav-icon text-success"></i>
                            <p>Poli</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="tampilObat.php" class="nav-link">
                            <i class="fas fa-pills nav-icon text-warning"></i>
                            <p>Obat</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="tampilPasien.php" class="nav-link">
                            <i class="fas fa-user nav-icon text-danger"></i>
                            <p>Pasien</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">
                            <i class="nav-icon fas fa-power-off text-danger"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                    HTML;
                } else if ($_SESSION['akses'] == "dokter") {
                    echo <<<HTML
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
                        <div class="image">
                            <img src="assets/AdminLTE/dist/img/user7-128x128.jpg" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block text-white">{$userName}</a>
                            <span class="badge badge-warning ml-2">Dokter</span>
                        </div>
                    </div>
                    <li class="nav-item">
                        <a href="tampilDashboard.php" class="nav-link">
                            <i class="nav-icon fas fa-th text-primary"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="tampilJadwal.php" class="nav-link">
                            <i class="fas fa-notes-medical nav-icon text-info"></i>
                            <p>Jadwal Periksa</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="tampilPeriksa.php" class="nav-link">
                            <i class="fas fa-stethoscope nav-icon text-success"></i>
                            <p>Periksa Pasien</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="tampilRiwayat.php" class="nav-link">
                            <i class="fas fa-receipt nav-icon text-warning"></i>
                            <p>Riwayat Pasien</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="tampilProfil.php" class="nav-link">
                            <i class="fas fa-user nav-icon text-danger"></i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">
                            <i class="nav-icon fas fa-power-off text-danger"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                    HTML;
                } else if ($_SESSION['akses'] == "pasien") {
                    echo <<<HTML
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
                        <div class="image">
                            <img src="assets/AdminLTE/dist/img/user7-128x128.jpg" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block text-white">{$userName}</a>
                            <span class="badge badge-success ml-2">Pasien</span>
                        </div>
                    </div>
                    <li class="nav-item">
                        <a href="tampilDashboard.php" class="nav-link active">
                            <i class="nav-icon fas fa-th text-primary"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="tampilDaftarPoli.php" class="nav-link">
                            <i class="fas fa-hospital nav-icon text-info"></i>
                            <p>Poli</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">
                            <i class="nav-icon fas fa-power-off text-danger"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                    HTML;
                }
                ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Sidebar Toggle Button -->
<nav class="main-header navbar navbar-expand navbar-dark bg-primary">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>
    </ul>
</nav>
