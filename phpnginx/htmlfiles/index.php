<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type"text/css" href="skitterstyle.css" />
		<title>Welcome to Skitter</title>
		<meta charset="utf-8">
		<?php
			ini_set("request_order", "GPC");

			include("common.php"); 

			if(isset($_SESSION['login'])){
				header("Location: http://localhost/home.php");
			}
		?>
	</head>
	<body>
		<!--<img id="skit_welcome" src="images/skit_welcome.png" width="100%">-->
		<div class="topnav">
			<h1> Welcome to Skitter! </h1>
		</div>

		<form action="signup.php" method="post">
			<p>New? Sign up to join us!</p>
			<div class="container">
		    	<button type="submit">Register</button>
			</div>
		</form>

		<form action="login.php" method="post">
			<p>Not New? Go ahead and Log-In!</p>
			<div class="container">
		  		<label for="uname"><b>Username:</b></label>
		  		<input type="email" id="login_email" placeholder="Enter Email" name="login_email" required> <br>

		    	<label for="psw"><b>Password:</b></label>
		    	<input type="password" id="login_psw" placeholder="Enter Password" name="login_psw" required> <br>

		    	<button type="submit">Login</button>
			</div>
		</form>
	</body>
</html>