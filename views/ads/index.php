
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
                <?php if(!empty($allUsersAds)){ foreach($allUsersAds as $ad) : ?>
                <div class="imgContainer">
                    <h4><?= $ad->title ?></h4>
                    <hr>
                    <img class="thumbnailImages" src=<?= $ad->img ?>>
                
                    <p>Description : <?= $ad->description ?></p>
                    <p>Created : <?= $ad->date_create ?></p>
                    <p>Categories : <?= $ad->categories ?></p>
                    <a href="/Ads/Edit?title=<?php 
                    $title = explode(" ", $ad->title);
                    $title = implode("_",$title);
                    echo $title; ?>"><button class="btn-primary btn">Edit</button></a>
                    <br><br>
                    
                </div>
                <?php endforeach; } ?>
        </div>

    </section>

</div>