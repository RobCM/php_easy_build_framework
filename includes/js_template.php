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
			
				$("input").on("click", function(){
					// Clean screen if message is on the screen (warnings)
					$("#comment_posted_text").remove();
				});
			
				$("#submit_btn").on("click", function(){
				    let url_value = "post_url.php";
					
					let params = {
						value_one: "test_one",
						value_two: "test_two"
					}

					$.post(url_value, params)
					.done(function(data){
						// Append to HTML element
						$("body").append("<div id=\"comment_posted_text\"><center>" + data + "</center></div>");
					})
					.fail(function(error){
						// Error handling
						console.log(error);
					});
						
				});		
			
			</script>
		';
	}
	
	function js_comment(){
		
		echo'
			<script>
			
				// Logic to load comments from DB using AJAX!
				let parameter_to_request_data = { parameter: \'value\' };

				$.post( "URL OF API OR PHP THAT WILL RETURN THE DATA", parameter_to_request_data)
				.done(function(load_data){
					// load data to $("#history_comment_container")	
				})
				.fail(function(){
				   console.log("ERROR_LOADING!");
				})
			
				$("#comment_btn").on("click", function(){
					// comment data
					let comment_text = $("#text_comment").val().trim();
					// Timestamp
					let time_stamp = new Date();
					time_stamp = time_stamp.toLocaleDateString() + " " + time_stamp.getHours() + ":" + time_stamp.getMinutes() + ":" + time_stamp.getSeconds();
					
					if(comment_text.length > 0){
						
						// ID methodology for each comment posted!
						let part_1_track_id =  Math.floor(Math.random() * (1000 - 100 + 1) ) + 100;
						let date = new Date();
						let part_2_track_id = date.getMilliseconds();
						let track_id = part_1_track_id + "_" + part_2_track_id;
						
						$("#text_comment_container").hide();
						$("body").prepend("<div id=\"comment_posted_text\"><center> Comment Posted! </center></div>");
						
						setTimeout(function(){
							
							$("#text_comment_container").show();
							$("#history_comment_container").css("overflow", "auto");
							$("#history_comment_container").append("<div id=\"" + track_id + "\">" + comment_text + "<br><div class=\"time_stamp_com\"> Posted on: <br> [" + time_stamp + " ]</div><br> <button type=\"button\" id=\"delete_comment_btn_" + track_id + "\">Delete</button> <hr></div>");
							$("#comment_posted_text").remove();
							
							// Remove comment button functionality
							$("#delete_comment_btn_" + track_id + "").on("click", function(){
								$(this).closest("div").remove();
							});	
							
						}, 2000);
						
					}
					else{
						
						$("body").prepend("<div id=\"comment_posted_text\"><center> No comment to posted! </center></div>");
						$("#comment_posted_text").css("background-color", "#ec775f");
						
						setTimeout(function(){
							
							$("#text_comment_container").show();
							$("#comment_posted_text").remove();
							
						}, 2000);
						
					}
					
				});	
				
				
			</script>
		';
	}
?>