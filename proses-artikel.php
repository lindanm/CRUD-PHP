<?php


//membuat koneksi kedatabase

include "koneksi.php";
session_start();

//membuat variabel dari inputan form

$judul = $_POST['judul_artikel'];
$isi = $_POST['isi_artikel'];
$tgl = date('Y-m-d');


//proses query memasukkan data ke database

$query = "INSERT INTO tabelartikel VALUES ('','$judul','$isi','$tgl')";
$sql = mysqli_query($connect, $query);


//cek apakah querynya berhasil atau tidak

if ($sql) {


//jika berhasil maka tampilkan pesan

echo 'Artikel Sudah dibuat dengan judul '.$judul ;
}
else
{

//tampilkan pesan error jika query tidak berhasil

echo 'gagal membuat artikel dengan judul '.$judul ;


//tutup koneksi ke database

mysql_close();
}
?>

<a href="beranda.php"><br><br>Lihat Hasil Posting </a>
