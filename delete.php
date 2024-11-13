<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = $koneksi->query("SELECT * FROM data WHERE id='$id'");
$data = $sql->fetch_assoc();
$query = $koneksi->query("DELETE FROM data WHERE id='$id'");

if ($query) {
    echo "<div class = 'alert alert-success' style='text-align:center;'> data berhasil dihapus</div>";
    header ("refresh:1 url=index.php");
} else {
    echo "<div class ='aletr alert-danger' style='text-align:center;'> data gagal dihapus</div>";
    header ("refresh:1 url=index.php");
}