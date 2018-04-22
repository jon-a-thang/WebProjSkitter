<?php
	include_once "common.php";

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$pass = $_POST['psw'];

	if($stmt = $mysqli->prepare("SELECT user_id from users where email=?")) {
		if($stmt->bind_param("s", $email)) {
			if(!$stmt->execute()) {
				die(mysqli_error($mysqli));
			}
			if($res = $stmt->get_result()) {
				$row = $res->fetch_assoc();
				if($res->num_rows != 0) {
					die('Email already exists!');
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

	$addUserSuccess = false;
	if($stmt = $mysqli->prepare("INSERT INTO users (email,password,firstname,lastname) VALUES (?,?,?,?)")){
		if($stmt->bind_param("ssss", $email,$pass,$fname,$lname)){
			if(!$stmt->execute()){
				die(mysqli_error($mysqli));
			}else{
				$id = $stmt->insert_id;
			}
		}else{
			die(mysqli_error($mysqli));
		}
		if(!$stmt->close()){
			die(mysqli_error($mysqli));
		}else{
			$addUserSuccess = true;
		}
	
	}else{
		die(mysqli_error($mysqli));
	}
	if($addUserSuccess === true){
		$default_img = "images/new_user.png";
        if($stmt = $mysqli->prepare("INSERT INTO profiles (user_id,picture_url) VALUES (?,?)")) {
    	        if($stmt->bind_param("is",$id, $default_img)) {
            		if(!$stmt->execute()) {
                		die(mysqli_error($mysqli));
                	}
                } else {
    	                die(mysqli_error($mysqli));
               	}
    	        if(!$stmt->close()) {
    	        	die(mysqli_error($mysqli));
                } else {
                	$addUserSuccess = true;
            	}

        } else {
        	die(mysqli_error($mysqli));
        }
	}
	
	header("Content-Type: text/html");
	#echo '<html><head><title>Hello</title></head><body><p>SUCCESS!</p></body></html>';
	#echo $_SERVER['REMOTE_ADDR'];
	echo "<p>SUCCESS!</p>";
	echo "<p>Please wait to be redirected to the Log-In page.</p>";
	echo "<script>location.assign('index.php');</script>";

?>
