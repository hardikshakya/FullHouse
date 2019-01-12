<?php
$delcat_sql="DELETE FROM movies WHERE mv_id=".$_GET['mv_id'];
	$delcat_query=mysqli_query($db, $delcat_sql);
?>
	<h1>Movies deleted</h1>
      <p>Movie has successfully been deleted</p>
	  <p><a href="index.php?page=admin">Return to admin panel</a></p>