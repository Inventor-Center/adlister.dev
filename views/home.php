
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

            <h2>Top 5 Ads Here</h2>
            <table>
                <tr>
                    <th>Title</th><th>Description</th><th>Price</th>
                </tr>
               
            
                <?php $topFiveAds = Ad::topFiveAds(); var_dump($topFiveAds[0]); foreach($topFiveAds as $ad) : ?>

                    <a href="/Ads/Show?id=<?= $ad->id ?>">
                        <tr>
                            <td><?= $ad->title ?></td><td><?= $ad->description ?></td><td><?= $ad->price ?></td>
                        </tr>
                    </a>
                <?php endforeach; ?>
            </table>

               
        </div>

    </section>

</div>