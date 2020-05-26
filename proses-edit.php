<?php
  include "koneksi.php";

  $id_param = $_POST['id_param'];  
  $judul_baru = $_POST['judul_baru'];
  $isi_baru = $_POST['isi_baru'];
session_start();
  if(isset($_POST['id_param'])){
    $query = "UPDATE tabelartikel SET judul_artikel='".$judul_baru."', isi_artikel='".$isi_baru."' WHERE id_artikel='".$id_param."'";
    $sql = mysqli_query($connect, $query);
        if($sql){
          header("location: beranda.php");
        } else {
          echo "Terjadi kesalahan saat menyimpan data";
          echo "<br><a href='edit-artikel.php'>Kembali ke form edit artikel</a>";
        }
  }
  else {
      die("akses dilarang");
  }
  
?>
