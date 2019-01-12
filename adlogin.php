<!doctype html>
<html>  
	<head>
		<meta charset="utf-8">
		<title>FullHouse  || Login Page</title>
		<!--<link rel="stylesheet" href="css/login_style.css">-->
		<link rel="stylesheet" href="css/lg.css">
		<link rel="stylesheet" href="css/icomoon.css"> 
		<link rel="shortcut icon" href="favicon.ico">
	</head> 
	<body>
		<div id="f-content">
		<div class="loginBox">
			<img src="images/user.png" class="user"> 
			<h2>Log In Here</h2>
			<form method="post" action="index.php?page=admin" name="logon">
			<!--<?php include('errors.php'); ?>-->
				<p>User Name</p>
				<input type="text" name="ad_name" placeholder="Enter User Name">
				<p>Password</p>
				<input type="Password" name="ad_pass" placeholder="••••••••••••">			
				<!--<button type="submit" class="btn" name="login_user">Login</button>-->
				<?php
					if (isset($_POST['login_user']) && !isset($_SESSION['admin'])) {
						?>
						<p>Incorrect username or password</p>
						<?php
					}
				?>
				<input type="submit" name="login_user" value="Sign In">
				<!--<a href="#">Forget Password</a><br>-->				
			</form>
		</div>
	</div>

	</body>
</html>
