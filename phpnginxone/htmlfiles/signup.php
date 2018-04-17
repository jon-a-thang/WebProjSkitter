<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type"text/css" href="skitterstyle.css">
		<title>Skitter</title>
		<meta charset="utf-8">
	</head>
	<body>
		<!--<img id="skit_welcome" src="images/skit_welcome.png" width="100%">-->
		<h1>Join The Family at Skitter today!</h1>

		<form action="enroll.php">
			<div class="container">
		  		<label for="fname"><b>First Name:</b></label>
		  		<input type="text" placeholder="first_name" name="fname" required> <br>

		  		<label for="lname"><b>Last Name:</b></label>
		  		<input type="text" placeholder="last_name" name="lname" required> <br>

		  		<label for="email"><b>Email:</b></label>
		  		<input type="email" placeholder="Enter Email" name="email" required> <br>

		    	<label for="psw"><b>Password:</b></label>
		    	<input type="password" placeholder="Enter Password" name="psw" required> <br>

		    	<button type="submit">Create Account</button>
			</div>
		</form>
	</body>
</html>	