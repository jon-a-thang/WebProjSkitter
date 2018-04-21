<!-- <?php
	/* session_start();
	include_once "common.php";

	//$params = array('fname','lname','email','psw');

	//$fname = $_POST['fname'];
	//$lname = $_POST['lname'];
	//$email = $_POST['email'];
	//$pass = $_POST['psw'];

	//$_SESSION['login'];
	$idOfUser = $_SESSION['user_id'];
	//$email = $_POST['login_email'];

	// Get User's Profile Picture
	if($stmt = $mysqli->prepare("SELECT picture_url from profiles where user_id=?")){
		if($stmt->bind_param("i", $idOfUser)){
			if(!$stmt->execute()){
				die(mysqli_error($mysqli));
			}
			if($res = $stmt->get_result()) {
				$row = $res->fetch_assoc();
				if($res->num_rows !== 1) {
					die("Error: Could not get Profile Picture.");
				} else {
					$profPic = $row['picture_url'];
				}
			} else {
				die(mysqli_error($mysqli));
			}
		} else {
			die(mysqli_error($mysqli));
		}
	} else {
		die(mysqli_error($mysqli));
	}

	// Get User's first name and last name
	if($stmt = $mysqli->prepare("SELECT * from users where user_id=?")) {
		if($stmt->bind_param("i", $idOfUser)) {
			if(!$stmt->execute()) {
				die(mysqli_error($mysqli));
			}
			if($res = $stmt->get_result()) {
				$row = $res->fetch_assoc();
				if($res->num_rows !== 1) {
					die("Error: Could not get user's first and last name.");
				} else {
					//$idOfUser = $row['user_id'];
					$fname = ucfirst($row['firstname']);
					$lname = ucfirst($row['lastname']);
				}
			} else {
				die(mysqli_error($mysqli));
			}
		} else {
			die(mysqli_error($mysqli));
		}
	} else {
		die(mysqli_error($mysqli));
	} */
?> -->

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

		<form name="logoutform" method="post" action="logout.php">
			<label class="logoutbtnpos">
				<input name="logoutbtn" type="submit" id="logoutbtn" value="Logout">
			</label>
		</form>

		<div class="row">
			<div class="column">
				<div class="userbox">
					<div class="user_cover">
						<img id="cover_image" src="images/default_cover_photo.png" width="100%">
					</div>
					<div class="user_profile">
						<img id="default_user" src="images/new_user.png" width="150" height="150">
						<!-- <img id="default_user" src="<?php echo $profPic; ?>" width="150" height="150"> -->
					</div>
					<div class="userdata">
						<br> <!-- <?php //echo $fname . " " . $lname; ?> --> First + Last = FullName <br> <br>
					</div>
					<form name="editform" method="post" action="edituser.php">
						<label class="editbtnpos">
							<input name="editprofilebtn" type="submit" id="editprofilebtn" value="Edit Profile">
						</label>
					</form>
					<br>
				</div>
			</div>
			<div class="column">
				<div class="skit_comments">
					<input class="skit_box" type="text" placeholder="What is new? Enter a Skit!" name="skit_text">
					<button type="submit">Post</button>
				</div>
			</div>
		</div>
	</body>
</html>
