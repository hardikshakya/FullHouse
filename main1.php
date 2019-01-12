<?php
	include("header.php");
?>

<div id="f-main">
<div class="f-overlay-mobile"></div>
<div id="f-home" class="js-fullheight" data-section="home">

	<div class="flexslider">
				
		<div class="f-overlay"></div>
			<div class="f-text">
				<div class="container">
					<div class="row text-center">
						<?php $mov_sql = "SELECT movies.mv_name, movies.mv_language, movies.mv_type, movies.mv_release, movies.mv_runtime, movies.mv_cast, movies.mv_dir, movies.mv_synopsis, movies.mv_img1, movies.mv_img2 FROM movies WHERE mv_id=".$_GET['mv_id']; 
								if($mov_query = mysqli_query($db, $mov_sql))
								{
									$mov_rs = mysqli_fetch_assoc($mov_query);
								} 

								?>
						<h1 class="animate-box"><?php echo $mov_rs['mv_name']; ?></h1>
						<div class="f-go animate-box">
							<a href="#" class="js-f-next">
								Book NOW !!!
								<span><i class="icon-arrow-down2"></i></span>
							</a>								 
						</div>
					</div> 
				</div>
			</div>
		  	<ul class="slides">
		  		<?php
		  			$mv_sql = "SELECT * FROM movies WHERE mv_id=".$_GET['mv_id'];
					$mv_query = mysqli_query($db, $mv_sql);
					$mv_rs = mysqli_fetch_assoc($mv_query);
					?>
			   	<li style="background-image: url(images/<?php echo $mv_rs['mv_img1']; ?>);" data-stellar-background-ratio="0.5"></li>
			   	<li style="background-image: url(images/<?php echo $mv_rs['mv_img2']; ?>);" data-stellar-background-ratio="0.5"></li>
		  	</ul>
	</div>
</div>