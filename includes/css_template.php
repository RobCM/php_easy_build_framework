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
					background-color: #f2f3b7;
				}
				.master_container {
					display: flex;
					width: 50%;
					height: 400px;
					margin: auto;
					border: 1px solid black;
					padding: 10px;
					border-radius: 15px;
					box-shadow: 9px 14px 6px 0px rgba(0,0,0,0.38);
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
					border: 1px solid black;
				}
				#submit_btn {
					cursor: pointer;
				}
			</style>
		';
	}
?>