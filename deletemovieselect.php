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
<h1>Delete Movie</h1>
     <?php $delcat_sql="SELECT * FROM movies";
		$delcat_query=mysqli_query($db, $delcat_sql);
		$delcat_rs=mysqli_fetch_assoc($delcat_query);
		do { ?>
			<p><a href="index.php?page=deletemovieconfirm&mv_id=<?php echo $delcat_rs['mv_id']; ?>"><?php echo $delcat_rs['mv_name']; ?></a></p>
			
			<?php
				} while ($delcat_rs=mysqli_fetch_assoc($delcat_query));
	?>
  
</body>
</html>

