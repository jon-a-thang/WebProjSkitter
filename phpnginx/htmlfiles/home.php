<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type"text/css" href="skitterstyle.css">
		<title>Skitter</title>
		<meta charset="utf-8">
	</head>
	<body>
		<div class="topnav">
			<h1> Skitter </h1>
		</div> 

		<div id="logout_div">
			<a id="logout" href="/logout.php">Logout</a>
		</div>

		<div class="row">
			<div class="column">
				<div class="userbox">
					<div class="user_cover">
						<img id="cover_image" src="images/default_cover_photo.png" width="100%">
					</div>
					<div class="user_profile">
						<img id="default_user" src="images/new_user.png" width="150" height="150">
					</div>
					<div class="userdata">
						<br>FRIST_NAME == LAST_NAME<br> <br>
						Followers: ## <br>
						Following: ## <br>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="skit_comments">
					<input class="skit_box" type="text" placeholder="What is new? Enter a Skit!" name="skit_text">
					<button type="submit">Post</button>
					<!--<br><br>
					<p>
						THIS IS SOME EXAMPLE TEXT! THIS IS SOME EXAMPLE TEXT! THIS IS SOME EXAMPLE TEXT! THIS IS SOME EXAMPLE TEXT! THIS IS SOME EXAMPLE TEXT! THIS IS SOME EXAMPLE TEXT! THIS IS SOME EXAMPLE TEXT! THIS IS SOME EXAMPLE TEXT! THIS IS SOME EXAMPLE TEXT! THIS IS SOME EXAMPLE TEXT! THIS IS SOME EXAMPLE TEXT! THIS IS SOME EXAMPLE TEXT! THIS IS SOME EXAMPLE TEXT! THIS IS SOME EXAMPLE TEXT! THIS IS SOME EXAMPLE TEXT! THIS IS SOME EXAMPLE TEXT! THIS IS SOME EXAMPLE TEXT! THIS IS SOME EXAMPLE TEXT! THIS IS SOME EXAMPLE TEXT! THIS IS SOME EXAMPLE TEXT! THIS IS SOME EXAMPLE TEXT! THIS IS SOME EXAMPLE TEXT! THIS IS SOME EXAMPLE TEXT! 
					</p> -->
				</div>
			</div>
		</div>
	</body>
</html>	