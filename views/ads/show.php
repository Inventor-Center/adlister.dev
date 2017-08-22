<!--Page for single advertisement -->

<div id='singleAdCentering'>
	<?php $currentAd = MODEL::findAdById((int)$_GET['id']); ?>
		<div class="imgContainer">
			<h4><?= $currentAd['title'] ?></h4>
			<hr>
			<img class="thumbnailImages" src=<?= $currentAd['img']?>>

			<p>Description : <?= $currentAd['description'] ?></p>
			<p>Created : <?= $currentAd['date_create'] ?></p>
			<p>Categories :<?= $currentAd['categories'] ?></p>
			<!-- <a href="/Ads/Edit?id=<?= $ad->id ?>">"><button class="btn-primary btn">Edit</button></a> -->
			<br><br>
		</div>

	<div>
