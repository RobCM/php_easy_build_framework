<?php
	/*
		post__url
		
		@RobertC 9/6/2020
		
		This is a test php to be use by the JS AJAX script!
		

	*/
	
	// To block PHP errors comment out if need it for testing!
	error_reporting(E_ERROR);
	
	// Array for JSON data to be return
	$json_response = [];
	
	$server_name = "localhost"; // Replace with your server name!
	$user_name = "databaseuser"; 
	$password = "userpassword";
	$database_name = "thedatabasename";
	$conn = new mysqli($server_name, $user_name, $password, $database_name);
	// Check on the connection!
	echo (!$conn->connect_error) ? 'Database connected!' : 'Error! no DB connection';
	
	// Parameters past by the AJAX using mysqli_real_escape_string to prevent SQL INJECTION!
	$value_one = mysqli_real_escape_string($conn, $_POST['value_one']);
	$value_two = mysqli_real_escape_string($conn, $_POST['value_two']);
	
	// SQL query
	$sql = 'SELECT * FROM table_name;';
	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	
	if(mysqli_num_rows($result) > 0){
		
		// For each row of data!
		while($row = mysqli_fetch_assoc($result)){
			$data_1 =  $row['data_item_colum'];
			
			array_push($json_response, $data_1);
		}
		
	}
	else{
		array_push($json_response, 'No results');
	}
	
	// Convert data to JSOn format
	$json_data = json_encode($json_response);
	echo $json_data;	
	
?>