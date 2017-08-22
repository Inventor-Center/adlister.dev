<!--Page for single advertisement -->

<!-- <?php $currentAd = MODEL::findAdById((int)$_GET['id']);?>
                    <h5><?= $currentAd['title'] ?></h5>
                    <img src=<?= $currentAd['img']?>>
                    <ul>
                    <li><?= $currentAd['description'] ?></li>
                    <li><?= $currentAd['date_create'] ?></li>
                    </ul>
 -->

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
