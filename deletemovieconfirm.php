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
<h1>Confirm movie to delete</h1>
      <?php $delcat_sql="SELECT * FROM movies WHERE mv_id=".$_GET['mv_id'];
			$delcat_query=mysqli_query($db, $delcat_sql);
			$delcat_rs=mysqli_fetch_assoc($delcat_query); 
			
			$count=mysqli_num_rows($delcat_query);
			?>
			<p><?php if($count>0) {
				echo "Warning! There are ".$count." movie item(s) in this category. If you delete the movie they will also be removed from the database";
			} ?></p>
			<p><?php echo "Do you really wish to delete ".$delcat_rs['mv_name']."?"; ?></p>
			<p><a href="index.php?page=deletemovie&mv_id=<?php echo $_GET['mv_id']; ?>">Yes, delete it!</a> | <a href="index.php?page=deletemovieselect">No, go back</a> | <a href="index.php?page=admin">Back to admin panel</a></p>
  
</body>
</html>
 