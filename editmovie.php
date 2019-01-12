<?php
	include("main.php");
?>
<div id="f-content">
<?php
	session_start(); 
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	if(isset($_GET['mv_id'])) {
		$_SESSION['editmovie']['mv_id']=$_GET['mv_id'];
	}
	if(!isset($_SESSION['editcategory']['mv_name']) && !isset($_SESSION['editcategory']['mv_cast']) && !isset($_SESSION['editcategory']['mv_dir']) && !isset($_SESSION['editcategory']['mv_language']) && !isset($_SESSION['editcategory']['mv_image'])) {
		$editcat_sql="SELECT * FROM movies WHERE mv_id=".$_GET['mv_id'];
		$editcat_query=mysqli_query($db, $editcat_sql);
		$editcat_rs=mysqli_fetch_assoc($editcat_query);
		$_SESSION['editmovie']['mv_name']=$editcat_rs['mv_name'];
		$_SESSION['editmovie']['mv_cast']=$editcat_rs['mv_cast'];
		$_SESSION['editmovie']['mv_dir']=$editcat_rs['mv_dir'];
		$_SESSION['editmovie']['mv_language']=$editcat_rs['mv_language'];
		$_SESSION['editmovie']['mv_image']=$editcat_rs['mv_image'];
	}
?>
	<h1>Edit Movie</h1>
    <form action="index.php?page=editmovieconfirm" method="post">
		<input name="mv_name" value="<?php echo $_SESSION['editmovie']['mv_name']; ?>" /><br>
		<input name="mv_cast" value="<?php echo $_SESSION['editmovie']['mv_cast']; ?>" /><br>
		<input name="mv_dir" value="<?php echo $_SESSION['editmovie']['mv_dir']; ?>" /><br>
		<input name="mv_language" value="<?php echo $_SESSION['editmovie']['mv_language']; ?>" /><br>
		<input name="mv_image" value="<?php echo $_SESSION['editmovie']['mv_image']; ?>" /><br>
		<input type="submit" name="update" value="Update" />
	</form>