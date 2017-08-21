<!-- <div class="container">

    <section id="welcome">

        <div class="row">

            <div class="col-xs-12">

                <h1 class="text-center">All Ads</h1>

            </div>

        </div>

    </section>

    <section id="features">

        <div class="row">

            <h3 class="section-title">Featured Items</h3>
                <?php foreach($allAds as $ad) : ?>
                    <a href="/Ads/Show?id=<?= $ad->id ?>">
                    <div class="col col-xs-4 ads-background">
                    <h5 style="color:black;" ="black"><?= $ad->title ?></h5>
                    <img src=<?= $ad->img?>>
                    <ul>
                    <li><?= $ad->description ?></li>
                    <li><?= $ad->date_create ?></li>
                    </ul>
                    </div></a>
                <?php endforeach ?>
        </div>

    </section>

</div> -->

<div class="container">

    <section id="welcome">

        <div class="row">

            <div class="col-xs-12">

                <h1 class="text-center">All Ads</h1>
                <hr>
            </div>

        </div>

    </section>

    <section id="features">

        <div class="row">

            <!-- Placeholder for featured items.-->
                <?php 
                if(!empty($allAds)){
                foreach($allAds as $ad) : ?>
                <a href="/Ads/Show?id=<?= $ad->id ?>">
                <div class="imgContainer">
                    <h4><?= $ad->title ?></h4>
                    <hr>
                    <img class="thumbnailImages" src=<?= $ad->img ?>>
                
                    <p>Description : <?= $ad->description ?></p>
                    <p>Created : <?= $ad->date_create ?></p>
                    <p>Categories : <?= $ad->categories ?></p>
                    <br><br>
                    
                </div>
                </a>
                <?php endforeach; } ?>
        </div>

    </section>

</div>