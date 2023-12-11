<?php
include('config.php');
include('header.php');
include('navbar.php');


?>


<section id="center" class="center_home clearfix">
	<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
		<!-- Overlay -->
		<div class="overlay"></div>

		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#bs-carousel" data-slide-to="0" class=""></li>
			<li data-target="#bs-carousel" data-slide-to="1" class=""></li>
			<li data-target="#bs-carousel" data-slide-to="2" class="active"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item slides">
				<div class="slide-1">
				</div>
				<div class="hero">
				</div>
			</div>
			<div class="item slides">
				<div class="slide-2"></div>
				<div class="hero">
				</div>
			</div>
			<div class="item slides active">
				<div class="slide-3"></div>
				<div class="hero">
				</div>
			</div>
		</div>
	</div>
</section>

<section id="booking">
	<div class="container">
		<div class="row">
			<div class="booking clearfix">
				<div class="col-sm-8">
					<div class="booking_left_main clearfix">

						<div class="tab-content clearfix">
							<div id="home" class="tab-pane fade in active clearfix">
								<div class="click clearfix">
									<div class="click_1 clearfix">
										<h3>Online Movies Booking <a class="pull-right" href="#"> All Available
												Movies</a></h3>
									</div>
									<div class="click_2 clearfix">
										<?php
										//Fetching all movie pic and name from database
										$fetch = "SELECT * FROM `movie_list`";
										$result = mysqli_query($connection, $fetch);
										if (mysqli_num_rows($result) > 0) {
											while ($row = mysqli_fetch_array($result)) {

												?>
												<div class="col-sm-3">
													<div class="click_2_inner clearfix">
														<a href="detail.php?mid=<?php echo $row['mid'] ?>"><img
																src="<?php echo 'Admin Panel/PHP/image/' . $row['image'] ?>" width="100%"
																height="220px"></a>
														<p class="text-center"><a href="detail.php">
																<?php echo $row['name'] ?>
															</a></p>
													</div>
												</div>


												<?php
											}
										}
										?>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
				<div class="col-sm-4">
					<div class="booking_right_main clearfix">
						<div class="booking_right_main_2 clearfix">
						</div>
						<div class="booking_right_main_3 clearfix">
							<div class="grid">
								<figure class="effect-milo">
									<img src="img/cenima_zone_4.jpg" alt="img03" />
									<figcaption>
										<h2>KIDS <span>CLUB</span></h2>
										<p>Kids zone & play area.</p>
										<a href="pricing.php">View more</a>
									</figcaption>
								</figure>
							</div>
						</div>
						<div class="booking_right_main_3 clearfix">
							<div class="grid">
								<figure class="effect-milo">
									<img src="img/cenima_zone_5.jpg" alt="img03" />
									<figcaption>
										<h2>ANIMATION<span>MOVIES</span></h2>
										<p>ANIMATION Movies.</p>
										<a href="pricing.php">View more</a>
									</figcaption>
								</figure>
							</div>
						</div>
						<div class="booking_right_main_3 clearfix">
							<div class="grid">
								<figure class="effect-milo">
									<img src="img/cafe.jfif" alt="img03" />
									<figcaption>
										<h2>Cafeteria</h2>
										<p>Cafeteria.</p>
										<a href="pricing.php">View more</a>
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
				</div>
			</div>
					<div class="booking_1 clearfix">
						<h3>NEW UP COMING MOVIES</h3>
			<?php
			//Fetching all upcoming movie pic and name from database
			$fetch = "SELECT * FROM `movie_news`";
			$result = mysqli_query($connection, $fetch);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_array($result)) {

					?>
						<div class="booking_1_inner clearfix">
							<div class="col-sm-3">
								<div class="booking_1_inner_1 clearfix">
									<img src="<?php echo 'img/' . $row['image'] ?>" width="100%" height="220px">
									<h4 style="color: white; font-weight: 300; padding: 10px;">
										<?php echo $row['title'] ?>
									</h4>
									<h5>Launched:
										<?php echo $row['release'] ?>
									</h5>
									<p><a href="#"></a>
										<?php echo $row['description'] ?>
									</p>
									<h6><a href="<?php echo $row['link'] ?>">WATCH TRAILER</a></h6>
								</div>
							</div>
							<?php
				}
			}
			?>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="booking_last">
	<div class="container">
		<div class="row">
			<div class="booking_last clearfix">
				<div class="col-sm-4">
					<div class="booking_right_main_3 clearfix">
						<div class="grid">
							<figure class="effect-milo">
								<img src="img/vip1.webp" alt="img03">
								<figcaption>
									<h2>Platinum<span> ZONE</span></h2>
									<p>Our Platinum ZONE Category Buy Your Ticket & Enjoy With Your Family.</p>
									<a href="pricing.php">View more</a>
								</figcaption>
							</figure>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="booking_right_main_3 clearfix">
						<div class="grid">
							<figure class="effect-milo">
								<img src="img/vip2.jpg" alt="img03">
								<figcaption>
									<h2>Box<span></span> ZONE</h2>
									<p>Our Box ZONE Category Buy Your Ticket & Enjoy With Your Family.</p>
									<a href="pricing.php">View more</a>
								</figcaption>
							</figure>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="booking_right_main_3 clearfix">
						<div class="grid">
							<figure class="effect-milo">
								<img src="img/vip5.jpeg" alt="img03">
								<figcaption>
									<h2>Gold<span> ZONE</span></h2>
									<p>Our Gold ZONE Category Buy Your Ticket & Enjoy With Your Family.</p>
									<a href="pricing.php">View more</a>
								</figcaption>
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php
include('footer.php');
?>