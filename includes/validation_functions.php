<?php
	$errors = array();
	
	function check_if_image($value){
	 global $errors;
	 $check = getimagesize($value);
    if($check !== false) {
    } else {
        $errors[$value] =  "File is not an image.";
        $uploadOk = 0;
    }	
	}
	
	function field_name_as_text($fieldname) {
		$fieldname = str_replace("_", " ", $fieldname);
		$fieldname = ucfirst($fieldname);
		return $fieldname;
	}
	
	
	// *presence
	function has_presence($value) {
 		return isset($value) && $value !== "";
	}
	
	function validate_presences($required_fields) {
	global $errors;
		foreach($required_fields as $field ){
			$value = trim($_POST[$field]);
			if(!has_presence($value)){
				$errors[$field] = field_name_as_text($field) . " haijajazwa";			
			}	   
	   }
	}	
	
	//	*string length
	function has_max_length($value, $max) {
		return strlen($value) <= $max; 
	}
	
	function validate_max_lengths($field_with_max_length) {
	global $errors;
		//Using an assoc. array
		foreach($field_with_max_length as $field => $max){
			$value = trim($_POST[$field]);
			if(!has_max_length($value, $max)){
				$errors[$field] = field_name_as_text($field) . " refu mno";			
			}	   
	   }
	}
	
	function compare_strings($str1= "" , $str2 = "") {
		global $errors;
		$comparison = strcmp($str1, $str2);
		if($comparison != 0 ) {
			return $errors[$str1] =   "Maneno ya dharura au password hazijafanana   hayajafanana";
		}	else {
			return "The same";
		}
	}
	// *inclusion in a set
	function has_inclusion_in($value, $set) {
		return in_array($value,$set);
	}
		
	
		
	
?>

