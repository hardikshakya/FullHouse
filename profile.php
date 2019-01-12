<?php
	session_start();

	if(isset($_GET['action'])) {
		if ($_GET['action']=="logout") {
			unset($_SESSION['profile']);
		}
	}


	if(isset($_POST['login_user'])) {	
		$login_sql = "SELECT * FROM users WHERE user_name='".$_POST['user_name']."' AND user_password='".md5($_POST['user_password'])."'";

		if($login_query=mysqli_query($db, $login_sql)) {
			$login_rs = mysqli_fetch_assoc($login_query);
			$_SESSION['profile']=$login_rs['user_name'];
		}
	}
	
	if(isset($_SESSION['profile'])) {
		include("cpanel.php");
	}
	else {
		include("login.php");
	}
?>