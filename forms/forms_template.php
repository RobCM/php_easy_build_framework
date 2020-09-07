<?php
	/*
		FORMS__template
		
		@RobertC 8/23/2020
		
		functions to pass forms templates code

	*/
	
	function form_1(){
		
		// Form HTML
		$form_1 = '
				<form>
				  <label for="first_name">First name:</label><br>
				  <input type="text" id="first_name" name="first_name"><br><br>
				  <label for="last_name">Last name:</label><br>
				  <input type="text" id="last_name" name="last_name"><br><br>
				  <label for="last_name">Password:</label><br>
				  <input type="password" id="user_pass" name="user_pass"><br><br>
				  <button type="button" id="submit_btn">Submit</button> 
				</form> 
		';
		
		return $form_1;
		
	}
	
	function form_2(){
		
		// Form HTML
		$form_2 = '
				<form>
				  <label for="first_name">First name:</label><br>
				  <input type="text" id="first_name" name="first_name"><br><br>
				  <label for="last_name">Last name:</label><br>
				  <input type="text" id="last_name" name="last_name"><br><br>
				  <label for="phone">Phone number:</label><br>
				  <input type="text" id="phone" name="phone"><br><br>
				  <label for="last_name">Password:</label><br>
				  <input type="password" id="user_pass" name="user_pass"><br><br>
				  <button type="button" id="submit_btn">Submit</button> 
				</form> 
		';
		
		return $form_2;
		
	}
	
	
?>