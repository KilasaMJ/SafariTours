<?php require_once("connection.php"); ?>
<?php
	
	function redirect_to($new_location) {
		header("Location: " . $new_location);
		exit;
	}
	function mysql_prep($string) {
		global $connection;
		$escaped_string = mysqli_real_escape_string($connection, $string)	;
		return $escaped_string;	
	}
	
	function confirm_query($result_set){
		if(!$result_set){
			die("Database query failed. ");	
		}
	}	
	
	function _searchnews() {
		global $connection;
		$query = "select * from tour_news";
		$result = mysqli_query($connection,$query);
		confirm_query($result);
		return $result;
	}
	function news_by_id($news_get) {
		global $connection;
		$id = mysql_prep($news_get);
		$query = "select * from tour_news where id = '{$id}' limit 1";
		$result = mysqli_query($connection, $query);
		confirm_query($result);
		return $result;	
	}
?>

