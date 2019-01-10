<?php  require_once '../partials/template.php'?>


<?php function get_page_content() { ?>



<div class="container-fluid mt-2 text-center text-light">
	<div class="jumbotron bg-dark">
		<h2>Register</h2>
	</div>
</div>

<div class="container">
	<form method="" action="">
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label for = "firstname"> First Name </label>
					<input type="text" id = "firstname" name="firstname" class="form-control" placeholder="Enter first name">
				</div>

				<div class="form-group">
					<label for = "lastname"> Last Name </label>
					<input type="text" id = "lastname" name="lastname" class="form-control" placeholder="Enter last name">
				</div>

				<div class="form-group">
					<label for = "email">Email</label>
					<input type="text" id="email" name="email" class="form-control" placeholder="Enter email address">
				</div>
			
				<div class="form-group">
					<label for="address">Address</label>
					<input type="text" id = "address" name="address" class="form-control" placeholder="Enter home address">
				</div>
			</div>

			<div class="col-sm-6">
				<div class="form-group">
					<label for = "username"> Username </label>
					<input type="text" id = "username" name="username" class="form-control" placeholder="Enter username">
				</div>

				<div class="form-group">
					<label for = "password"> Password </label>
					<input type="text" id = "password" name="password" class="form-control" placeholder="Enter password">
				</div>

				<div class="form-group">
					<label for = "confirm_password"> Confirm Password </label>
					<input type="text" id = "confirm_password" name="confirm_password" class="form-control" placeholder="Confirm password">
				</div>

			</div>
			
			<div class="text-center">
				<button class="bg-dark text-light">Login</button>
				<button class="bg-primary text-light">Register</button>	
			</div>
		</div>

		
		
		
	</form>	
</div>





<?php   } ?>
