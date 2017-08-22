<!--Page for single advertisement -->

<div id='singleAdCentering'>
	<?php $currentAd = MODEL::findAdById((int)$_GET['id']); ?>
	<?php $imgArray = explode(",",$currentAd['img']); ?>
		<div class="imgContainerShow">
			<h4><?= $currentAd['title'] ?></h4>
			<hr>
			<div>
			<img class="thumbnailImages" src=<?= $imgArray[0]; ?>>
            <img class="thumbnailImages" src=<?php if(!empty($imgArray[1])){echo $imgArray[1];}; ?>>
            <img class="thumbnailImages" src=<?php if(!empty($imgArray[2])){echo $imgArray[2];}; ?>>
            <img class="thumbnailImages" src=<?php if(!empty($imgArray[3])){echo $imgArray[3];}; ?>>
            </div><br>
			<p>Description : <?= $currentAd['description'] ?></p>
			<p>Created : <?= $currentAd['date_create'] ?></p>
			<p>Categories :<?= $currentAd['categories'] ?></p>
			<!-- <a href="/Ads/Edit?id=<?= $ad->id ?>">"><button class="btn-primary btn">Edit</button></a> -->
			<br><br>
		</div>

	<div>





	
