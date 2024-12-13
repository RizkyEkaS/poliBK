<?php
require 'config/koneksi.php';

// Query untuk mengambil total pasien
$queryTotalPasien = "SELECT COUNT(*) as nama FROM pasien";
$resultTotalPasien = $mysqli->query($queryTotalPasien);
$rowTotalPasien = $resultTotalPasien->fetch_assoc();
$totalPasien = $rowTotalPasien['nama'];

// Query untuk mengambil total dokter
$queryTotalDokter = "SELECT COUNT(*) as nama FROM dokter";
$resultTotalDokter = $mysqli->query($queryTotalDokter);
$rowTotalDokter = $resultTotalDokter->fetch_assoc();
$totalDokter = $rowTotalDokter['nama'];

// Query untuk mengambil total poli
$queryTotalPoli = "SELECT COUNT(*) as nama_poli FROM poli";
$resultTotalPoli = $mysqli->query($queryTotalPoli);
$rowTotalPoli = $resultTotalPoli->fetch_assoc();
$totalPoli = $rowTotalPoli['nama_poli'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Poliklinik</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(120deg, #e0f7fa, #b2ebf2);
        }

        .dashboard-container {
            padding: 20px;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            background: white;
            padding: 20px;
            text-align: center;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }

        .card h2 {
            margin: 10px 0;
            font-size: 20px;
            font-weight: bold;
            color: #2E4374;
        }

        .card i {
            font-size: 40px;
            margin-bottom: 10px;
            color: #00796b;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .col-md-3 {
            flex: 1 1 calc(30% - 20px);
            max-width: calc(30% - 20px);
            min-width: 250px;
        }

        @media (max-width: 768px) {
            .col-md-3 {
                flex: 1 1 100%;
                max-width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="dashboard-container">
        <section class="content">
            <div class="container">
                <h1 style="text-align: center; color: #2E4374; margin-bottom: 40px;">Dashboard Poliklinik</h1>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <i class="fas fa-user"></i>
                            <h2>Total Pasien: <span><?php echo $totalPasien; ?></span></h2>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <i class="fas fa-user-nurse"></i>
                            <h2>Total Dokter: <span><?php echo $totalDokter; ?></span></h2>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <i class="fas fa-hospital"></i>
                            <h2>Total Poli: <span><?php echo $totalPoli; ?></span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
