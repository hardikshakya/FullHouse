<?php

	include("main.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	
	
	$editcat_sql="UPDATE movies SET mv_name='".$_SESSION['editmovie']['mv_name']."',mv_cast='".$_SESSION['editmovie']['mv_cast']."',mv_dir='".$_SESSION['editmovie']['mv_dir']."',mv_language='".$_SESSION['editmovie']['mv_language']."',mv_image='".$_SESSION['editmovie']['mv_image']."' WHERE mv_id=".$_SESSION['editmovie']['mv_id'];
	//echo $editcat_sql;
	$editcat_query=mysqli_query($db, $editcat_sql);
	
	unset($_SESSION['editmovie']);
?>
	<h1>Edit Movie</h1>
    <p>Movie successfully updated</p>
	<p><a href="index.php?page=admin">Back to admin panel</a></p>