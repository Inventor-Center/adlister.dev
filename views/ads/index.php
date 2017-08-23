
<div class="container">

    <section id="welcome">

        <div class="row">

            <div class="col-xs-12">

                <h1 class="text-center"> <?php if(empty($allUsersAds)){
                    echo "No Ads";
                }
                else{
                    echo "Your Active Ads";
                    }; ?> </h1>
                
                <hr>

            </div>

        </div>

    </section>

    <section id="features">

        <div class="row">

                <?php foreach($allUsersAds as $ad) : ?>
                <?php $imgArray = explode(",",$ad->img); ?>
                <a href="/Ads/Show?id=<?= $ad->id ?>">
                
                <div class="imgContainer">
                <div id="tDivider1">
                    <h4><?= $ad->title ?></h4>
                    <hr>
                    <img class="thumbnailImages" src=<?= $imgArray[0]; ?>><br>
                    <img class="thumbnailImagesMini" src=<?php if(!empty($imgArray[1])){echo $imgArray[1];}; ?>>
                    <img class="thumbnailImagesMini" src=<?php if(!empty($imgArray[2])){echo $imgArray[2];}; ?>>
                    <img class="thumbnailImagesMini" src=<?php if(!empty($imgArray[3])){echo $imgArray[3];}; ?>>
                </div>
                <div id="tDivider2">
                    <p id="topP"><?= $ad->description ?></p>
                    <p>Created : <?= $ad->date_create ?></p>
                    <p>Categories : <?= $ad->categories ?></p>
                    <br><br>
                </div>
                </div>
                </a>
                <?php endforeach; ?>
        </div>

    </section>

</div>