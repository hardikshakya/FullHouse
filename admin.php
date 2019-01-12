<?php
	session_start();

	if(isset($_GET['action'])) {
		if ($_GET['action']=="logout") {
			unset($_SESSION['admin']);
		}
	}


	if(isset($_POST['login_user'])) {	
		$login_sql = "SELECT * FROM admin WHERE ad_name='".$_POST['ad_name']."' AND ad_pass='".md5($_POST['ad_pass'])."'";

		if($login_query=mysqli_query($db, $login_sql)) {
			$login_rs = mysqli_fetch_assoc($login_query);
			$_SESSION['admin']=$login_rs['ad_name'];
		}
	}
	
	if(isset($_SESSION['admin'])) {
		include("adcpanel.php");
	}
	else {
		include("adlogin.php");
	}
?>