<?php

include "koneksi.php";
session_start();
if( isset($_GET['nim']) ){

    // ambil id dari query string
    $nim = $_GET['nim'];

    // buat query hapus
    $sql = "DELETE FROM mahasiswa WHERE nim=$nim";
    $query = mysqli_query($connect, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: homepage.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>