<?php require_once "../partials/template.php"  ?>


<?php function get_page_content() {  ?>

	<div class="container"> <!-- start container -->
		<div class="jumbotron bg-dark text-light text-center mt-5">
			<h4 class="text-center">Login</h4>
		</div> <!-- end jumbotron -->
		
		<form>
			<div class="form-group">
				<label for = "username"> Username: </label>
				<input type="text" id = "username" name="username" class="form-control" placeholder="Enter username">
				<span class="validation"></span>
			</div>

			<div class="form-group">
				<label for="password"> Password: </label>
				<input type="password" id = "password" name="password" class="form-control" placeholder="Enter password">
				<span class="validation"></span>
			</div>
		</form>	<!-- end form -->

		<div class="text-center py-4">
			<a href="./register.php" class="btn btn-secondary"> Register </a>
			<button type = "submit" class="btn btn-primary" id="login"> Login </button>	
		</div>
			
	</div><!--  end container -->

	



<?php }  ?>