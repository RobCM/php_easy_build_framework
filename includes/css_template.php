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
					background-color: #c7d4e4;
					padding: 10px;
					border-radius: 15px;
					box-shadow: 9px 14px 6px 0px rgba(0,0,0,0.38);
				}
				.title_image {
					width: 50%;
					margin: auto;
					height: 100px;
					border-radius: 15px;
					padding: 15px;
				}
				#the_title_img {
					width: 100%;
					height: 150px;
				}
				#container_1 {
					flex: 1;
					padding: 5px;
				}
				#container_2 {
					flex: 2;
					padding: 5px;
				}
				form {
					padding: 10px;
					border-radius: 15px;
					border: 1px solid #6f6e6e;
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
				}
				#comment_posted_text {
					position: absolute;
					margin: auto;
					width: 100%;
					height: 100%;
				}
			</style>
		';
	}
?>