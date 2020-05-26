<?php
  include "koneksi.php";

  session_start();
  $nim = $_GET['nim'];

  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $password_hash = password_hash($password, PASSWORD_BCRYPT);

  if(isset($_POST['ubah_foto'])){
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $fotobaru = date('dmYHis').$foto;
    $lokasifoto = "D:/xampp/htdocs/pemweb/tugas/images/".$fotobaru;
    if(move_uploaded_file($tmp, $lokasifoto)){
      $query = "SELECT * FROM mahasiswa WHERE NIM='".$nim."'";
      $sql = mysqli_query($connect, $query);
      $data = mysqli_fetch_array($sql);
      if(is_file("images/".$data['UPLOAD_FOTO']))
      unlink("images/".$data['UPLOAD_FOTO']);
      $query = "UPDATE mahasiswa SET NAMA='".$nama."', ALAMAT='".$alamat."', USERNAME='".$username."', PASSWORD='".$password_hash."', UPLOAD_FOTO='".$fotobaru."' WHERE NIM='".$nim."'";
      $sql = mysqli_query($connect, $query);
      if($sql){
        header("location: homepage.php");
      } else {
        echo "Terjadi kesalahan saat menyimpan data";
        echo "<br><a href='form-update.php'>Kembali ke form ubah data</a>";
      }
    } else {
      echo "Foto gagal diupload";
      echo "<br><a href='form-update.php'>Kembali ke form ubah data</a>";
    }
  } else {
      $query = "UPDATE mahasiswa SET Nama='".$nama."', Alamat='".$alamat."', Username='".$username."', Password='".$password."' WHERE NIM='".$nim."'";
      $sql = mysqli_query($connect, $query);
      if($sql){
        header("location: homepage.php");
      } else {
        echo "Terjadi kesalahan saat menyimpan data";
        echo "<br><a href='form-update.php'>Kembali ke form ubah data</a>";
      }
  }
?>
