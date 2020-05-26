<html>
<head>
    <title>All Post</title>
</head>
<body>
<p>
<a href="form-artikel.php">Posting Artikel </a>
<a href="homepage.php">Lihat Data </a>
<a href="logout.php">Log Out </a>
</p>
<br>
<?php
session_start();

//buat dulu koneksi kedatabase
include "koneksi.php";
//buat query terlebih dahulu
$query = "SELECT * FROM tabelartikel";
$sql = mysqli_query($connect, $query);

//cek apakah kita sudah memposting artikel atau belum
if (mysqli_num_rows($sql) == 0) {

//tampilkan pesan kalau artikel belum ada
echo 'maaf, belum ada artikel';
} 
else 
{

//buat pengulangan untuk menampilkan data artikel dengan 
//menggunakan while dan definisikan kedalam variabel data
while ($data = mysqli_fetch_array($sql)) 
{
//kita akan menampilkan judul artikel
echo '<p><strong>'.$data['judul_artikel'].'</strong></p>';
//tampilkan tanggal pembuatan artikel
//gunakan fungsi strtotime untuk merubah bentuk date 
//kedalam bentuk string
echo '<p><em>'.date('j, F Y',strtotime($data['tgl_artikel'])).'</em></p>';
//menampilkan isi artikel yang sudah kita buat
echo '<p>'.substr($data['isi_artikel'],0,300).'</p>';
echo "<a href='artikel.php?id_param=".$data['id_artikel']."'>Read More</a>";
$usr = $_SESSION['name'];
echo " posted by $usr";
}

}
?>
</body>
</html>
