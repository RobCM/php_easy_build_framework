<?php
	/*
		HTML__Header
		
		@RobertC 8/4/2020
		
		pass the title as a parameter on this function!

	*/
	function html_header($page_title){
		echo '
			<!DOCTYPE html>
			<html>
				<head>
				<title>'.$page_title.'</title>
				</head>
				<body>
		'
		
		// Title image
		echo '
			<div class="title_image">
				
				
			</div>
		
		';
	}
?>