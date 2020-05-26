<html>
<head>
  <title>All Post</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->
	
	<style type="text/css">
	body {
  		margin: 0;
  		padding: 0;
  		background-color: #E6E6FA;
  		height: 100vh;
	}
	#login .container #login-row #login-column #login-box {
  		margin-top: 120px;
  		max-width: 600px;
  		height: 500px;
  		border: 3px solid #FAF0E6;
  		background-color: #FFE4E1;
	}
	#login .container #login-row #login-column #login-box #login-form {
  		padding: 30px;
	}
	#login .container #login-row #login-column #login-box #cancel-form {
  		margin-top: -65px;
		padding: 30px;
	}
	#login .container #login-row #login-column #login-box #login-form #register-link {
  		margin-top: -85px;
	}
    </style>
</head>
</head>
<body>
<?php
  // Load file koneksi.php
  include "koneksi.php";
  session_start();
  // Ambil data NIS yang dikirim oleh index.php melalui URL
  $id_param = abs(intval($_GET['id_param']));
  
  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
  $query = "SELECT * FROM tabelartikel WHERE id_artikel='".$id_param."'";
  $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  ?>
  <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="proses-edit.php" method="post">
                            <h3 class="text-center text-info">Edit Data Postingan</h3>
                            <div class="form-group">
                                <label for="id_param" class="text-info">ID:</label><br>
                                <input type="text" name="id_param" id="id_param" class="form-control" value="<?php echo $id_param; ?>">
                            </div>
                            <div class="form-group">
                                <label for="judul_baru" class="text-info">Judul Artikel:</label><br>
                                <input type="text" name="judul_baru" id="judul_baru" class="form-control" value="<?php echo $data['judul_artikel']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="isi_baru" class="text-info">Isi Artikel:</label><br>
                                <input type="textarea" name="isi_baru" id="isi_baru" class="form-control" value="<?php echo $data['isi_artikel']; ?>">
                            </div>
                            <div class="form-group">                                
								                <button type="submit" id="sendart" class="btn btn-primary">Post Article</button>
							              </div>							
						                </form>
						                <form id="cancel-form" class="form" action="artikel.php" method="post">                            
                            <div class="form-group">                                
								                <button type="submit" id="sendcancel" class="btn btn-primary">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

  <!-- <form method="post" action="proses-edit.php?id_artikel=<?php echo $id_param; ?>" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>ID</td>
    <td><input type="text" name="id_param" value="<?php echo $id_param; ?>"></td>
  </tr>
  <tr>
    <td>Judul Artikel</td>
    <td><input type="text" name="judul_baru" value="<?php echo $data['judul_artikel']; ?>"></td>
  </tr>
  <tr>
    <td>Isi Artikel</td>
    <td><input type="textarea" name="isi_baru" value="<?php echo $data['isi_artikel']; ?>"></td>
  </tr>
  <br>
  <input type="submit" value="Edit Post">
  <a href="beranda.php"><input type="button" value="Batal"></a>
  </form> -->
</body>
</html>