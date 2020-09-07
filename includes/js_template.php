<?php
	/*
		JS__template
		
		@RobertC 8/5/2020
		
		function to pass JavaScript code
		
		It also calls the jQuery library

	*/
	function js_libs(){
		echo'
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		';
	}
	
	function js_gui(){
		echo '
			<script>
			
				// Basic animation 
				$("form").hide();
				$("form").fadeIn(2000);
				
			</script>
		';
	}
	
	function js_ajax(){
		echo'
			<script>
			
				$("#submit_btn").on("click", function(){
			
					// AJAX 
					var url_value = "post_url.php";
					
					$.ajax({
						url: url_value,
						type: "POST",
						data: {
							value_one: "test_one",
							value_two: "test_two"
						},
						dataType: "json",
						success: function (data){
							// Append to HTML element
							$("container_1").append(data);
						},
						error: function (error){
							// Append to HTML element
							$("container_1").append("Error ${error}");
						}
					});
					
				});
			
			</script>
		';
	}
?>