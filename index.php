<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<!doctype html>
<html lang="en">
	<head><title>Green Safaris | Home</title></head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="javascript/jquery.js" ></script>
	<script type="text/javascript" src="javascript/bootstrap.js" ></script> 
	<link rel="StyleSheet" type="text/css" href="stylesheets/bootstrap.css" />
	<link rel="Stylesheet" type="text/css" href="stylesheets/main.css" />
	<script type="text/javascript">
  function blink() {
  var blinks = document.getElementsByTagName('blink');
  for (var i = blinks.length - 1; i >= 0; i--) {
  var s = blinks[i];
  s.style.visibility = (s.style.visibility === 'visible') ? 'hidden' : 'visible';
}
window.setTimeout(blink, 1000);
}
if (document.addEventListener) document.addEventListener("DOMContentLoaded", blink, false);
else if (window.addEventListener) window.addEventListener("load", blink, false);
else if (window.attachEvent) window.attachEvent("onload", blink);
else window.onload = blink; </script>
	<style type="text/css">
		  #_picturetoexplore:hover{
        		background-color:darkgreen;
        		color: blue;
    		}
		.jumbotron {
			padding-top: 100px;
		   background-image: url("image/zebra1.gif");
			background-size: cover;
		}
		aside>.jumbotron{
			background-image: url("image/nyumbu.gif");
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
	        <li><a class="active" href="index.php" style="color:white;">Home</a></li>
	        <li><a href="hotel_reservation.php">Hotel Reservation</a></li>
	        <li><a href="exploring.php">What To Explore?</a></li>
	        <li><a href="contact_us.php"> Our Contacts</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<div class="jumbotron hidden-xs">
	  <div class="container">
			 <p class="hidden-xs hidden-sm col-md-4 col-lg-4 pull-right" style="padding-left:20px;padding-bottom:20px;color:black;background-color:whitesmoke;font-family:'sans'">
		   	We Will Help You Plan Your Visit.<br>
		   	It's always easy with us.<br><br>
		   	  <a class="btn btn-success btn-small" href="contact_us.php" role="button"><strong>INQUIRE NOW</strong></a>
		   </p> 			
 			<p>...</p>
 			 <h2><strong style="color:whitesmoke;background-color:green">Welcome to! GreenStar Safari Tours</strong></h2>
      	 <br><br><br>
	  </div>
   </div>
<body>
	<article class="container">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="font-family:'Verdana'">
		<h1 class="hidden-xs hidden-sm">GreenStar Safari Tours</h1>
		<h4 class="hidden-md hidden-lg" style="padding-top:60px;">GreenStar Safari Tours</h4>
		  <p>GreenStar Safari Tour’s wilderness defies the imagination, its sweeping plains alive with giant creatures – and perhaps the closest 
		  thing on Earth to a true Garden of Eden. Snowcapped Kilimanjaro towers above dusty red savanna, 
		  flamingo-carpeted lakes abut thick green forests, and lush grass plains seemingly stretch on forever.
			First-time visitors are invariably awed by the scale and color, before being bewitched by the diversity. 
			You’ll find hidden waterholes, dazzling white sands, teeming volcanic craters, and ice-capped mountain peaks – all within a few hours of each other. 
			These are landscapes that have inspired countless wildlife documentaries and Disney movies – 
			evocative spectacles that remain indelibly raw and rugged.</p>

		  <p>No great landscape is complete without an inimitable cast of characters. During the great wildebeest migration, 
		  an estimated 1.5 million large mammals march across the Serengeti, while big cats roam freely through parks and reserves, 
		  and spotting hippos and elephants is an almost daily routine. No country can match the diversity of 
		 Tanzania’s national parks and the mind-boggling concentrations of its wildlife. First-timers are always wowed, 
		  while regulars return year after year because there is always somewhere new to explore, something new to see. 
		  Safaris in GreenStar Safari Tour aren’t about spotting a few animals – they’re a sublime immersion in an ancient and astonishing animal world.</p>

		 <p>Yet peel yourself away from the captivating wildlife, and the landscapes hold countless new experiences.
		  Trek up the world’s highest free-standing mountain and stand at 5,895 meters on the roof of Africa. 
		  Or be lulled into hibernation on the idyllic beaches of the mystical Zanzibar Archipelago. And don’t forget one other resident.
		   Tanzanians are famously relaxed and friendly – unsurprising, given that they also coined the phrase <em>“Hakuna matata”</em>.</p>

		  <p>For all its vast beauty and monumental scale, GreenStar Safari Tour always offers a very personal experience. 
		  Everybody leaves with different memories, unique snapshots that symbolize their vacation: a baby elephant being tenderly mothered,
		   mellifluous taarab music wafting through Zanzibar’s Stone Town, a ferocious growl from a black-maned lion, 
		   or the incredible procession of wildlife wandering past your private veranda. While GreenStar Safari Tour can monopolize superlatives,
		    a trip here is always an enthralling journey, full of iconic experiences and surprises.</p>
		</div>
			<p style="display:block;margin-left:auto;margin-right:auto;text-align:center">
			    <a class="btn btn-default btn-small" href="contact_us.php" role="button"><strong style="color:green;"><blink> Help Me Plan My Trip</blink></strong></a>
			</p>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="font-family:'Verdana'" id="exploring">
				<?php  $allnews = _searchnews();
						while($news = mysqli_fetch_assoc($allnews)) {
						$news_sub = substr($news['body'] , 0, 60);
				?>				
				<div class="col-md-4 col-lg-4" id="_picturetoexplore">
					<a href="_news.php?news=<?php echo urlencode($news['id']) ?>"> 
						<h4 class="hidden-xs hidden-sm" style="color:green;"><?php echo $news['title'];?></h4>
						<h6 class="hidden-md hidden-lg" style="color:green;"><?php echo $news['title'];?></h6>
						<img src="image/<?php echo $news['picture_location']; ?>" alt="" class="img img-thumbnail img-responsive">
				</div>
				
				<?php } ?>
		</div><br>
	
	</article>
</body>
	<aside>
		<div class="jumbotron hidden-xs">
		
				<br><br><br><br><br><br>
			
		</div>
	</aside> 
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