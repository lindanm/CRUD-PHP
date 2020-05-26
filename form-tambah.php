<html>
<head>
  <title>SIAM | Sistem Informasi Akademik Mahasiswa</title>
</head>
<body>
  <h1>Tambah Data Mahasiswa</h1>
  <form method="post" action="proses-tambah.php" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>NIM</td>
    <td><input type="text" name="nim"></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><input type="text" name="nama"></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><textarea name="alamat"></textarea></td>
  </tr>
  <tr>
    <td>Username</td>
    <td><input type="text" name="username"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password"></td>
  </tr>
  <tr>
    <td>Foto</td>
    <td><input type="file" name="foto"></td>
  </tr>
  </table>
  
  <hr>
  <input type="submit" value="Simpan">
  <a href="index.html"><input type="button" value="Batal"></a>
  </form>
</body>
</html>