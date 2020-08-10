<?php
	// Calling includes
	include './includes/html_header.php';
	include './includes/html_footer.php';
	include './includes/css_template.php';
	include './includes/js_template.php';
	include './db/db_connection.php';
	
	// Set up header and page title
	html_header("Test Page");
	// Call css template
	css_template();
	// Call js template
	js_template();
	
	
	// Example body!
	echo '
			<br><h4>Hi there this project is still under construction</h4><br>;) started on 8/4/2020 <br>';
			
	
	// Testing db function (MySQL)!
	conn_mysql()
	
	// Set up footer and text on footer
	html_footer("2020 test page!");
?>