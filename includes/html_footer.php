<?php
	/*
		HTML__Footer
		
		@RobertC 8/4/2020
		
		pass the text as a parameter on this function!

	*/
	class easy_php_footer{
		
		public function html_footer($page_footer_text){
			echo '
						<div class="page_footer_box">
							<center>'.$page_footer_text.'</center>
						</div>
					</body>
				</html>
				
			';
		}
		
	}
?>