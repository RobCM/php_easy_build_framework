<?php
	/*
		DB__connection
		
		@RobertC 8/8/2020
		
		functions for database connection-------------
		Depending what type of database you will end up
		using is the function you will call/ use.
		----------------------------------------------
		
		Database's suported so far MySQL and Microsoft SQL Server
		

	*/
	
	// For MySQL....
	function conn_mysql(){
		
		$server_name = "localhost"; // Replace with your server name!
		$user_name = "databaseuser"; 
		$password = "userpassword";
		$database_name = "thedatabasename";
		$conn = new mysqli($server_name, $user_name, $password, $database_name);
		// Check on the connection!
		echo (!$conn->connect_error) ? 'Database connected!' : 'Error! no connection';
		
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
		
	}
	
	// For MSSQL.... {warning this function does not work with XAMPP!}
	function conn_mssql(){
		
		$server_name = "localhost"; // Replace with your server name!
		$conn_credentials = array("Database" => "database name", "Uid" => "user id", "PWD" => "database password");
		$conn = sqlsrv_connect($server_name, $conn_credentials);
		// Check on the connection!
		echo ($conn) ? 'Database connected!' : 'Error! no connection';
		
		// SQL query
		$sql= 'SELECT * FROM table_name;';
		$getResults= sqlsrv_query($conn, $sql);
		
		if($row_results == FALSE){
			die(FormatErrors(sqlsrv_errors()));
		}
		else{
			while ($row = sqlsrv_fetch_array(($row_results, SQLSRV_FETCH_ASSOC)){
				echo $row['data_item_colum'];
			}
		}
		
	}
	
?>