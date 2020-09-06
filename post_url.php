<?php
	/*
		post__url
		
		@RobertC 9/6/2020
		
		This is a test php to be use by the JS AJAX script!
		

	*/
	
	// Parameters past by the AJAX using mysqli_real_escape_string to prevent SQL INJECTION!
	$value_one = mysqli_real_escape_string($_POST['value_one']);
	$value_two = mysqli_real_escape_string($_POST['value_two']);
	
	
	$server_name = "localhost"; // Replace with your server name!
	$user_name = "databaseuser"; 
	$password = "userpassword";
	$database_name = "thedatabasename";
	$conn = new mysqli($server_name, $user_name, $password, $database_name);
	// Check on the connection!
	echo (!$conn->connect_error) ? 'Database connected!' : 'Error! no DB connection';
	
	// SQL query
	$sql = 'SELECT * FROM table_name;';
	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	
	if(mysqli_num_rows($result) > 0){
		
		// For each row of data!
		while($row = mysqli_fetch_assoc($result)){
			echo $row['data_item_colum'];
		}
		
	}
	else{
		echo 'No data!';
	}
	
	// Retrun result as JSON <---- work in progress!
	
	
?>