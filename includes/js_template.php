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
				$("#container_1").hide();
				$("#container_1").fadeIn(2000);
				
				$("#container_2").hide();
				$("#container_2").fadeIn(2000);
				
			</script>
		';
	}
	
	function js_ajax(){
		echo'
			<script>
			
				$("#submit_btn").on("click", function(){
			     
				    var url_value = "post_url.php";
					
					var params = {
						value_one: "test_one",
						value_two: "test_two"
					}

					$.post(url_value, params)
					.done(function(data){
						// Append to HTML element
						$("body").append(data);
				
					})
					.fail(function(error){
						// Error handling
						alert(error);
					});
						
				});		
			
			</script>
		';
	}
	
	function js_comment(){
		echo'
			<script>
			
				$("#comment_btn").on("click", function(){
					
					$("#text_comment_container").html("Comment Posted!");
					
					setTimeout(function(){
						
						$("#text_comment_container").html("Testing.....");
						
					}, 2500);
					
				});	
				
			</script>
		';
	}
?>