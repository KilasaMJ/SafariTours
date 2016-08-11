<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<!doctype html>
<html lang="en">
	<head><title>Green Safaris | Hotels</title></head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="javascript/jquery.js" ></script>
	<script type="text/javascript" src="javascript/bootstrap.js" ></script> 
	<link rel="StyleSheet" type="text/css" href="stylesheets/bootstrap.css" />
	<link rel="Stylesheet" type="text/css" href="stylesheets/main.css" />
	<style type="text/css">
		#_hotelreserve{
			background-image: url("image/elephant.gif");
			position: relative;
		   background-size: cover;
		   overflow: hidden;
		}
		#_hotelreserve2{
			background-image: url("image/hotels.gif");
			position: relative;
		   background-size: cover;
		   overflow: hidden;
		}
	</style>
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="index.php"><strong style="color:green;"><i>GreenStar Safari Tours</i></strong></a>
	    </div>
	
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="index.php">Home</a></li>
	        <li><a href="hotel_reservation.php">Hotel Reservation</a></li>
	        <li><a href="exploring.php">What To Explore?</a></li>
	        <li><a class="active" href="contact_us.php" style="color:white;">Our Contacts</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<div class="hidden-xs hidden-sm" style="padding-top:50px;">
		<div class="jumbotron hidden-xs" id="_hotelreserve">
		  <div class="container">
				 <p class="hidden-xs hidden-sm col-md-4 col-lg-4 pull-right" style="padding-left:20px;padding-bottom:20px;color:black;background-color:whitesmoke;font-family:'sans'">
			   	We Will Help You Plan Your Visit.<br>
			   	It's always easy with us.<br><br>
			   	  <a class="btn btn-success btn-small" href="contact_us.php" role="button"><strong>INQUIRE NOW</strong></a>
			   </p> 			
	 			<p>...</p>
	 			 <h2><strong style="color:whitesmoke;background-color:green">Welcome to! GreenStar Safari Tours</strong></h2>	   
	      <br>
	      <br>
	      <br>
		  </div>
	   </div>
	  </div>
  
<main>
<body>
	<article class="container">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="font-family:'Verdana'">
		<h1 class="hidden-xs hidden-sm">Our Contacts</h1>
		<h4 class="hidden-md hidden-lg" style="padding-top:60px;">Our Contacts</h4>
		  		<p>Please contact us through our addresses below and we will be happy to help you.</p>

				<address><br>
							  <strong>Green Star Safari Tours.</strong><br>
							  
							  Arusha Tanzania.<br>
							  Tanzania.<br>
							  <strong>greensafaritours.com</strong><br>
							</address>
							</p>
							<address>
							  <strong>Email</strong><br>
							  <a href="mailto:titussarah57@gmail.com">Send Email</a><br>
							  <a href="mailto:titussarah@gmail.com">titussarah@gmail.com</a><br><br><br>
							  
							</address>
	</article>
	<aside>
		<div class="jumbotron hidden-xs" id="_hotelreserve2">
			<div class="container">
				<br><br><br><br><br><br>
			</div>		
		</div>
	</aside>
	
</body>
</main> 
<footer class="_footer">
	<hr>
		<ul>
			<li><a href="index.php">Home</a></li><br>
	       <li><a href="hotel_reservation.php">Hotel Reservation</a></li><br>
	       <li><a href="exploring.php">What To Explore?</a></li><br>
			<li><a href="contact_us.php">Contact Us</a></li>	<br>
			&copy; <?php echo date('Y');?>		<br>
		</ul>	
	</footer>
</html>