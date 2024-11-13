<?php

include 'koneksi.php';
if (isset($_POST['submit'])) {
  $projek_name = $_POST['projek_name'];
  $tanggal = $_POST['tanggal'];
  $deskripsi = $_POST['deskripsi'];
  $query = mysqli_query($koneksi,"INSERT INTO data (projek_name,tanggal,deskripsi) VALUES ('$projek_name','$tanggal','$deskripsi')");
  if ($query) {
    echo "<div class = 'alert alert-success' style='text-align:center;'> data berhasil disimpan</div>";
    header ("refresh:1 url=index.php");
  } else {
      echo "<div class ='aletr alert-danger' style='text-align:center;'> data gagal disimpan</div>";
      header ("refresh:1 url=index.php");
  }
}
?>
 