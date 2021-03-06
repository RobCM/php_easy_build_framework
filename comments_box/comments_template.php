<?php
	/*
		COMMENTS__template
		
		@RobertC 11/16/2020
		
		functions to pass comments templates code

	*/
	
	function comments_1(){
		
		// HTML
		$comments_1 = '
				<div id="main_comment_container">
					<div id="text_comment_container">
						<center>Comments</center>
						<textarea id="text_comment" rows="10" cols="6">
						</textarea>
						<button type="button" id="comment_btn">Comment</button> 
					</div>
					<br>
					<div id="history_comment_container">
					</div>
				</div>
		';
		
		return $comments_1;
		
	}
	
?>