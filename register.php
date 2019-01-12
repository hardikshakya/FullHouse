<?php 
	//include('server.php') 

	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	//$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', 'HKroot@123', 'fullhouse');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		//receive all input values from the form
		$fname = mysqli_real_escape_string($db, $_POST['user_fname']);
		//$mname = mysqli_real_escape_string($db, $_POST['user_mname']);
		$lname = mysqli_real_escape_string($db, $_POST['user_lname']);
		$username = mysqli_real_escape_string($db, $_POST['user_name']);
		$email = mysqli_real_escape_string($db, $_POST['user_email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		$phone = mysqli_real_escape_string($db, $_POST['user_phone']);
		//$gd = mysqli_real_escape_string($db, $_POST['date_registered']);
		$gd=date('Y-m-d H:i:s');

		//form validation: ensure that the form is correctly filled
		//if (empty($fname)) { array_push($errors, "First name is required"); }
		//if (empty($lname)) { array_push($errors, "Last name is required"); }
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		//register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (user_fname,user_lname, user_name, user_email, user_password, user_phone, date_registered) 
					  VALUES('$fname', '$lname', '$username', '$email', '$password', '$phone', '$gd')";
			//$query = "INSERT INTO users (user_fname, user_lname, user_name, user_email, user_password, user_phone) 
			//		  VALUES('$fname', '$lname',$username', '$email', '$password', '$phone')";
			mysqli_query($db, $query);

			$_SESSION['user_name'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>FullHouse  || Register Page</title>
	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
	<link rel="stylesheet" type="text/css" href="css/register_style.css">
	<link rel="shortcut icon" href="favicon.ico">
</head>
<body>
	<div class="regBox">
		<img src="images/user.png" class="user">

		<h2>Register</h2>
	<!--<div class="header">
		<h2>Register</h2>
	</div>-->

	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>
		

		<table id="register">
		<tr> 
			<td align="right" valign="top" style="padding-top: 5px"><p>Name*</p></td>
			<td>
			<table>
				<tr>
					<td><input type="text" name="user_fname" placeholder="First Name"></td>
					<td><input type="text" name="user_lname" placeholder="Last Name"></td>
				</tr>
			</table>
			</td>
			</tr>
			</table>
	
		<!--<div class="input-group">
			<p>first name</p>
			<input type="text" name="user_fname" placeholder="Enter Your First Name">
		</div>
		<div class="input-group">
			<label>mid name</label>
			<input type="text" name="user_mname">
		</div>
		<div class="input-group">
			<p>last name</p>
			<input type="text" name="user_lname" placeholder="Enter Your Last Name">
		</div>-->
		<div class="input-group">
			<p>Username*</p>
			<input type="text" name="user_name" placeholder="Enter Your User Name" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<p>Email*</p>
			<input type="text" name="user_email" placeholder="Enter Your Email Address" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<p>Password*</p>
			<input type="password" name="password_1" placeholder="••••••••••">
		</div>
		<div class="input-group">
			<p>Confirm password*</p>
			<input type="password" name="password_2" placeholder="••••••••••">
		</div>
		<div class="input-group">
			<p>phone</p>
			<input type="text" name="user_phone" placeholder="Enter Your contact Number">
		</div>
		<div class="input-group">
			<input type="submit" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="index.php?page=profile&action=login">Sign in</a>
		</p>
		</div>
	</form>
</body>
</html>