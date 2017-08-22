<!--Page for user account home--><?php
if(isset($_SESSION['IS_LOGGED_IN'])){
        $activeUser = User::find($_SESSION['LOGGED_IN_ID']);
        }
    ?>

<div class="container">

    <section id="welcome">

        <div class="row">

            <div class="col-xs-12">
                <h1 class="text-center"><?= $activeUser->name ?>'s Account</h1>
                <hr>
            </div>

        </div>

    </section>

    <section id="features">

        <div class="col-xs-4 col-xs-offset-4 text-center">

            <h3 class="section-title">User Info</h3>
            
            <h4>Name : <?= $activeUser->name ?> </h4>
            <h4>Username : <?= $activeUser->username ?></h4>
            <h4>Email : <?= $activeUser->email ?></h4>

            <!-- <button class="btn"><a href="Users/Edit?username=<?= $_SESSION['IS_LOGGED_IN']?>">Edit Information</button> -->
            <a href="/Users/Edit" class="btn btn-success">Go To Edit User Page</a>


        </div>

    </section>

</div>