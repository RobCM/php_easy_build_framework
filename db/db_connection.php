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
		
	}
	
	// For MSSQL.... {warning this function does not work with XAMPP!}
	function conn_mssql(){
		
		$server_name = "localhost"; // Replace with your server name!
		$connectionOptions = array("Database" => "database name", "Uid" => "user id", "PWD" => "database password");
		$conn = sqlsrv_connect($server_name, $connectionOptions);
		// Check on the connection!
		echo ($conn) ? 'Database connected!' : 'Error! no connection';
	}
	
?>