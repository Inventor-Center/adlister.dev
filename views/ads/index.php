
<div class="container">

    <section id="welcome">

        <div class="row">

            <div class="col-xs-12">

                <h1 class="text-center">All Users Ads</h1>

            </div>

        </div>

    </section>

    <section id="features">

        <div class="row">

            <h3 class="section-title">Your Ads</h3>
            <!-- Placeholder for featured items.-->
               <!--  <?php if(!empty($allUsersAds)){ foreach($allUsersAds as $ad) : ?>
                <div class="imgContainer">
                    <h4><?= $ad->title ?></h4>
                    <hr>
                    <img class="thumbnailImages" src=<?= $ad->img ?>>
                
                    <p>Description : <?= $ad->description ?></p>
                    <p>Created : <?= $ad->date_create ?></p>
                    <p>Categories : <?= $ad->categories ?></p>

                    <a href="/Ads/Edit?id=<?= $ad->id ?>"><button class="btn-primary btn">Edit</button></a>

                    <br><br>
                    
                </div>
                <?php endforeach; } ?> -->

                <?php foreach($allUsersAds as $ad) : ?>
                <?php $imgArray = explode(",",$ad->img);
                var_dump($imgArray); ?>
                <a href="/Ads/Show?id=<?= $ad->id ?>">
                <div class="imgContainer">
                    <h4><?= $ad->title ?></h4>
                    <hr>
                    <img class="thumbnailImages" src=<?= $imgArray[0]; ?>><br>
                    <img class="thumbnailImagesMini" src=<?php if(!empty($imgArray[1])){echo $imgArray[1];}; ?>>
                    <img class="thumbnailImagesMini" src=<?php if(!empty($imgArray[2])){echo $imgArray[2];}; ?>>
                    <img class="thumbnailImagesMini" src=<?php if(!empty($imgArray[3])){echo $imgArray[3];}; ?>>
                    <img class="thumbnailImagesMini" src=<?php if(!empty($imgArray[4])){echo $imgArray[4];}; ?>>
                
                    <p><?= $ad->description ?></p>
                    <p>Created : <?= $ad->date_create ?></p>
                    <p>Categories : <?= $ad->categories ?></p>
                    <br><br>
                    
                </div>
                </a>
                <?php endforeach; ?>
        </div>

    </section>

</div>