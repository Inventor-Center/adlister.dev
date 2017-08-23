

<div class="container">

    <div class="row">

        <div class="col-xs-12">

            <h1 class="text-center">All Inventions</h1>
            <hr>
        </div>

    </div>

    <div class="row">

        <div class="col col-sm-2">
            <form>
                <button id="entBut" class="categoryButtons form-control"><a href="/AllAds">All Ads</a></button>
                <button name="category" value="Entertainment" class="categoryButtons form-control" >Entertainment</button>
                <button name="category" value="Technology" id="" class="categoryButtons form-control">Technology</button>
                <button name="category" value="Science" id="" class="categoryButtons form-control">Science</button>
                <button name="category" value="Fitness" id="" class="categoryButtons form-control">Fitness</button>
                <button name="category" value="miscellaneous" id="miscButton" class="categoryButtons form-control">miscellaneous</button>
            </form>
        </div>
        <div class="col col-sm-10">
            <?php foreach($allAds as $ad) : ?>
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
                    <p><?= $ad->description ?></p>
                    <p>Created : <?= $ad->date_create ?></p>
                    <p>Categories : <?= $ad->categories ?></p>
                    <br><br>
                </div>
                
            </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>
    








