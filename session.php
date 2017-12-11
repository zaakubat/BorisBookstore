<?php
	session_start(); 
	$user_name = "Boris Books store";
    $is_admin = false;
	
	if (isset($_SESSION['username'])) {
		$user_name = 'Hello ' . $_SESSION['username'];
		
		if(isset($_SESSION['customer_id']) && $_SESSION['customer_id'] == 1) {
			$is_admin = true;
		}
	}		
?>