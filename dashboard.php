<?php
require 'config/fungsi.php';
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style/fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="style/admin.css">

  <title>Dashboard | Buky</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
    <a class="navbar-brand" href="#"><b>BUKY</b></a>
  </nav>

  <div class="row no-gutters mt-5">
    <div class="col-md-2 bg-dark mt-2 pr-3 pt-4" style="height: 569px;">
      <ul class="nav flex-column ml-3 mb-5">
        <li class="nav-item">
          <a class="nav-link active text-white" href="dashboard.php?halaman=1"><i class="fas fa-home mr-2"></i>Dashboard
          </a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="pages/anggota/anggota.php"><i class="fas fa-users mr-2"></i>Daftar Anggota
          </a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="pages/buku/buku.php"><i class="fas fa-book mr-2"></i>Daftar Buku
          </a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="pages/transaksi/transaksi.php"><i class="fas fa-calendar-week mr-2"></i>Daftar Transaksi
          </a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" >
          </a>
          <hr class="bg-secondary">
        </li>
      </ul>
    </div>

    <!--pembuka col-md-10-->
    <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-home mr-2"></i>DASHBOARD</h3>
      <hr>
      <!--pembuka class row-->
      <div class="row text-white mt-4">
        <!--pembuka class card-->
        <div class="card bg-info ml-5 text-white" style="width: 18rem;">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-users mr-2"></i>
            </div>
            <h5 class="card-title">Jumlah Anggota</h5>
            <div class="display-4">
              <?php
              $conn = koneksi();
              $a = mysqli_query($conn, "SELECT COUNT(*) AS total FROM member");
              $data = mysqli_fetch_assoc($a);
              echo $data['total'];
              ?>
            </div>
            <a href="pages/anggota/anggota.php">
              <p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p>
            </a>
          </div>
        </div>
        <!--pembuka class card-->
        <div class="card bg-warning ml-5 text-white" style="width: 18rem;">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-book mr-2"></i>
            </div>
            <h5 class="card-title">Jumlah Buku</h5>
            <div class="display-4">
              <?php
              $conn = koneksi();
              $a = mysqli_query($conn, "SELECT COUNT(*) AS total FROM buku");
              $data = mysqli_fetch_assoc($a);
              echo $data['total'];
              ?>
            </div>
            <a href="pages/buku/buku.php">
              <p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p>
            </a>
          </div>
        </div>
        <!--pembuka class card-->
        <div class="card bg-danger ml-5 text-white" style="width: 18rem;">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-calendar-week mr-2"></i>
            </div>
            <h5 class="card-title">Jumlah Transaksi</h5>
            <div class="display-4">
              <?php
              $conn = koneksi();
              $a = mysqli_query($conn, "SELECT COUNT(*) AS total FROM transaksi");
              $data = mysqli_fetch_assoc($a);
              echo $data['total'];
              ?>
            </div>
            <a href="pages/transaksi/transaksi.php">
              <p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p>
            </a>
          </div>
        </div>
      </div>
      <!--penutup class row-->
      <!-- pembuka class row-->
      <div class="row mt-4"></div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script type="text/javascript" src="style/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="style/admin.js"></script>
</body>

</html>