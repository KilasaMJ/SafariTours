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
		.jumbotron{
			padding-top: 70px;
			background-image: url("image/giraffe.gif");
		   background-size: cover;
		   overflow: hidden;
		}
		#_hotelreserve2{
			background-image: url("image/tiger.gif");
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
	        <li><a class="active" href="exploring.php" style="color:white;">What To Explore?</a></li>
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
		<h4 class="hidden-md hidden-lg" style="padding-top:60px;">What To Explore?</h4>
				<li><p>
					    Customize a multi-day safari journey and explore a beautiful collection of national parks and private concessions, 
					    where you’ll have miles of untamed Africa to yourself. Go in search of magnificent leopards and lions, 
					    and marvel at some of the best bird-watching on the planet. Discover hippos and crocodiles in the northern rivers, 
					    marvel at chimpanzees in the western forests, and swim with dolphins and whale sharks at the coast. 
					    Experience it on a game drive, on guided bush walks, on horseback, or from the air. In the original land of safari, the options are endless.				
				</p></li>			
				<li><p>
					    Marvel at the singular magnitude of the Great Migration, one of the world’s most dramatic natural spectacles,
					     as upwards of 1.5 million wildebeest, Burchell’s zebra and Thomson’s gazelle sweep across the Serengeti in their age-old 
					     search for pasture and water. This ancient ritual delivers a variety of stunning wildlife-viewing opportunities: 
					     in February and March, when the wildebeest are calving on the Southern Serengeti Plains (with plenty of opportunistic 
					     predators in attendance); in April and May, when feisty mating bulls compete on the Central Plains; and in August and September, 
					     when the herds dodge giant Nile crocodiles on their dramatic crossings of the Mara River.
				</p></li>			
				<li><p>
						 The Serengeti plains are also celebrated as the “Cradle of Mankind” – the location where some of our earliest ancestors
						  started to settle on the land. Tools and human remains unearthed at Olduvai Gorge, in the eastern Serengeti, 
						  show the site was occupied by Homo habilis about 1.8 million years ago and Homo erectus 1.2 million years ago – while footprints 
						  uncovered at nearby Laetoli date back nearly 3.6 million years. Fascinating guided tours of both sites, and the informative
						   visitor center at Olduvai, offer a unique trip back in time.				
				</p></li>			
				<li><p>
    					Drift away on the pristine Indian Ocean beaches of the Zanzibar Archipelago, where palm trees and turquoise waters combine 
    					in postcard-perfect harmony. Dive or snorkel on the spectacular marine worlds off Nungwi and Pemba Island, tour the 
    					19th century palaces and bustling markets of Stone Town, sample exotic fruits and spices on a visit to the island’s legendary 
    					spice farms – or simply stroll on miles and miles of deserted white sand that squeaks beneath your feet.
				</p></li>			
				<li><p>
						Immerse yourself in the stunning lost world of Ngorongoro Crater, an ancient volcanic caldera bursting with animals, 
						which is regularly described (by seasoned guides as well as awestruck travelers) as “the 8th wonder of the world”. 
						An astonishing concentration of wildlife lives in this lush prehistoric landscape, and all of the Big Five – elephants, 
						rhinos, buffalos, lions and leopards – can be seen, sometimes with a single sweep of the binoculars. Lions lounge in the shade of your 
						safari vehicle, hippo pods cover lake shores, while fearless black rhino stop and return your gaze.				
				</p></li>			
				<li><p>
   					Be inspired by the unforgettable challenge of Mount Kilimanjaro, the world’s highest free-standing mountain, which can be conquered on an
   					 epic (although non-technical) five- to seven-day hike. Traverse numerous ecosystems and relish stupendous beauty as you climb to the 
   					 5,895-meter summit of Uhuru Peak on Kibo – the youngest and highest of Kilimanjaro’s three volcanic cones. Then enjoy the indescribable
   					  feeling and the incredible views that accompany every journey to “the roof of Africa”.				
				</p></li>			
				<li><p>
					 Witness huge herds of up to 300 elephants wandering through Tarangire National Park, then smile at the playful interactions within 
					 these giant herds. Babies and mothers endearingly share a moment, youngsters chase warthogs away from a waterhole, and quarrelsome 
					 males test out their strength. This large, well-watered park is renowned for its diversity of wildlife, including long-necked gerenuk 
					 antelopes and tree-climbing lions – often spotted in the branches of its bulbous baobab trees.				
				</p></li>			
			</ul> 
					
		</div>
			<p style="display:block;margin-left:auto;margin-right:auto;text-align:center">
			    <a class="btn btn-default btn-small" href="contact_us.php" role="button"><strong style="color:green;">INQUIRE NOW</strong></a>
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