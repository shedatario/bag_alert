<?php require_once '../partials/template.php'  ?>


<?php function get_page_content(){

}  ?>


<?php global $conn;  ?>


<div class="container mt-5">
	<div class="row">
		<div class="col-sm offset-sm-2">
			<form action="../controllers/process_add_item.php" method= "POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for = "name">Name:</label>
					<input type="text" name="name" class="form-control" id = "name" required>
				</div>
				<div class="form-group">
					<label for = "price">Price:</label>
					<input type="text" name="price" class="form-control" id = "price" min="1" required>
				</div>
				<div class="form-group">
					<label for = "description">Description:</label>
					<textarea type="text" name="description" class="form-control col-8" id = rows = "5" name = "description" required></textarea> 
				</div>
				<div class="form-group">
					<label for = "name">Category:</label>
					<select type="text" class="form-control col-8" name = "category_id" id = "categories" required>
				</div>
					<?php
					$sql = "SELECT * FROM categories";
					$categories = mysqli_query($conn, $sql);
					foreach ($categories as $category) {
						//extract is another way of getting data. It transforms the columns into variables
						extract($category);
						echo "<option value = '$id'>$name</option>";
					}

					?>
				</select>
			</div>

			<div class="form-group">
				<label for = "image">Image:</label>
				<input type="file" name="image" class="form-control" name="image" required>
			</div>

			<button type="submit" class="btn btn-block btn-primary">Add New Item</button>
				

			</form> <!-- end form -->
			
		</div> <!-- end 8 col -->
	</div> <!-- end row --> 
</div> <!-- end container -->