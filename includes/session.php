<?php
session_start();

function message() {
	
	if(isset( $_SESSION["message"])) {
		$output = "<div class=\"message\">";
		$output .= htmlentities($_SESSION["message"]);
		$output .=  "</div>";
		
		//clear message after use
		 $_SESSION["message"] = null;
		 
		return $output;	
	}
}

function errors() {
	
	if(isset($_SESSION["errors"])) {
		$errors= $_SESSION["errors"];
		
		//clear message after use
		 $_SESSION["errors"] = null;
		 
		return $errors;	
	}
}

function check_session() {
 if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1200)) {
    session_unset();    
    session_destroy();   
    redirect_to("mkuu.php");
 }
 $_SESSION['LAST_ACTIVITY'] = time();
} 
?>