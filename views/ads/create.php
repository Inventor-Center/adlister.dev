<!--Page for creating new advertisement listings-->
<div class="container" id="createAdWrap">
	<h1>Create an Ad</h1>

	<div id="formWrapper" class="col-md-4 col-md-offset-4">
		<form method="POST">
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" id="title" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="description">Description</label>
				<input type="text" name="description" id="description" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="price">Price Per Unit</label>
				<input type="text" name="price" id="price" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="img">Image Hosting Filestack</label>
				<input type="text" name="img" id="img" class="form-control"><br>
				<a id="filestackButton" class="btn btn-secondary">Use Filestack Image Hosting</a>
			</div>
				<label for"categories">Category</label>
  				<select name="categories">
    				<option name="categories" value="Entertainment">Entertainment</option>
    				<option name="categories" value="Technology">Technology</option>
    				<option name="categories" value="Science">Science</option>
    				<option name="categories" value="Fitness">Fitness</option>
    				<option name="categories" value="Miscellaneous">Miscellaneous</option>
  				</select>
				<button class="btn btn-primary" type="submit">Submit</button>
		</form>
	</div>
</div>