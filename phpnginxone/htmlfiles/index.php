<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type"text/css" href="skitterstyle.css">
		<title>Skitter</title>
		<meta charset="utf-8">
	</head>
	<body>
		<!--<img id="skit_welcome" src="images/skit_welcome.png" width="100%">-->
		<h1>Welcome to Skitter!</h1>

		<form action="signup.php">
			<p>New? Sign up to join us!</p>
			<div class="container">
		    	<button type="submit">Register</button>
			</div>
		</form>

		<form action="home.php">
			<p>Not New? Go ahead and Log-In!</p>
			<div class="container">
		  		<label for="uname"><b>Username:</b></label>
		  		<input type="text" placeholder="Enter Username" name="uname" required> <br>

		    	<label for="psw"><b>Password:</b></label>
		    	<input type="password" placeholder="Enter Password" name="psw" required> <br>

		    	<button type="submit">Login</button>
			</div>
		</form>
	</body>
</html>	