<?php
	// To block PHP errors comment out if need it for testing!
	error_reporting(E_ERROR);
	
	// Calling includes
	include './includes/html_header.php';
	include './includes/html_footer.php';
	include './includes/css_template.php';
	include './includes/js_template.php';
	include './db/db_connection.php';
	include './forms/forms_template.php';
	include './comments_box/comments_template.php';
	
	// Set up header and page title
	html_header("Test Page");
	
	// Call css template
	css_template();
	
	// Example body!
	echo '
			<div class="master_container">	
				<div id="container_1">
					'.form_2().' 
				</div>
				<div id="container_2">
					<br>
				</div>';	
	
	// Testing db function (MySQL)
	//conn_mysql();
	
	// Close the master_container div
	echo '
			</div>';		
	
	// Call js functions at the end so it can function after all html components have been load!
	//js_libs();
	//js_gui();
	//js_ajax();
	//js_comment();
	//js_dynamic_table();
	$load_framework = new easy_php_js();    
	echo $load_framework->js_libs();
	echo $load_framework->js_dynamic_table();
			
	// Set up footer and text on footer
	html_footer("2021 test page!");
?>