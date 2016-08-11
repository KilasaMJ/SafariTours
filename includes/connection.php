<?php 
 $dbname= "tour_db";
 $dbuser = "safaritoursadmin";
 $dbserver = "localhost";
 $dbpass = "06pass20_word_10safari";
 
 $connection = mysqli_connect($dbserver, $dbuser , $dbpass , $dbname);
 
 if(mysqli_connect_errno()) {
		//die("Database connection failed: " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")" );
		die ("../index.php");
	}
?>