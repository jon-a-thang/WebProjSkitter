<?php
	//setcookie("SKIT_SESSION", $_COOKIE["SKIT_SESSION"], 0);
	session_start();
	session_unset();
	session_destroy();
	echo "<script>location.assign('index.php');</script>";
?>