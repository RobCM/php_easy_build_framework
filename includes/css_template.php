<?php
	/*
		CSS__template
		
		@RobertC 8/6/2020
		
		function to pass css code
		
		Using display flex which will put the div's inside of the master container	
		next to each other without the need of a table structure!

	*/
	function css_template(){
		echo '
			<style>
				body {
					background-color: white;
				}
				.master_container {
					display: flex;
					width: 50%;
					height: 700px;
					margin: auto;
					background-color: #ceaa8b;
					padding: 10px;
					border-radius: 15px;
					box-shadow: 9px 14px 6px 0px rgba(0,0,0,0.38);
				}
				.title_image {
					width: 50%;
					margin: auto;
					height: 150px;
				}
				#container_1 {
					flex: 1;
					padding: 5px;
					margin-top: 20px;
				}
				#container_2 {
					flex: 2;
					padding: 5px;
				}
				form {
					padding: 10px;
					border-radius: 15px;
					border: 1px solid #6f6e6e;
					background-image:
					linear-gradient(
					  to top right, 
					  #ceaa8b, #f06d06
					);
				}
				#submit_btn {
					cursor: pointer;
					height: 35px;
					width: 80px;
					margin-left: 240px;
				}
				input {
					border-radius: 5px;
					border: none;
					height: 25px;
					width: 155px;
				}
				#country_list {
					border-radius: 8px;
					height: 30px;
					width: 155px;
					border: none;
					margin-left: 10px;
				}
				#state_list {
					border-radius: 8px;
					height: 30px;
					width: 60px;
					border: none;
				}
				.radio_btn {
					width: 10px;
					height: 1px;
				}
				#main_comment_container {
					width: 300px;
					border-radius: 15px;
					border: 1px solid #6f6e6e;
					padding: 10px;
					background-image:
					linear-gradient(
					  to top right, 
					  #ceaa8b, #f06d06
					);
				}
				textarea {
				  resize: none;
				}
				#text_comment {
					width: 300px;
				}
				#comment_btn {
					margin-left: 220px;
				}
				#history_comment_container {
					padding: 10px;
					height: 200px;
					background-color: #ceaa8b;
				}
				#comment_posted_text {
					position: absolute;
					top: 50%;
					left: 45%;
					width: 250px;
					height: 40px;
					border-radius: 15px;
					border: 1px solid #6f6e6e;
					background-color: #a2a298;
					background-image:
					linear-gradient(
					  to top right, 
					  #ceaa8b, #f06d06
					);
				}
				.time_stamp_com {
					padding: 5px;
					border-radius: 10px;
					background-color: #a2a298;
					color: white;
					background-image:
					linear-gradient(
					  to top right, 
					  #ceaa8b, #f06d06
					);
				}
				/* For smart phone screens */
				@media only screen and (max-width: 500px) {
					.master_container {
					  flex-direction: column;
					  border: none;
					  width: 100%;
					  height: 800px;
					}
				}
			</style>
		';
	}
?>