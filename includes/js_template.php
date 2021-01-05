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
		
		$date = date("m/d/Y");
		$time = date("h:i:sa");
		$timestamp = $date." at ".$time;
		
		echo'
			<script>
			
				$("#comment_btn").on("click", function(){
					// comment data
					var comment_text = $("#text_comment").val().trim();
					
					if(comment_text.length > 0){
						
						$("#text_comment_container").hide();
						$("#main_comment_container").append("<div id=\"comment_posted_text\">Comment Posted!</div>");
						
						setTimeout(function(){
							
							$("#text_comment_container").show();
							$("#history_comment_container").append(comment_text + "<br>[ Posted on: '.$timestamp.' ]<br><hr>");
							$("#comment_posted_text").remove();
							
						}, 2200);
						
					}
					else{
						
						$("#text_comment_container").hide();
						$("#main_comment_container").append("<div id=\"comment_posted_text\">No comment to post!</div>");
						
						setTimeout(function(){
							
							$("#text_comment_container").show();
							$("#comment_posted_text").remove();
							
						}, 2200);
					}
					
				});	
				
			</script>
		';
	}
?>