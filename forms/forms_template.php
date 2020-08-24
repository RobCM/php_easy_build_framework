<?php
	/*
		FORMS__template
		
		@RobertC 8/23/2020
		
		functions to pass forms templates code

	*/
	
	function form_1(){
		
		// Form HTML
		$form_one = '
				<form>
				  <label for="first_name">First name:</label><br>
				  <input type="text" id="first_name" name="first_name"><br>
				  <label for="last_name">Last name:</label><br>
				  <input type="text" id="last_name" name="last_name"><br><br>
				  <input type="submit" id="submit_btn" value="Submit">
				</form> 
		';
		
		return $form_one;
		
	}
	
	
?>