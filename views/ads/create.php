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
				<label for="img">Image Hosting Filestack</label>
				<input type="text" name="img" id="img" class="form-control"><br>
				<a id="filestackButton" class="btn btn-secondary">Use Filestack Image Hosting</a>
			</div>
			<div class="form-group">
				<label for="categories">Categories</label>
				<input type="textarea" name="categories" id="categories" class="form-control" required>
				<button class="btn btn-primary" type="submit">Submit</button>
			</div>
		</form>
	</div>
</div>