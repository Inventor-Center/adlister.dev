<div class="container">

    <section id="login">

        <div class="row">

            <h1 class="section-title">Edit Account</h1>

            <div class="col-md-6 col-md-offset-3">

                <p>Please fill out the information below so we can update your account.</p>
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
                <?php 
                //user info update
                    if(!empty($_POST)){
                        $newUserInfo = new User();
                        $newUserInfo->id = $currentUserInfo->id;
                        $newUserInfo->name = Input::get('newName');
                        $newUserInfo->email = Input::get('newEmail');
                        $newUserInfo->username = Input::get('newUsername');
                        $newUserInfo->password = $currentUserInfo->password;
                        $newUserInfo->updateUser();

                    };

                ?>

                <form method="POST" action="" data-validation data-required-message="This field is required">

                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="newName" placeholder="Full Name" value="" data-required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="newEmail" placeholder="Email" value="" data-required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="username" name="newUsername" placeholder="Username" value="" data-required>
                    </div>
                    


                    <button type="submit" class="btn btn-primary">Update Account</button>

                </form>

            </div>

        </div>

    </section>

</div>
