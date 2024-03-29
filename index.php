<?php
	// To block PHP errors comment out below line else leave for testing purposes!
	error_reporting(E_ERROR);
	
	// Calling includes
	include './includes/html_header.php';
	include './includes/html_footer.php';
	include './includes/css_template.php';
	include './includes/js_template.php';
	include './db/db_connection.php';
	include './forms/forms_template.php';
	include './comments_box/comments_template.php';
	include './calendar/calendar_template.php';
	
	// Set up header and page title
	$load_framework_header = new easy_php_header();
	echo $load_framework_header->html_header("Test Page");
	
	// Call css template
	$load_framework_css = new easy_php_css();
	echo $load_framework_css->css_template();
	
	// Example body!
	$load_framework_form = new easy_php_form();
	$load_framework_comments = new easy_php_comments();
	
	echo '
			<div class="master_container">	
				<div id="container_1">
					'.$load_framework_form->form_2().' 
				</div>
				<div id="container_2">
					<br>
					'.$load_framework_comments->comments_1().' 
				</div>';	
	
	// Testing db function (MySQL)
	//conn_mysql();
	
	// Close the master_container div
	echo '
			</div>';		
	
	// Call js functions at the end so it can function after all html components have been load!
	$load_framework_js = new easy_php_js();    
	echo $load_framework_js->js_libs();
	echo $load_framework_js->js_gui();
	echo $load_framework_js->js_ajax();
	echo $load_framework_js->js_comment();
	//echo $load_framework_js->js_dynamic_table();
	
	
	// Set up footer and text on footer
	$load_framework_footer = new easy_php_footer();
	echo $load_framework_footer->html_footer("2021 test page!");
	
?>
