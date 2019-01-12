<?php
	include("connect.php");
?>

<!DOCTYPE html>

	<head>
	<meta charset="utf-8">
	<title>FullHouse</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="movie Ticket booking" />
	<meta name="author" content="Hardik Shakya" />
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Animate -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

	</head>

	<body>

		<div class="containerrr">
			<?php
				include("header.php");

				if(!isset($_GET['page'])) {
					include("main.php");
				}
					
			?> 

			<div class="maincon">
				
			<?php
				if(!isset($_GET['page'])) {
					include("maincon.php");
				}else{
					$page = $_GET['page'];
					include("$page.php");
				}					
			?>
			

		<div id="f-about" data-section="about">
			<div class="container">
				<div class="row r-pb">
					<div class="col-md-8 col-md-offset-2 text-center section-heading animate-box">
						<h2 class="f-section-title">About</h2>
						<p class="f-lead">For improve the efficency in online movie booking sector, this site was build.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 animate-box">
						<div class="f-text with-plus">
							<h2>Hardik Shakya</h2>
							<span class="f-meta">id. 15CP001</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="f-text">
							<h2>Tirth Dholariya</h2>
							<span class="f-meta">id. 15CP008</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>

				</div>
			</div>
		</div>

		

		<div id="f-contact" data-section="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center section-heading">
						<h2 class="f-section-title animate-box">Contact</h2>
						<p class="f-lead animate-box">We'd love to talk about your story and messages.</p>
						<p class="animate-box">we will try to ndod dnnondosnodns djsodnsodnondosknd sndosnd sjdosndnsondosnsokn osdnosdsdsds.</p>
						<p class="animate-box"><a href="index.php?page=contact" class="btn btn-primary btn-lg">Get in touch</a></p>
					</div>
				</div>
			</div>
		</div>

		<div id="f-testimony" style="background-image: url(images/slide_3.jpg);" data-stellar-background-ratio="0.5">
			<div class="f-overlay"></div>
			<div class="container">
				<div class="row">
					<div class="flexslider animate-box">
							<ul class="slides">
								<li>
									<blockquote>
										<p>&ldquo;I think design would be better if designers were much more skeptical about its applications. If you believe in the potency of your craft, where you choose to dole it out is not something to take lightly.&rdquo; <cite>&mdash; Frank Chimero</cite></p>
									</blockquote>
								</li>
								<li>
									<blockquote>
										<p>&ldquo;Design must be functional and functionality must be translated into visual aesthetics, without any reliance on gimmicks that have to be explained.&rdquo; <cite>&mdash; Ferdinand A. Porsche</cite></p>
									</blockquote>
								</li>
								<li>
									<blockquote>
										<p>&ldquo;Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while.&rdquo; <cite>&mdash; Steve Jobs</cite></p>
									</blockquote>
								</li>
								
								
							</ul>
						</div>

				</div>
			</div>
		</div>
	</div>

		<?php
			include("footer.php");
		?>

		

	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>
	</div>
	</body>
</html>

