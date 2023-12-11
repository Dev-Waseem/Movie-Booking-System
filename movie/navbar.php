
<section id="top">
 <div class="container">
  <div class="row">
   <div class="top_main clearfix">
     <!-- <div class="top_1 text-right clearfix">
	  <ul>
	   <li><span>09:13</span> </li>
	   <li class="border_none_1"> Monday 27 May 2019 </li>
	  </ul>
	 </div> -->
	 <div class="top_2 clearfix">
	  <div class="col-sm-3">
	   <div class="top_2_left">
	    <h1><a href="index.php">CINEMA ZONE <span>BOOKING</span></a></h1>
	   </div>
	  </div>
	 </div>
   </div>
  </div>
 </div>
</section>

<section id="header" class="clearfix cd-secondary-nav">
 <div class="container">
  <div class="row">
   <div class="header_main clearfix">
     <nav class="navbar navbar-default">
		   <div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">CINEMA ZONE <span>BOOKING</span></a>
	       </div>
	
	<div class="collapse navbar-collapse js-navbar-collapse">
		<ul class="nav navbar-nav navbar-right">
	<?php 
	if(isset($_SESSION["useremail"])){
	?>
			<li><a class="font_tag active_tag" href="index.php">Home</a></li>
			<li><a class="font_tag" href="contact.php">Contact Us</a></li>
			<li><a class="font_tag" href="about.php">Pricing</a></li>
			<li><a class="font_tag border_none_1" href="userprofile.php"> <img src="./img/profile.png" alt="profile" class="user"> </a></li>
			<?php 
	}else{
		?>
		<li><a class="font_tag active_tag" href="index.php">Home</a></li>
		<li><a class="font_tag" href="contact.php">Contact Us</a></li>
		<li><a class="font_tag" href="about.php">Pricing</a></li>
			<li><a class="font_tag" href="register.php">Sign Up</a></li>
			<li><a class="font_tag border_none_1" href="login.php">Login</a></li>
	<?php 
	}
	?>
		</ul>
		
	</div>
</nav>
   </div>
  </div>
 </div>
</section>