<html>
<head>
  <title>SIAM | Sistem Informasi Akademik Mahasiswa</title>
</head>
<body>
  <h1>Ubah Data Mahasiswa</h1>
  
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  // Ambil data NIM yang dikirim oleh index.php melalui URL
  $nim = $_GET['nim'];
  
  // Query untuk menampilkan data siswa berdasarkan NIM yang dikirim
  $query = "SELECT * FROM mahasiswa WHERE nim='".$nim."'";
  $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  ?>
  
  <form method="post" action="proses-update.php?nim=<?php echo $nim; ?>" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>Nama</td>
    <td><input type="text" name="nama" value="<?php echo $data['NAMA']; ?>"></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><textarea name="alamat"><?php echo $data['ALAMAT']; ?></textarea></td>
  </tr>
  <tr>
    <td>Username</td>
    <td><input type="text" name="username" value="<?php echo $data['USERNAME']; ?>"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="text" name="password" value="<?php echo $data['PASSWORD']; ?>"></td>
  </tr>
  <tr>
    <td>Foto</td>
    <td>
      <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
      <input type="file" name="foto">
    </td>
  </tr>
  </table>
  
  <hr>
  <input type="submit" value="Ubah">
  <a href="homepage.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>