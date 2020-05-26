<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>SIAMQ | Sistem Informasi Akademik Mahasiswa</title>
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
  		max-width: 640px;
  		height: 450px;
  		border: 3px solid #FAF0E6;
  		background-color: #FFE4E1;
	}
	#login .container #login-row #login-column #login-box #login-form {
        margin-top: 60px;
  		padding: 30px;
	}
    #login .container #login-row #login-column #login-box #regist-form {
  		margin-top: -65px;
		padding: 30px;
	}
</style>
</head>

<body align="center">
<div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div align="center" id="login-box" class="col-md-12">
                        <br><br>                        
                    <h3 class="text-center text-info">Sistem Informasi Akademik Mahasiswa</h3>
                    <h1 class="text-center text-info">Universitas Komputer</h1>
                        <form id="login-form" class="form" action="form-login.php" method="post">                            
                            <div class="form-group">
                                <h5 class="text-info">Login</h5>                                
								<button type="submit" id="sendlogin" class="btn btn-primary">Log In</button>
                            </div>
						</form>
						<form id="regist-form" class="form" action="register.php" method="post">                            
                            <div class="form-group">
                                <h5 class="text-info">Registration</h5>                                
								<button type="submit" id="sendcancel" class="btn btn-primary">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <h3>Sistem Informasi Akademik Mahasiswa</h3>
            <div class="col-4">
                <h1>UNIVERSITAS KOMPUTER</h1>
                <div class="card">
                    <div class="card-body">
                        <form method="post" name="form_regist" action="register.php" autocomplete="off">
                            <button type="submit" id="sendtambah" class="btn btn-primary">Sign Up</button>
                        </form>
                        <br>
                        <form method="post" name="form_login" action="form-login.php" autocomplete="off">
                            <button type="submit" id="sendlogin" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    </body>
</html>