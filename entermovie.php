<!DOCTYPE html>
<html>
<head>
	<title></title> 
</head>
<body>
<?php

	if(!isset($_SESSION['admin'])) 
	{
		header("Location:index.php?page=admin");
	}

	if(!isset($_POST['submit'])) 
	{
		header("Location:index.php?page=admin");
	}
 


	$newmovie_sql = "INSERT INTO movies (mv_name,mv_cast,mv_dir,mv_language,mv_type,mv_synopsis,mv_image,mv_img1,mv_img2) VALUES ('".mysqli_real_escape_string($db,$_POST['mv_name'])."','".mysqli_real_escape_string($db,$_POST['mv_cast'])."','".mysqli_real_escape_string($db,$_POST['mv_dir'])."','".mysqli_real_escape_string($db,$_POST['mv_language'])."','".mysqli_real_escape_string($db,$_POST['mv_type'])."','".mysqli_real_escape_string($db,$_POST['mv_synopsis'])."','".mysqli_real_escape_string($db,$_POST['mv_image'])."','".mysqli_real_escape_string($db,$_POST['mv_img1'])."','".mysqli_real_escape_string($db,$_POST['mv_img2'])."')";


	$newmovie_qry = mysqli_query($db,$newmovie_sql);

?> 

<p>NEW MOVIE HAS BEEN ENTERED</p>
<p><a href="index.php?page=admin">Return to admin panel</a></p>
</body>
</html>
