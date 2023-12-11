<?php
include('config.php');
include('header.php');
include('navbar.php');


?>
<style>
	  .card-body {
    border: 1px solid white;
    color: white;
    height: 190px;
    position: relative;
  }
  .card-body .button{
    width: 100%;
    color: black;
    position: absolute;
    bottom: 0;
    left: 0;
  }
  .card-body .card-title {
    padding: 10px 10px 10px 10px;
  }
</style>

<section id="center" class="center_pricing">
  <div class="container">
	 <div class="row">
	  <div class="col-sm-12">
	    <div class="center_pricing_1 clearfix">
		  <h1 class="text-center">Pricing</h1>

		      <ul>
<?php
$fetch = "SELECT * FROM `class`";
$result = mysqli_query($connection, $fetch);

if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_array($result)) {
?>
				   <li>
					<div class="card text-center mb-3" style="width: 15rem;">
						<div class="card-body">
						  <h5 class="card-title"><?php echo $row['class_name']?></h5>
						  <h5 class="card-title"><?php echo $row['age']?></h5>
						  <button type="button" class="button"><?php echo $row['price']?></button>
						</div>
					  </div>
				</li>

<?php
	}
}
?>
			 </ul>
			 
		</div>
	  </div>
     </div>
 </div>
</section>

<section id="center" class="center_pricing">
  <div class="container">
	 <div class="row">
	  <div class="col-sm-12">
	    <div class="center_pricing_1 clearfix">
		  <h2>About Us</h2>
		  <p class="para_1"> Duis sagittis ipsum Praesent mauris Fusce nec tellus sed augue semper porta Mauris massa Vestibulum lacinia arcu eget nulla Class aptent taciti sociosqu ad litora torquent.</p>
          <h2>Discount Coupon</h2>
		  <p class="para_1"> Lorem ipsum dolor sit amet, consectetur adipiscing elit Integer nec odio Praesent libero Sed cursus ante dapibus diam Sed nisi Nulla quis sem at nibh elementum imperdiet Duis sagittis ipsum Praesent mauris Fusce nec tellus sed augue semper porta.</p>
          <h2>Our Theatre &  Entertainment Zone</h2>
		  <p class="para_1"> Lorem ipsum dolor sit amet, consectetur adipiscing elit Integer nec odio Praesent libero Sed cursus ante dapibus diam Sed nisi Nulla quis sem at nibh elementum imperdiet Duis sagittis ipsum Praesent mauris Fusce nec tellus sed augue semper porta.</p>
          <h2>Preview Screening of Movie</h2>
		  <p class="para_1"> Sed cursus ante dapibus diam Sed nisi Nulla quis sem at nibh elementum imperdiet Duis sagittis ipsum Praesent mauris Fusce nec tellus sed augue semper porta Mauris massa Vestibulum lacinia arcu eget nulla Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos Curabitursodales ligula in libero Sed dignissim lacinia nunc.</p>
		  <p>Curabitursodales ligula in libero Sed dignissim lacinia nunc<br>
				Class aptent taciti sociosqu ad litora torquent <br>
				Fusce nec tellus sed augue semper</p>
          <h2>Movie Tickets</h2>
		  <p class="para_1">Nulla quis sem at nibh elementum imperdiet Duis sagittis ipsum Praesent mauris Fusce nec tellus sed augue semper porta Mauris massa Vestibulum lacinia arcu eget nulla Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos </p>
          <h2> Screenings for Funds</h2>
		  <p class="para_1">Sed cursus ante dapibus diam Sed nisi Nulla quis sem at nibh elementum imperdiet Duis sagittis ipsum Praesent mauris Fusce nec tellus sed augue semper porta Mauris massa Vestibulum lacinia arcu eget nulla Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
		</div>
	  </div>
     </div>
 </div>
</section>

<section id="footer">
	<div class="container">
	 <div class="row">
	  <div class="footer clearfix">
	   <h2 class="text-center">CINEMA ZONE MOVIES</h2>
	   <ul>
		<li><a href="#">TARIQ ROAD</a></li>
		<li><a href="#">Gulistan-e-Johar</a></li>
		<li><a href="#">PARI-MALL</a></li>
		<li><a href="#">ATRUM-MALL</a></li>
		<li><a href="#">OCEAN-MALL</a></li>
	   </ul>
	  </div>
	  <div class="footer_1 clearfix">
	   <div class="col-sm-3">
		<div class="footer_1_inner">
		  <h4>TRENDING LINKS</h4>
		  <ul>
		   <li><a href="pricing.php">PRICING</a></li>
		   <li><a href="index.php">TRENDING</a></li>
		   <li><a href="events.php">UPCOMING</a></li>
		   <li><a href="events.php">THIS WEEK</a></li>
		   <li><a href="events.php">NEW MOVIES</a></li>
		  </ul>
		</div>
	   </div>
	   <div class="col-sm-3">
		<div class="footer_1_inner">
		  <h4>NEW LINKS</h4>
		  <ul>
		   <li><a href="index.php">HOMEPAGE</a></li>
		   <li><a href="events.php">EVENTS</a></li>
		   <li><a href="detail.php">DETAILS</a></li>
		   <li><a href="contact.php">CONTACT US</a></li>
		   <li><a href="pricing.php">ABOUT US</a></li>
		  </ul>
		</div>
	   </div>
	   <div class="col-sm-3">
		<div class="footer_1_inner">
		  <h4>FAQ's</h4>
		  <ul>
		   <li><a href="contact.php">YOUR QUESTIONS</a></li>
		   <li><a href="contact.php">INFORMATION </a></li>
		   <li><a href="contact.php">SERVICES</a></li>
		   <li><a href="contact.php">HEADLINES</a></li>
		   <li><a href="contact.php">CONNECT WITH US</a></li>
		  </ul>
		</div>
	   </div>
	   <div class="col-sm-3">
		<div class="footer_1_inner_1">
		  <h4>KEEP CONNECTED</h4>
		   <ul class="social-network social-circle">
			   <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
			   <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
			   <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
			   <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
			   <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
		   </ul>
		</div>
	   </div>
	  </div>
	 </div>
	</div>
   </section>
   <hr>
   <section id="footer_bottom">
	<div class="container">
	 <div class="row">
	   <div class="footer_bottom clearfix">
		<div class="col-12">
		   <div class="footer_bottom_right">
			   <p> © 2023 Cinema Zone Movies. All Rights Reserved AWA</p>
			 </div>
		   </div>  
	   </div>
	 </div>
	</div>
   </section>

<script type="text/javascript">
$(document).ready(function(){

/*****Fixed Menu******/
var secondaryNav = $('.cd-secondary-nav'),
   secondaryNavTopPosition = secondaryNav.offset().top;
	$(window).on('scroll', function(){
		if($(window).scrollTop() > secondaryNavTopPosition ) {
			secondaryNav.addClass('is-fixed');	
		} else {
			secondaryNav.removeClass('is-fixed');
		}
	});	
	
});
</script>
</body>
       
</html>
