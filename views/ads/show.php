<!--Page for single advertisement -->

<div id='singleAdCentering'>
	<?php $currentAd = MODEL::findAdById((int)$_GET['id']); ?>
	<?php $imgArray = explode(",",$currentAd['img']); ?>
		<div class="imgContainerShow">
			<h4><?= $currentAd['title'] ?></h4>
			<hr>
			<p>Description : <?= $currentAd['description'] ?></p>
			<p>Created : <?= $currentAd['date_create'] ?></p>
			<p>Categories :<?= $currentAd['categories'] ?></p>
			<div>
				<img class="thumbnailImages2" src=<?= $imgArray[0]; ?>>
	            <img class="thumbnailImages2" src=<?php if(!empty($imgArray[1])){echo $imgArray[1];}; ?>>
	            <img class="thumbnailImages2" src=<?php if(!empty($imgArray[2])){echo $imgArray[2];}; ?>>
	            <img class="thumbnailImages2" src=<?php if(!empty($imgArray[3])){echo $imgArray[3];}; ?>>
			
            </div><br><br>
			<?php if($currentAd['username'] == $_SESSION['IS_LOGGED_IN']): ?>
			<a href="/Ads/Edit?id=<?=$_GET['id']?>"><button class="btn-primary btn">Edit</button></a>
			 <form method="POST"> 
				<button class="btn" type="submit" name="delete">DELETE</button>
			</form>
			<?php endif; ?>
			<br><br>
		</div>

	<div>





	
