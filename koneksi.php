<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "php";



$koneksi = mysqli_connect($server, $username, $password, $database);
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}
    
?>