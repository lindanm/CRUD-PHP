<?php
  include "koneksi.php";
  session_start();
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $password_hash = password_hash($password, PASSWORD_BCRYPT);
  $foto = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];

  $fotobaru = date('dmYHis').$foto;

  $lokasifoto = "D:/xampp/htdocs/pemweb/tugas/images/".$fotobaru;

  if(move_uploaded_file($tmp, $lokasifoto)){
    $query = "INSERT INTO mahasiswa VALUES('".$nim."', '".$nama."', '".$alamat."', '".$fotobaru."', '".$username."', '".$password_hash."')";
    $sql = mysqli_query($connect, $query);
    if($sql){
      header("location: homepage.php");
    } else {
      echo "Terjadi kesalahan saat menyimpan data";
      echo "<br><a href='form-tambah.php'>Kembali ke form tambah data</a>";
    }
  } else {
    echo "Foto gagal diupload";
    echo "<br><a href='form-tambah.php'>Kembali ke form tambah data</a>";
  }
?>
