<?php 
	$email = $_POST['login_email'];
	$password = $_POST['login_psw'];
	include_once("common.php");
	
	if($stmt = $mysqli->prepare("SELECT password, user_id from users where email=?")){
		if($stmt->bind_param("s", $email)){
			if(!$stmt->execute()){
				die("Error - Issue executing prepared statement: " . mysqli_error($mysqli));
			}
			if($res = $stmt->get_result()){
				$row = $res->fetch_assoc();
				if($res->num_rows != 1){
					die("Username or Password --> Invalid");
				}
				if($password === $row['password']){
					//session_unset(); 
					//session_destroy();

					session_start();
					//session_regenerate_id(true);

					$_SESSION['login'] = ['born' => time(),'ip' => $_SERVER['REMOTE_ADDR'],'valid' => true];
					$_SESSION['user_id'] = $row['user_id'];

					header("Content-Type: text/html");
					echo "<script>location.assign('home.php');</script>";
					die("Logged-In!!");
				}else{
					die("Username or Password --> Invalid");
				}
			}else{
				die(mysqli_error($mysqli));
			}
		}else{
			die(mysqli_error($mysqli));
		}
	}else{
		die(mysqli_error($mysqli));
	}
?>