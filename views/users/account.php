<!--Page for user account home-->


<div class="container">

    <section id="welcome">

        <div class="row">

            <div class="col-xs-12">

                <h1 class="text-center"><?= $_SESSION['IS_LOGGED_IN']?>'s Account</h1>
                <hr>
            </div>

        </div>

    </section>

    <section id="features">

        <div class="col-xs-4 col-xs-offset-4 text-center">

            <h3 class="section-title">User Info</h3>
            	<p>Full Name: <?= $activeInfo->name; ?></P>
            	<p>Email: <?= $activeInfo->email; ?></p>
            	<p>User Name: <?= $activeInfo->username; ?></p>

            <button class="btn"><a href="Users/Edit?username=<?= $_SESSION['IS_LOGGED_IN']?>">Edit Information</button>

            <!-- Placeholder for featured items.-->

        </div>

    </section>

</div>