<?php
	/*
		JS__template
		
		@RobertC 8/5/2020
		
		function to pass JavaScript code
		
		It also calls the jQuery library

	*/
	
	class easy_php_js {
		
			public function js_libs(){
				echo'
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
				';
			}
			
			public function js_gui(){
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
			
			public function js_ajax(){
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
			
			public function js_comment(){
				// Add AJAX call to this to store/load comments from your database!
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
									$("#history_comment_container").append("<div id=\"" + track_id + "\">" + comment_text + "<br><div class=\"time_stamp_com\"> Posted on: <br> [" + time_stamp + " ]</div><br> <button type=\"button\" id=\"delete_comment_btn_" + track_id + "\" class=\"child_btn_delete\"></button> <hr></div>");
									$("#comment_posted_text").remove();
									
									// Remove comment button functionality
									$("#delete_comment_btn_" + track_id + "").on("click", function(){
										$(this).closest("div").slideUp("slow");					
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
			
			public function js_dynamic_table(){
				/*
					This will call the php ---> post_test_dynamic.php
				*/
				
				echo'
					<script>
						let url_value_2 = "post_test_dynamic.php";
						
						$.post(url_value_2)
						.done(function(data){
							
							// Prepare HTML table
							$("#container_2").html("<table >" +
												   "  <tr>" +
												   "	<th>First Name</th>" +
												   " 	<th>Last Name</th>" +
												   " 	<th>Age</th>" +
												   "  </tr>");
							
							let table_data = JSON.parse(data);
						
							for(let i = 0; i < data.length; i++){
								
								if(typeof(table_data[i]) == "undefined"){
								  
								}
								else{
									$("tr:last").after("<tr>" +
													   "  <td>" + table_data[i].first_name + "</td>" +
													   "  <td>" + table_data[i].last_name + "</td>" +
													   "  <td>" + table_data[i].age + "</td>" +
													   "<tr>");
								}
								
							}
							
							// Close table
							$("#container_2").append("</table>");
							
							// Make table sortable!
							$("th").on("click", function(){
								let table = $(this).parents("table").eq(0)
								let rows = table.find("tr:gt(0)").toArray().sort(comparer($(this).index()))
								this.asc = !this.asc
								if (!this.asc){
									rows = rows.reverse()
								}
								for (let i = 0; i < rows.length; i++){
									table.append(rows[i])
								}
							})
						   function comparer(index){
								return function(a, b){
									let valA = getCellValue(a, index)
									let	valB = getCellValue(b, index)
									return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.toString().localeCompare(valB)
								}
							}
							function getCellValue(row, index){ 
								return $(row).children("td").eq(index).text()
							}
							
						})
						.fail(function(error){
							// Error handling
							console.log(error);
						});
						
					</script>';
			}
	}
	
?>