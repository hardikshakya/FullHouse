<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	include("main.php");
?>
<div id="f-content">
<?php

?>

	<h1>Add New Movies</h1>
	<form method="post" action="index.php?page=entermovie">
		<p>name:<input type="text" name="mv_name" ></p>
		<p>cast:<input type="text" name="mv_cast" ></p>
		<p>dir:<input type="text" name="mv_dir" ></p>
		<p>language:<input type="text" name="mv_language" ></p>
		<p>type:<input type="text" name="mv_type" ></p>
		<p>synopsis<input type="text" name="mv_synopsis"></p>
		<p>image<input type="text" name="mv_image"></p>
		<p>image1<input type="text" name="mv_img1"></p>
		<p>image2<input type="text" name="mv_img2"></p>
		
		<p><input type="submit" name="submit" value="Add movie"></p>
	</form>
</div>
</body>
</html>
