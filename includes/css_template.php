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
					background-color: #bdf4f2;
				}
				.master_container {
					display: flex;
					width: 50%;
					margin: auto;
					border: 1px solid black;
					padding: 10px;
				}
				#container_1 {
					flex: 1;
					border: 1px solid black;
					padding: 5px;
				}
				#container_2 {
					flex: 2;
					border: 1px solid black;
					padding: 5px;
				}
			</style>
		';
	}
?>