<?php
require '../../config/fungsi.php';

//mengambil id_member
$id_transaksi = $_GET['id_transaksi'];

if (hapustransaksi($id_transaksi) > 0) {
  echo "<script>
          alert ('Data berhasil dihapus');
          document.location.href = 'transaksi.php';
        </script>";
} else {
  echo "<script>
          alert ('Data gagal dihapus');
        </script>";
}
