<?php

						$mv_sql = "SELECT * FROM movies";
					$mv_query = mysqli_query($db, $mv_sql);
					$mv_rs = mysqli_fetch_assoc($mv_query);
						do
						{ ?>
						<div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
							<div class="img-grid">
								<!--<img src="images/p<?php //echo $mv_rs['mv_id']; ?>.jpg" class="img-responsive">-->
								<img src="images/<?php echo $mv_rs['mv_image']; ?>" class="img-responsive">
								<a href="index.php?page=movies&mv_id=<?php echo $mv_rs['mv_id']; ?>" class="transition">
									<div>
										<span class="f-meta">now showing</span>
										<h2 class="f-title"><?php echo $mv_rs['mv_name']; ?></h2>
							 		</div>
								</a>
							</div>
						</div>
						<?php
					 	}while($mv_rs = mysqli_fetch_assoc($mv_query))
?>