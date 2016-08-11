<?php require_once("includes/_dbconnection.php");?>
<?php require_once("includes/functions.php");?>
<?php 
	$news_get = $_GET["news"]; 
	$news = news_by_id($news_get);
	$show = mysqli_fetch_assoc($news); ?>
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
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" style="font-family:'Verdana'">
			<h1 class="hidden-xs hidden-sm"><?php echo $show['title']?></h1>
			<h4 class="hidden-md hidden-lg" style="padding-top:60px;"><?php echo $show['title']?></h4> 
			<img src="image/<?php echo $show['picture_location'];?>" class="img img-responsive img-thumbnail"alt="">
			<p style="font-size:20px;" class="hidden-sm hidden-xs"> <?php echo nl2br($show['body']); ?></p>	
			<p style="font-size:12px;" class="hidden-md hidden-lg"> <?php echo nl2br($show['body']); ?></p>	
			<p style="display:block;margin-left:auto;margin-right:auto;text-align:center">
			    <a class="btn btn-default btn-small" href="contact_us.php" role="button"><strong style="color:green;">INQUIRE NOW</strong></a>
			</p>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" >
				<h5>More Images</h5>
			 <?php $allnews = _searchnews();
						while($news = mysqli_fetch_assoc($allnews)) { 
							if($news['id'] != $show['id']){ ?>
							<a href="_news.php?news=<?php echo urlencode($news['id']) ?>">
							 <img src="image/<?php echo $news['picture_location'];?>" class="img img-responsive"alt="" style="padding-bottom:10px;">
							</a>				 
			 <?php	} } ?>
		</div> 
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