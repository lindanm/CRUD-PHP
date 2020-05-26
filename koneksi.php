<?php
$server = "localhost";
$user = "root";
$password = "linda17";
$nama_database = "pemweb";

$connect = mysqli_connect($server, $user, $password, $nama_database);

$mysqli = new mysqli($server, $user, $password, $nama_database) or
die('MySQL Connection error!');

if( !$connect ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>