<?php

include 'koneksi.php';
if(isset($_POST['update'])){
  $id = $_POST['id'];
  $projek_name = $_POST['nama'];
  $date = $_POST['date'];
  $deskripsi = $_POST['deskripsi'];
  $sql = "UPDATE data SET projek_name='$projek_name', tanggal='$date', deskripsi='$deskripsi' WHERE id='$id'";
  $query = mysqli_query($koneksi, $sql);  
  if ($query) {
    echo "<div class = 'alert alert-success' style='text-align:center;'> data berhasil diubahh</div>";
    header ("refresh:1 url=index.php");
  } else {
      echo "<div class ='aletr alert-danger' style='text-align:center;'> data gagal diubah</div>";
      header ("refresh:1 url=index.php");
  }
}
?>
