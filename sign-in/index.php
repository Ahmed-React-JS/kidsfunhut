<?php include("../includes/var.php") ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sign In | Kids Fun Hut</title>
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
                            <h4 class="fs-60 fw-700 tt-uppercase ls-3 heading-color-1">Signing A Waiver</h4>
                            <p class="regular-color-2 tt-uppercase ff-fredoka">Signing Person Email (Must Be 18+ Year Old)</p>
                        </div>
                    </div>
                </div>
                <form class="row fg-mb align-items-center justify-content-center" action="" method="POST">
                    <div class="col-lg-1">
                        <div class="form-group">
                            <label class="fs-20 mb-0">Email:</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="email" class="custom-input-style" name="" value="" placeholder="Email*" required>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <button type="submit" class="c-btn style-2 tt-uppercase fw-500">Next</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <?php include("../includes/footer.php") ?>

        <?php include("../includes/scripts.php") ?>

    </body>
</html>