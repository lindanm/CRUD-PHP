<?php

include "koneksi.php";
session_start();
if( isset($_GET['id_param']) ){

    // ambil id dari query string
    $id_param = abs(intval($_GET['id_param']));

    // buat query hapus
    $query = "DELETE FROM tabelartikel WHERE id_artikel=$id_param";
    $sql = mysqli_query($connect, $query);

    // apakah query hapus berhasil?
    if( $sql){
        header('Location: beranda.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>