<?php
	include_once "common.php";

	$inputs = array('fname','lname','email','psw');
	$passedChecks = True;
	foreach ($inputs as $input) {
	    if(!isset($_POST[$input])){
			$passedChecks = False;
		}
	}

	if($passedChecks !== True){
		die('False - Please fill in all fields');
	}

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$pass = $_POST['psw'];

	if(!filter_var($email, FILTER_VALIDATE_EMAIL) === True){
		$passedChecks = False;
	}
	if($passedChecks !== True){
		die('False - There was a problem with your registration, please go back and examine it');
	} else {
		if($stmt = $mysqli->prepare("SELECT user_id from users where email=?")){
			if($stmt->bind_param("s", $email)){
				if(!$stmt->execute()){
					die("Error - Issue executing prepared statement: " . mysqli_error($mysqli));
				}
				if($res = $stmt->get_result()){
					$row = $res->fetch_assoc();
					if($res->num_rows != 0){
						die('False - The email you listed already has an account');
					}
				}else{
					die("Error - Getting results: " . mysqli_error($mysqli));
				}
			}else{
				die("Error - Issue binding prepared statement: " . mysqli_error($mysqli));
			}
		}else{
			die("Error - Issue preparing statement: " . mysqli_error($mysqli));
		}
		$good = false;
		if($stmt = $mysqli->prepare("INSERT INTO users (email,password,firstname,lastname) VALUES (?,?,?,?)")){
			if($stmt->bind_param("ssss", $email,$pass,$fname,$lname)){
				if(!$stmt->execute()){
					die("Error - Issue executing prepared statement: " . mysqli_error($mysqli));
				}else{
					$id = $stmt->insert_id;
				}
			}else{
				die("Error - Issue binding prepared statement: " . mysqli_error($mysqli));
			}
			if($stmt->close()){
				$good = true;
			}else{
				die("Error - Failed to close prepared statement" . mysqli_error($mysqli));
			}
		
		}else{
			die("Error - Issue preparing statement: " . mysqli_error($mysqli));
		}
		if($good === true){
			$default_img = "images/new_user.png";
	        if($stmt = $mysqli->prepare("INSERT INTO profiles (user_id,picture_url) VALUES (?,?)")){
	    	        if($stmt->bind_param("is",$id, $default_img)){
	            		if(!$stmt->execute()){
	                		die("Error - Issue executing prepared statement: " . mysqli_error($mysqli));
	                	}
	                }else{
	    	                die("Error - Issue binding prepared statement: " . mysqli_error($mysqli));
	               	}
	    	        if($stmt->close()){
	                    	
	                }else{
	    	                die("Error - Failed to close prepared statement" . mysqli_error($mysqli));
	            	}

	        }else{
	                die("Error - Issue preparing statement: " . mysqli_error($mysqli));
	        }
		}
	}
	header("Content-Type: text/html");
	#echo '<html><head><title>Hello</title></head><body><p>SUCCESS!</p></body></html>';
	#echo $_SERVER['REMOTE_ADDR'];
	echo "<p>SUCCESS!</p>";
	echo "<p>Please wait to be redirected to the Log-In page.</p>";
	echo "<script>location.assign('index.php');</script>";

?>
