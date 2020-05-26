<!DOCTYPE html>
<html lang="en">
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
                        <form id="login-form" class="form" action="proses-login.php" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">                                
								<button type="submit" id="sendlogin" class="btn btn-primary">Login</button>
							</div>							
						</form>
						<form id="cancel-form" class="form" action="index.php" method="post">                            
                            <div class="form-group">                                
								<button type="submit" id="sendcancel" class="btn btn-primary">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<!-- <div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">                
                <div class="card">
				<h1 align="center">Login</h1>
                    <div class="card-body">
					<form action="proses-login.php" method="post">
						<label>
							Username:
							<input type="text" name="username" required>
						</label>
						<br>
						<label>
							Password:
							<input type="password" name="password" required>
						</label>
						<br>
						<button type="submit" id="sendlogin" class="btn btn-primary">Login</button>
					</form>
					<form action="index.php" method="post">	
						<br>						
						<button type="submit" id="sendcancel" class="btn btn-primary">Cancel</button>
					</form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</body>
</html>