<html>
<head>
<title>Login</title>
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
  		height: 420px;
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
<body>
<div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="proses-artikel.php" method="post">
                            <h3 class="text-center text-info">Posting Article</h3>
                            <div class="form-group">
                                <label for="judul_artikel" class="text-info">Judul Artikel:</label><br>
                                <input type="text" name="judul_artikel" id="judul_artikel" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="isi_artikel" class="text-info">Isi Artikel:</label><br>
                                <input type="textarea" name="isi_artikel" id="isi_artikel" class="form-control" required>
                            </div>
                            <div class="form-group">                                
								<button type="submit" id="sendart" class="btn btn-primary">Post Article</button>
							</div>							
						</form>
						<form id="cancel-form" class="form" action="beranda.php" method="post">                            
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
</html>
<!-- <form method="post" name="posting_form" action="proses-artikel.php">
Judul Artikel<br>
<input type="text" name="judul_artikel" size="30"><br>
Isi Artikel<br>
<textarea name="isi_artikel" cols="60" rows="10"></textarea><br>
<input type="submit" name="submit" value="submit artikel">
</form> -->