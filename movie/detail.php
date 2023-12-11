<?php
include('config.php');
include('header.php');
include('navbar.php');

//Inserting DATA For user review
if (isset($_GET['mid'])) {
    $movie_id = $_GET['mid'];

    if (isset($_POST["submit"])) {
        // Handle form submission
        $user_id = $_SESSION['userid'];
        $review = $_POST['review'];

        $insert_query = "INSERT INTO `reviews` (movie_id, review, user_id) VALUES ('$movie_id', '$review', '$user_id')";
        $result = mysqli_query($connection, $insert_query);

        if ($result) {
            echo "<script>alert('Your review has been submitted');</script>";
            echo "<script>window.location.href='detail.php?mid=$movie_id';</script>";
        }
    }
//Displaying Movie Details
    $get_movie = "SELECT * FROM `movie_list` WHERE `mid` = $movie_id";
    $get_movie_run = mysqli_query($connection, $get_movie);

    if (mysqli_num_rows($get_movie_run) > 0) {
        $row = mysqli_fetch_assoc($get_movie_run);
?>
		<style>
			 .test{
    display: flex;
    justify-content: center;
    margin-top: -180px;

}
.Testimonial-box{
  width: 700px;
  box-shadow: 2px 2px 30px rgba(0, 0, 0, 0.1);
  background-color: #f4f4f4;
  padding: 20px;
  margin: 15px;
  border-radius: 20px;
}
.profile-image{
  height: 50px;
  width: 50px;
  border-radius: 50%;
  overflow: hidden;
  margin-right: 5px;
}
.profile-image img{
  height: 100%;
  width: 100%;
  object-fit: cover;
  object-position: center;
}
.profile{
  display: flex;
  align-items: center;
}
.name-user{
  display: flex;
  flex-direction: column;
}
.name-user strong{
  color: #21047C;
  font-size: 1.1rem;
  letter-spacing: 0.05px;
  font-family: poppin-semiBold;
}
.name-user span{
  color: black;
  font-size: 0.8rem;
  font-family: Poppins-Regular;

}
.Reviews{
  color: yellow;
}
.box-top{
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}
.clint-comments p{
  font-family: Poppins-Regular;
}
.testimonial-button img{
  height: 15px;
  width: 20px;
  margin: 13px 0px 0 13px
}
#contact_last{
width: 700px;	
 background: black;
 margin-left: -30px;
 overflow: hidden;
}
.contact_last_1 p{
font-family: poppin-semiBold;
color: white;
margin-bottom:8px;
font-size:18px;  
margin-left: -90px;
}
.contact_last_1 .submit_button{
  font-family: poppin-semiBold;
  background: white;
  border:none;
  padding:15px 30px;
  color: black;
  font-size:20px;
  margin-left: -90px;
  margin-top:10px;
  transition: 1.5s;
  border-radius: 20px;
  }
.contact_last_1 .submit_button:hover{
background: #cf0000;
color: black;
transition: 1.5s;
}
.contact_last_1 .form_1{
height:150px;
width: 600px;
margin-left: -90px;
border-radius: 10px;
  }
		</style>
			
		
		<section id="center" class="center_detail clearfix">
			<div class="container">
				<div class="row">
					<div class="center_detail_main clearfix">
						<div class="col-sm-4">
							<div class="center_detail_main_left clearfix">
								<img src="<?php echo 'Admin Panel/PHP/image/' . $row['image'] ?>" width="100% ">
							</div>
						</div>
						<div class="col-sm-8">
							<div class="center_detail_main_right clearfix">
								<h2>
									<?php echo $row['name'] ?>
								</h2>
								<h5>Description</h5>
								<p>
									<?php echo $row['description'] ?>
								</p>
							</div>
							<div class="center_detail_main_right_1 clearfix">
								<div class="col-sm-6 space_left">
									<div class="center_detail_main_right_1_inner">
										<h6><a href=""></a>MOVIE PREVIEW</a></h6>
									</div>
									<a href="<?php echo $row['link']?>" type="button" class="btn view">View Trailor</a>
									<a href="book.php?mid=<?php echo $row['mid']?>" type="button" class="btn view">Book Now</a>
								</div>


								<div class="col-sm-6">
									<div class="center_detail_main_right_1_inner">
										<h3>SOCIAL SITES</h3>
										<ul class="social-network social-circle">
											<li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
											<li><a href="#" class="icoFacebook" title="Facebook"><i
														class="fa fa-facebook"></i></a></li>
											<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a>
											</li>
											<li><a href="#" class="icoGoogle" title="Google +"><i
														class="fa fa-google-plus"></i></a></li>
											<li><a href="#" class="icoLinkedin" title="Linkedin"><i
														class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>

								</div>
								
							</div>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
		</section>
		<?php
        }
    }
    ?>





		<section id="detail">
			<div class="container">
				<div class="row">
					<div class="detail_main clearfix">
						<div class="col-sm-4">
							<div class="detail_main_left clearfix">
								<div class="click_right clearfix">
									<!-- Fetching Movie Description -->
									<h4>DESCRIPTION</h4>
									<ul>
										<li><i class="fa fa-clock-o"></i>Release Date :
											<?php echo $row['release'] ?>
										</li>
										<li><i class="fa fa-list"></i> Genre :
											<?php echo $row['genre'] ?>
										</li>
										<li><i class="fa fa-star"></i>Cast :
											<?php echo $row['cast'] ?>
										</li>
									</ul>
								</div>
						
						<div class="click_right clearfix">
							<h4 class="heading_tag">PREVIEW</h4>
							<a href="#"><img src="<?php echo 'Admin Panel/PHP/image/' . $row['image'] ?>"
									width="100%"></a>
						</div>
					</div>
				</div>

				

				
				
<?php
//Displaying user review 
    $fetch_reviews = "SELECT * FROM `reviews` as r JOIN `users` as u ON r.user_id = u.id WHERE r.movie_id = $movie_id";
    $result_reviews = mysqli_query($connection, $fetch_reviews);

    if (mysqli_num_rows($result_reviews) > 0) {
        while ($row = mysqli_fetch_assoc($result_reviews)) {
    ?>
				<div class="test">
        <div class="Testimonial-box-container">
          <div class="Testimonial-box">
            <div class="box-top">
      
              <div class="profile">
                <div class="profile-image">
                  <img src="<?php echo 'img/' . $row['image'] ?>" width="100px" height="150px">
                </div>
                <div class="name-user">
                  <strong><?php echo $row['username']?></strong>
                </div>
              </div>
      
            </div>
      
            <div class="clint-comments">
              <p><?php echo $row['review']?></p>
            </div>
          </div>
        </div> 
      </div>
	  <?php
        }
    }
    ?>

<!-- Submitting User Review to Database -->
<form action="detail.php?mid=<?php echo $movie_id; ?>" method="post">
        <section id="contact_last">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="contact_last_1 clearfix">
                            <p>Your Review</p>
                            <textarea class="form-control form_1" name="review" required></textarea>
                            <input type="submit" name="submit" value="SUBMIT" class="submit_button">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>


	  

	  


	  
				<div class="col-sm-8">
					<!-- Other Films showing same as like main page -->
					<div class="detail_main_right_1 clearfix">
						<h4>OTHER FILMS RUNNING IN THEATRE</h4>
							<?php
							//Fetching all movie pic and name from database
							$fetch = "SELECT * FROM `movie_list` LIMIT 4";
							$result = mysqli_query($connection, $fetch);
							if (mysqli_num_rows($result) > 0) {
								while ($row = mysqli_fetch_array($result)) {

									?>
						<div class="col-sm-3 space_left">
									<div class="detail_main_right_1_inner_1 clearfix">
										<a href="detail.php?mid=<?php echo $row['mid'] ?>"><img
												src="<?php echo 'img/' . $row['image'] ?>" width="100%" height="220px"></a>
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
									<a href="#">View more</a>
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
									<a href="#">View more</a>
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
									<a href="#">View more</a>
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