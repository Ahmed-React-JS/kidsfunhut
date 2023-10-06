<?php include("../includes/var.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us | Kids Fun Hut</title>

    <!-- COMPATIBILITY START -->
    <?php include("../includes/compatibility.php") ?>
    <!-- COMPATIBILITY END-->


    <!-- STYLE FILES START-->
    <?php include("../includes/styles.php") ?>
    <!-- STYLE FILES END-->
</head>

<body class="contactBody">
    <!-- HEADER START -->
    <?php include("../includes/header.php") ?>
    <!-- HEADER END -->

    <!-- RECTANGLE BANNER START -->
    <section class="rectangleBanner" style="background: url(assets/images/contact-bg.png) center/cover no-repeat;">
        <div class="container">
            <div class="rectangleBannerText">
                <h1>Contact Us</h1>
                <div class="path d-flex align-items-center justify-content-center">
                    <a href="index.php"><i class="fas fa-home mr-2"></i>Home</a>
                    <a href="#">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- RECTANGLE BANNER END -->


    <!-- CONTACT MAIN SECTION START -->
    <section class="contactMainSection spacing__x">
        <!-- PROPS -->
        <img src="assets/images/elements/element-2.png" alt="" class="prop prop-top-left">
        <img src="assets/images/elements/element-6.png" alt="" class="prop prop-top-right">
        <img src="assets/images/elements/element-4.png" alt="" class="prop prop-bottom-left">
        <img src="assets/images/elements/element-3.png" alt="" class="prop prop-bottom-right">


        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="contactMainText">
                        <h4 class="color-1 fw-700 fs-50 mb-20">Lorem Ipsum is simply
                            dummy text of
                        </h4>
                        <p class="mb-40 fs-16 regular-color-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    </div>

                    <div class="row justify-content-md-center mb-10 justify-content-lg-between">
                        <div class="col-lg-6 col-md-6 mb-20 col-sm-12">
                            <div class="contactCards">
                                <div class="icon__wrap">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <h6 class="color-1 fs-20">Phone</h6>
                                <a href="123-456-789">123-456-789</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-20 col-sm-12">
                            <div class="contactCards">
                                <div class="icon__wrap">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <h6 class="color-1 fs-20">Address</h6>
                                <a href="">Lorem Ipsum is simply dummy text of the printing and typesetting</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <div class="form__wrap contactFormMain">
                        <h6 class="form__heading color-1 fs-24">Send Message</h6>
                        <form action="">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12 mb-20">
                                    <input type="text" name="name" id="name" placeholder="Name">
                                </div>
                                <div class="col-lg-6 col-sm-12 mb-20">
                                    <input type="email" name="email" id="email" placeholder="Email Address">
                                </div>
                                <div class="col-lg-12 col-sm-12 mb-20">
                                    <input type="text" name="subject" id="subject" placeholder="Subject">
                                </div>
                                <div class="col-lg-12 col-sm-12 mb-20">
                                    <textarea placeholder="Message" name="message" id="message"></textarea>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <div class="button__wrap">
                                        <button type="submit" class="c-btn style-3">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT MAIN SECTION END -->

    <!-- CONTACT MAIN SECTION END -->
    <section class="mapSection">
        <!-- //PROPS -->
        <img src="assets/images/elements/element-5.png" alt="" class="prop prop-bottom-left">
        <img src="assets/images/elements/element-7.png" alt="" class="prop prop-bottom-right">


        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13026993.027933573!2d-106.2559713014177!3d37.14275395502446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2s!4v1696615587485!5m2!1sen!2s" width="100%" height="648" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>





    <!-- FOOTER END -->
    <?php include("../includes/footer.php") ?>
    <!-- FOOTER START -->

    <!-- FOOTER SCRIPTS -->
    <?php include("../includes/scripts.php") ?>
    <!-- FOOTER END -->

</body>

</html>