<?php
	/*
		JS__template
		
		@RobertC 8/5/2020
		
		function to pass JavaScript code
		
		It also calls the jQuery library

	*/
	function js_template(){
		echo '
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<script>
				// Basic animation 
				$("form").hide();
				$("form").fadeIn(2000);
			</script>
		';
	}
?>