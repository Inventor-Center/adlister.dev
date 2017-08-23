<div class="container">

    <section id="login">

        <div class="row">

            <h1 class="section-title">Edit Ad</h1>

            <div class="col-md-6 col-md-offset-3">

                <p>Please fill out the information below so we can update your Ad.</p>
                <?php if (isset($_SESSION['ERROR_MESSAGE'])) : ?>
                    <div class="alert alert-danger">
                        <p class="error"><?= $_SESSION['ERROR_MESSAGE']; ?></p>
                    </div>
                    <?php unset($_SESSION['ERROR_MESSAGE']); ?>
                <?php endif; ?>
                <?php if (isset($_SESSION['SUCCESS_MESSAGE'])) : ?>
                    <div class="alert alert-success">
                        <p class="success"><?= $_SESSION['SUCCESS_MESSAGE']; ?></p>
                    </div>
                    <?php unset($_SESSION['SUCCESS_MESSAGE']); ?>
                <?php endif; ?>
<div id='singleAdCentering'>
    <?php $currentAd = MODEL::findAdById((int)$_GET['id']); ?>
    <?php $imgArray = explode(",",$currentAd['img']); ?>
        <div class="imgContainerShow">
            <h4><?= $currentAd['title'] ?></h4>
            <hr>
            <p>Description : <?= $currentAd['description'] ?></p>
            <p>Created : <?= $currentAd['date_create'] ?></p>
            <p>Categories :<?= $currentAd['categories'] ?></p>
            
            <img class="thumbnailImages" src=<?= $imgArray[0]; ?>>
            <img class="thumbnailImages" src=<?php if(!empty($imgArray[1])){echo $imgArray[1];}; ?>>
            <img class="thumbnailImages" src=<?php if(!empty($imgArray[2])){echo $imgArray[2];}; ?>>
            <img class="thumbnailImages" src=<?php if(!empty($imgArray[3])){echo $imgArray[3];}; ?>>
            <div>
            </div><br>
           
            <a href="/Ads/Edit?id=<?=$_GET['id']?>"><button class="btn-primary btn">Edit</button></a>
             <form method="POST"> 
                <button class="btn" type="submit" name="delete">DELETE</button>
            </form>
            
            <br><br>
        </div>

    <div>

                        <?php 
                //user info update

                 
                    if(!empty($_POST)){
                        $currentAd = Ad::findAdById(Input::get('id'));
                        $newAdInfo = new Ad();
                        $newAdInfo->id = $currentAd['id'];
                        $newAdInfo->title = Input::get('Title');
                        $newAdInfo->description = Input::get('Description');
                        $newAdInfo->price = Input::get('Price');
                        $newAdInfo->categories = Input::get('Category');
                        $newAdInfo->updateAd();

                    };
                        // Auth::logout();
                        // header('Location:/Users/Login');

                ?>

                <form method="POST" action="" data-validation data-required-message="This field is required">

                    <div class="form-group">
                        <input type="text" class="form-control" id="Title" name="Title"  value="" data-required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="Description" name="Description" value="" data-required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="Price" name="Price"  value="" data-required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="Category" name="Category"  value="" data-required>
                    </div>


                    <button type="submit" class="btn btn-primary">Update Item</button>

                </form>

            </div>

        </div>

    </section>

</div>