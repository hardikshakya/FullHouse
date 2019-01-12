<?php
if(!isset($_GET['mv_id'])) 
{
	header("Location:index.php");
}

include("main1.php");
?>
<div id="f-content">
		<div class="container">
			<div class="row r-pb">
				<div class="col-md-8 col-md-offset-2 text-center section-heading">
					<h2 class="f-section-title animate-box">Intro Text</h2>
					<p class="f-lead animate-box"><?php echo $mov_rs['mv_language']; ?> | U/A<br>
					<?php echo $mov_rs['mv_type']; ?> | <?php echo $mov_rs['mv_release']; ?> | <?php echo $mov_rs['mv_runtime']; ?><br>
					<br>
					Actors: <?php echo $mov_rs['mv_cast']; ?><br>
					Director: <?php echo $mov_rs['mv_dir']; ?><br>
					</p>
					<h2 class="f-section-title animate-box">SYNOPSIS</h2>
					<p class="f-lead animate-box"><?php echo $mov_rs['mv_synopsis']; ?></p>
				</div>
			</div>

			<div id="f-contact" data-section="contact">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center section-heading">
							<h2 class="f-section-title animate-box">I want to see this ;)</h2>
							<p class="f-lead animate-box">How can I Book the tickets for this wonderful movie ?.</p>
							<p class="animate-box">If you want to watch the movie than click on the BOOK NOW Button And hsiajss asosoonoaksaos.</p>
							<p class="animate-box"><a href="book.php" class="btn btn-primary btn-lg">BOOK NOW !!</a></p> 
						</div>
				</div>
			</div>
		</div>
	</div>
</div>