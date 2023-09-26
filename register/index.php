<?php include("../includes/var.php") ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Regsiter | Kids Fun Hut</title>
        <?php include("../includes/compatibility.php") ?>
        <?php include("../includes/styles.php") ?>
    </head>
    <body>
        
        <?php include("../includes/header.php") ?>

        <section class="spacing__x f-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="wavier-signin-info br-0">
                            <img class="element element-2" src="assets/images/elements/element-2.png">
                            <img class="element element-3" src="assets/images/elements/element-3.png">
                            <h4 class="fs-60 fw-700 tt-uppercase ls-3 heading-color-1">Register</h4>
                            <p class="regular-color-2 ff-fredoka fs-17">PLEASE FILL OUT ALL THE FIELDS TO COMPLETE REGISTRATION.</p>
                        </div>
                    </div>
                </div>
                <form class="row fg-mb" action="" method="POST">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="custom-input-style" name="" value="" placeholder="First Name*" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="custom-input-style" name="" value="" placeholder="Last Name*" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="custom-input-style" name="" value="" placeholder="Phone*" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="email" class="custom-input-style" name="" value="" placeholder="Email*" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="password" class="custom-input-style" name="" value="" placeholder="Password*" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="password" class="custom-input-style" name="" value="" placeholder="Re-enter Password*" required>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group text-center">
                            <ul class="inline-flex justify-content-center">
                                <li><button type="submit" class="c-btn bg-color-secondary">Register Now</button></li>
                                <li><button type="submit" class="c-btn style-2">Already Registred - Login</button></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <?php include("../includes/footer.php") ?>

        <?php include("../includes/scripts.php") ?>

    </body>
</html>