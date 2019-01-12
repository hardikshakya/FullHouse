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
	unset($_SESSION['editmovie']);
?>
<div id="f-content"> 
<h1>Edit Movies</h1>
     <?php $editcat_sql="SELECT * FROM movies";
		$editcat_query=mysqli_query($db, $editcat_sql);
		$editcat_rs=mysqli_fetch_assoc($editcat_query);
		do { ?>
			<p><a href="index.php?page=editmovie&mv_id=<?php echo $editcat_rs['mv_id']; ?>"><?php echo $editcat_rs['mv_name']; ?></a></p>
			
			<?php
				} while ($editcat_rs=mysqli_fetch_assoc($editcat_query));
			?>  
</body>
</html>

