
<div class="container">

    <section id="welcome">

        <div class="row">

            <div class="col-xs-12">

                <h1 class="text-center">Welcome To Inventor Center!</h1>
                <h4 class="text-center">The easiest way to sell your inventions online</h4>
                <hr>
            </div>

        </div>

    </section>

    <section id="features">

        <div class="row">

            <h1>About Us Here</h1>
            <h4 style="text-align:center">Imagine that there is a bunch of cool info about our company here!!!</h4>

            <h2><em>Top 5 Inventions</em></h2>
            <table class="table">
                <tr>
                    <th>Title</th><th>Description</th><th>Price</th>
                </tr>
               
            
                <?php $topFiveAds = Ad::topFiveAds(); foreach($topFiveAds as $ad) : ?>
                    <tr>
                        
                            <td><a href="/Ads/Show?id=<?= $ad->id ?>"><?= $ad->title ?></a></td>
                            <td><a href="/Ads/Show?id=<?= $ad->id ?>"><?= $ad->description ?></a></td>
                            <td><a href="/Ads/Show?id=<?= $ad->id ?>">$ <?= $ad->price ?></a></td>
                        
                    </tr>
                <?php endforeach; ?>
            </table>

               
        </div>

    </section>

</div>