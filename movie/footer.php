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