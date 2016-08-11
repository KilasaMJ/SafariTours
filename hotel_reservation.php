<?php require_once("includes/_dbconnection.php");?>
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
	        <li><a class="active" href="#" style="color:white;">Hotel Reservation</a></li>
	        <li><a href="exploring.php">What To Explore?</a></li>
	        <li><a href="contact_us.php">Our Contacts</a></li>
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
		<h1 class="hidden-xs hidden-sm">Hotel Reservation</h1>
		<h4 class="hidden-md hidden-lg" style="padding-top:60px;">Hotel Reservation</h4>
		  		<p>
		  			Integral to the Tanzanian experience is its wonderful array of accommodation. 
		  			Safari lodges and camps harmoniously blend into the landscapes, almost always constructed from replenishable local materials.
		  			 Private verandas overlook a procession of mammals drinking from local waterholes, lion roars filter through opulent canvas tents, 
		  			 and cute bungalows are hidden within palm tree plantations. In Tanzania, you’ll find the luxury and quality demanded by the 
		  			 most discerning of travelers. You’ll also discover that it’s often surrounded by elephants, perforated by nature’s soundtrack, 
		  			 and imbued with an individual style that makes every night memorable.

				<p>While Tanzania does have large hotels and international chains, the most common type of accommodation is in a lodge. 
				These are often spread over immense grounds, ensuring that privacy and seclusion are on the agenda. Rooms usually come in the 
				form of spacious bungalows, often featuring private balconies with phenomenal views over the surrounding landscape. “Eco-lodges” 
				have recently become very popular in the industry – although Tanzania was offering them long before the term was even invented.</p>

				<p>The word “camp” tends to cause faces to drop and negative thoughts to swirl. So let’s just clarify things.
				 When on safari in Tanzania, a tented camp offers an opportunity to be completely immersed in nature. 
				 Extremely spacious canvas tents allow nature to sing a lullaby and provide an acoustic wake-up call.
				  Many operators offer fully-staffed mobile camps, which enable you to visit some of the more remote reserves and 
				  concessions – and literally follow the migrating wildlife. These luxurious mobile outfits have facilities and standards that 
				  far surpass anything you could imagine in the wilderness, from hot showers and raised beds to proper toilets and private balconies.
				   And they’re all incredibly charming and romantic.</p>

				<p>Tanzania also revels in its ability to offer something totally unique. 
				Private two-person camps are set up on the endless grasslands of the Serengeti. Sumptuous tree houses overlook waterholes in indigenous forests. 
				Colonial farmhouses have been converted to offer discreet opulent experiences. 
				Exclusive lodges are set in their own private concessions, meaning that just eight guests share a teeming animal kingdom that’s bigger than 
				many US states.  Whatever you’re looking for, let GreenStar Safaris wow you with a breathtaking range of accommodation options.
		  		</p>
		</div>
			<p style="display:block;margin-left:auto;margin-right:auto;text-align:center">
			    <a class="btn btn-default btn-small" href="contact_us.php" role="button"><strong style="color:green;">Book A Hotel Now</strong></a>
			</p>
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