<!--Page that includes the form to edit an existing ad-->
<?php 
	if(isset($_POST['guesswhat'])){
		$newAd = new USER;
		$newAd->id = (int)$_GET['id'];
		$newAd->title = $_SESSION['title_edit']; 
		$newAd->description	= $_SESSION['description_edit'];
		$newAd->img = $_SESSION['img_edit'];
		$newAd->categories = $_SESSION['catagories_edit'];
		$newAd->save();
	} 
	else if(isset($_POST['title'])){
		$_SESSION['title_edit'] = $_POST['title'];
	}
	else if(isset($_POST['img'])){
		$_SESSION['img_edit'] = $_POST['img'];
	}
	else if(isset($_POST['description'])){
		$_SESSION['description_edit'] = $_POST['description'];
	}
	else if(isset($_POST['categories'])){
		$_SESSION['catagories_edit'] = $_POST['categories'];
	} 
		var_dump($_SESSION);
		?>

<h1>this is the edit item page</h1>

<div id="formWrapper" class="col-md-4">
	<form method="POST" >
<?php $currentAd = MODEL::findAdById((int)$_GET['id']); 
?>
					<?php if (!isset($_POST['submitted'])) { ?> 
                    <h5><?php 
                    if(isset($_SESSION['title_edit'])){
                		$display = $_SESSION['title_edit'];
                	}
                	else{
                    	$display = $currentAd['title'];
                	}
                	echo $display;
                     ?><input class="ButtonSubmit" type="Submit" name="Submit" id="Submit" value="Edit"/><input type="hidden" name="submitted" id="submitted" value="true"/></h5>
                    <?php } 
                    else { ?>
		 <div class="form-group">
			<label for="title">Title</label>
			<input type="text" name="title" id="title" class="form-control" required value = "<?= $currentAd['title'] ?>">
		</div> 
		<?php } ?>
		</div> 
	</form>
	<div id="formWrapper" class="col-md-4">
	<form method="POST">
					<?php if(!is_null($currentAd['img'])){
						if (!isset($_POST['submitted1'])) { ?> 
                    	<img src=<?= $currentAd['img']?>><input class="ButtonSubmit" type="Submit" name="Submit" id="Submit" value="Edit"/><input type="hidden" name="submitted1" id="submitted1" value="true"/>
                    	<?php }else { ?>
		<div class="form-group">
			<label for="img">Image</label>
			<input type="text" name="img" id="img" class="form-control">
		</div>
		<?php }} ?>
		</div> 
	</form>
	<div id="formWrapper" class="col-md-4">
	<form method="POST">
					<?php if (!isset($_POST['submitted2'])) { ?> 
                    <ul>
                    <li><?php 
                    if(isset($_SESSION['description_edit'])){
                		$display = $_SESSION['description_edit'];
                	}
                	else{
                    	$display = $currentAd['description'];
                	}
                	echo $display;
                     ?><input class="ButtonSubmit" type="Submit" name="Submit" id="Submit" value="Edit"/><input type="hidden" name="submitted2" id="submitted2" value="true"/></li>
                    	<?php }else { ?>
		<div class="form-group">
			<label for="description">Description</label>
			<input type="text" name="description" id="description" class="form-control" required value = "<?= $currentAd['description'] ?>">
		</div>
		<?php } ?>
		</div> 
	</form>
	<div id="formWrapper" class="col-md-4">
	<form method="POST" >
                    <?php if (!isset($_POST['submitted3'])) { ?> 
                    <li><?php 
                    if(isset($_SESSION['categories_edit'])){
                		$display = $_SESSION['categories_edit'];
                	}
                	else{
                    	$display = $currentAd['categories'];
                	}
                	echo $display;
                     ?><input class="ButtonSubmit" type="Submit" name="Submit" id="Submit" value="Edit"/><input type="hidden" name="submitted3" id="submitted3" value="true"/></li>
                    <?php }else { ?>
		<div class="form-group">
			<label for="categories">Categories</label>

			<input type="textarea" name="categories" id="categories" class="form-control" required value = "<?= $currentAd['categories'] ?>"> 

		</div>
		<?php } ?>
		</div> 
	</form>

                    <li><?= $currentAd['date_create'] ?></li>
                    </ul>
                    <form method="POST"> 
			<button class="btn" type="submit" name="guesswhat">Submit</button>
			</form>

</div>