<?php
require '../../config/fungsi.php';

//mengambil id_member
$id_member = $_GET['id_member'];

if (hapusmember($id_member) > 0) {
  echo "<script>
          alert ('Data berhasil dihapus');
          document.location.href = 'anggota.php';
        </script>";
} else {
  echo "<script>
          alert ('Data gagal dihapus');
        </script>";
}
