 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include("main.php"); 
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	$_SESSION['editmovie']['mv_name']=$_POST['mv_name'];
	$_SESSION['editmovie']['mv_cast']=$_POST['mv_cast'];
	$_SESSION['editmovie']['mv_dir']=$_POST['mv_dir'];
	$_SESSION['editmovie']['mv_language']=$_POST['mv_language'];
	$_SESSION['editmovie']['mv_image']=$_POST['mv_image'];
	?>
	<h1>Edit Movie</h1>
    <p>Updated Movie name: <?php echo $_SESSION['editmovie']['mv_name']; ?></p>
    <p>Updated Movie cast: <?php echo $_SESSION['editmovie']['mv_cast']; ?></p>
    <p>Updated Movie dir: <?php echo $_SESSION['editmovie']['mv_dir']; ?></p>
    <p>Updated Movie language: <?php echo $_SESSION['editmovie']['mv_language']; ?></p>
    <p>Updated Movie image: <?php echo $_SESSION['editmovie']['mv_image']; ?></p>
	<p><a href="index.php?page=editmovieupdate">Confirm</a> | <a href="index.php?page=admin">Back to admin panel</a></p> 
</body>
</html> 