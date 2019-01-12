<body bgcolor="reg">
	<div id="f-content">
		<h1>Control Panel</h1>
		<?php
			$u_sql="SELECT * FROM users";
			$u_query=mysqli_query($db, $u_sql);
			$u_rs=mysqli_fetch_assoc($u_query);
		?>
		<p>Name : <?php echo $u_rs['user_fname'];?> </p><br>
		<p>Email : <?php echo $u_rs['user_email'];?> </p><br>
		<p>Mobile : <?php echo $u_rs['user_phone'];?> </p><br>
		<p><a href="index.php?page=profile&action=logout">LOGOUT</a></p>
		
	</div> 	
</body>
