<?php
	/*
		post__test_dynamic
		
		@RobertC 4/22/2020
		
		This is a test php to be use by the JS AJAX script!
		To test the dynamic "tables" to be display on GUI.
		Normally your DB SQL or stored procedure call will 
		go here and fill up the json response array!
	*/
	
	
	// To block PHP errors comment out if need it for testing!
	error_reporting(E_ERROR);
	
	// Array for JSON data to be return
	$json_response = [];
	
	
    $json_response = array(
		  array(first_name=>"Thomas", last_name=>"Richerdson", age=>45),
		  array(first_name=>"Amanda", last_name=>"Ramirez", age=>31),
		  array(first_name=>"Joe", last_name=>"Dunn", age=>22)
      );
	  
	// Convert data to JSON format
	$json_data = json_encode($json_response);
	echo $json_data;	
	
?>