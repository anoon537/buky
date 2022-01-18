<?php
require '../../config/fungsi.php';

$conn = mysqli_connect('localhost', 'root', '', 'perpus');
$query = "SELECT * FROM transaksi";
$result = mysqli_query($conn, $query);

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

$transaksi = $rows;
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="../../style/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../style/fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="../../style/admin.css">

  <title>Daftar Buku | Buky</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
    <a class="navbar-brand" href="#"><b>BUKY</b></a>
  </nav>

  <div class="row no-gutters mt-5">
    <div class="col-md-2 bg-dark mt-2 pr-3 pt-4" style="height: 569px;">
      <ul class="nav flex-column ml-3 mb-5">
        <li class="nav-item">
          <a class="nav-link active text-white" href="../../dashboard.php?halaman=1"><i class="fas fa-home mr-2"></i>Dashboard
          </a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="../anggota/anggota.php"><i class="fas fa-users mr-2"></i>Daftar Anggota
          </a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="../buku/buku.php"><i class="fas fa-book mr-2"></i>Daftar Buku
          </a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="transaksi.php"><i class="fas fa-calendar-week mr-2"></i>Daftar Transaksi
          </a>
          <hr class="bg-secondary">
        </li>
      </ul>
    </div>

    <!--pembuka col-md-10-->
    <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-users mr-2"></i>DAFTAR TRANSAKSI</h3>
      <hr>
      <table width="100%">
        <tr>
          <td width="73%"><a href="tambah.php" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>Tambah Data Transaksi</a></td>
        </tr>
      </table>


      <table class="table table-striped table-bordered">
        <thead>
          <tr class="text-center">
            <th scope="col" style="width: 80px">ID Transaksi</th>
            <th scope="col" style="width: 100px">ID Buku</th>
            <th scope="col" style="width: 100px">ID Anggota</th>
            <th scope="col" style="width: 100px">Tanggal Pinjam</th>
            <th scope="col" style="width: 100px">Tanggal Kembali</th>
            <th scope="col" style="width: 100px">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php if (empty($transaksi)) : ?>
            <tr>
              <td colspan="5">
                <p align="center" style="color: darkred;"><b>Data transaksi tidak ditemukan!</b></p>
              </td>
            </tr>
          <?php endif; ?>

          <?php
          foreach ($transaksi as $t) : ?>
            <tr>
              <td><?= $t['id_transaksi']; ?></td>
              <td><?= $t['id_buku']; ?></td>
              <td><?= $t['id_member']; ?></td>
              <td><?= $t['tgl_pinjam']; ?></td>
              <td><?= $t['tgl_kembali']; ?></td>
              <td class="text-center"><a href="detail.php?id_transaksi=<?= $t['id_transaksi']; ?>" class="btn btn-secondary">Lihat Detail</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <!--penutup col-md-10-->
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script type="text/javascript" src="../../style/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../../style/admin.js"></script>
</body>

</html>