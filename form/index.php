<?php include("../includes/var.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form | Kids Fun Hut</title>

    <!-- COMPATIBILITY START -->
    <?php include("../includes/compatibility.php") ?>
    <!-- COMPATIBILITY END-->


    <!-- STYLE FILES START-->
    <?php include("../includes/styles.php") ?>
    <!-- STYLE FILES END-->
</head>

<body class="bodyForm">
    <!-- HEADER START -->
    <?php include("../includes/header.php") ?>
    <!-- HEADER END -->


    <section class="spacing__x f-header ">
        <img class="prop prop-top-left" src="assets/images/elements/element-3.png" alt="">
        <img class="prop prop-top-right" src="assets/images/elements/rocket-element.png" alt="">
        <img class="prop prop-middle-left" src="assets/images/elements/element-4-1.png" alt="">
        <img class="prop prop-middle-right" src="assets/images/elements/element-5.png" alt="">
        <img class="prop prop-bottom-right" src="assets/images/elements/element-4.png" alt="">
        <img class="prop prop-bottom-left" src="assets/images/elements/element-2.png" alt="">
        <div class="container ">

            <div class="cart-detail-section formButton mb-40 d-flex justify-content-between">
                <h1 class="fs-30 color-1 mb-10 flex-1 text-sm-center">10 CHILDREN PARTY </h1>
                <div class="row justify-content-end flex-grow-1 flex-shrink-0 align-items-center gap-10 mb-15">
                    <a class="c-btn bg-color-tertiary br-10 text-shadow" href="#">Continue Shopping</a>
                    <hr class="vr">
                    <a class="color-1" href="#"> <i class="fa fa-lock"></i> Login</a>
                </div>
            </div>


            <div class="form__wrap leadForm">
                <h4 class="section__heading color-white text-center py-4">Please Fill In The Details</h4>
                <form action="">
                    <div class="input__wrap">
                        <div class="form--label-wrap">
                            <label for="partyDate">Party Date:</label>
                        </div>
                        <input type="date" id="partyDate">
                    </div>
                    <div class="input__wrap">
                        <div class="form--label-wrap">
                            <label for="childName">Child Name:</label>
                            <p>Name of the birthday child.</p>
                        </div>
                        <input type="text" id="childName">
                    </div>
                    <div class="input__wrap">
                        <div class="form--label-wrap">
                            <label for="turningTo">Turning To:</label>
                            <p>Birthday child turning to? (Age).</p>
                        </div>
                        <input type="text" id="turningTo">
                    </div>
                    <div class="input__wrap">
                        <div class="form--label-wrap">
                            <label for="parentName">Parent/Guardian's Name:</label>
                            <p>Birthday child turning to? (Age).</p>
                        </div>
                        <input type="text" id="parentName">
                    </div>
                    <div class="input__wrap">
                        <div class="form--label-wrap">
                            <label for="SocksTab">Socks tab:</label>
                            <p>Will you (Party Host) pay for the grip socks cost for your party guests? $2.50 + HST per
                                pair.</p>
                        </div>
                        <select name="SocksTab" id="SocksTab">
                            <option value="" selected></option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <div class="input__wrap">
                        <div class="form--label-wrap">
                            <label for="item_1">Pizza 1:</label>
                            <p>Select pizza (with package).</p>
                        </div>
                        <div>
                            <select name="item_1" id="item_1">
                                <option value="" selected></option>
                                <option value="">No Pizza $-10</option>
                                <option value="">2 Large Cheese Pizza $0</option>
                                <option value="">2 Large peparroni Pizza $0</option>
                                <option value="">2 Pizza 1 Topping $1.5</option>
                                <option value="">2 Pizza 3 Topping $6</option>
                            </select>
                            <span class="selectValue">2 x Large Cheese Pizza</span>
                        </div>
                    </div>
                    <div class="input__wrap">
                        <div class="form--label-wrap">
                            <label for="item_2">Pizza 2:</label>
                            <p>Select pizza (with package).</p>
                        </div>
                        <div>
                            <select name="item_2" id="item_2">
                                <option value="" selected></option>
                                <option value="">No Pizza $-10</option>
                                <option value="">2 Large Cheese Pizza $0</option>
                                <option value="">2 Large peparroni Pizza $0</option>
                                <option value="">2 Pizza 1 Topping $1.5</option>
                                <option value="">2 Pizza 3 Topping $6</option>
                            </select>
                            <span class="selectValue">2 x Large Cheese Pizza</span>
                        </div>
                    </div>
                    <div class="input__wrap">
                        <div class="form--label-wrap">
                            <label for="cake">Cake:</label>
                            <p>Select Party Cake ( with package )</p>
                        </div>
                        <select name="cake" id="cake">
                            <option value="" selected></option>
                            <option value="1">No Cake $-15</option>
                            <option value="0">10" Cake</option>
                            <option value="0">12x16 Cake</option>
                        </select>
                    </div>
                    <div class="input__wrap">
                        <div class="form--label-wrap">
                            <label for="writingOnCake">Writing On Cake:</label>
                            <p>Writing On Cake</p>
                        </div>
                        <input type="text" id="writingOnCake">
                    </div>
                    <div class="input__wrap">
                        <div class="form--label-wrap">
                            <label for="trimColor">Trim color:</label>
                            <p>Select Cake Border Color</p>
                        </div>
                        <select name="trimColor" id="trimColor">
                            <option value="" selected></option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <div class="input__wrap">
                        <div class="form--label-wrap">
                            <label for="cakeImage">Cake Image:</label>
                            <p>Image on cake</p>
                        </div>
                        <input type="checkbox" name="cakeImage" id="cakeImage">
                    </div>
                    <div class="hidden">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-sm-12">
                                <div class="input__wrap">
                                    <div class="form--label-wrap">
                                        <label for="imageName">Image Name:</label>
                                        <p>Please write dairy queen cake image number, OR upload an image file.</p>
                                    </div>
                                    <input type="text" name="imageName" id="imageName">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="input__wrap">
                                    <div class="form--label-wrap">
                                        <label for="image">Upload Image</label>
                                        <p>Upload an image from your device</p>
                                    </div>
                                    <div>
                                        <input type="file" name="image" id="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="input__wrap">
                        <div class="form--label-wrap">
                            <label for="arcade_1">Arcade $5</label>
                            <p>20 credits + 5 bonus + earn tickets</p>
                        </div>
                        <select name="arcade_1" id="arcade_1">
                            <option value="" selected>0 for $0</option>
                            <option value="" selected>1 for $5</option>
                            <option value="" selected>2 for $10</option>
                        </select>
                    </div>
                    <div class="input__wrap">
                        <div class="form--label-wrap">
                            <label for="arcade_1">Arcade $5</label>
                            <p>20 credits + 5 bonus + earn tickets</p>
                        </div>
                        <select name="arcade_1" id="arcade_1">
                            <option value="" selected>0 for $0</option>
                            <option value="" selected>1 for $5</option>
                            <option value="" selected>2 for $10</option>
                        </select>
                    </div>

                    <button type="submit" class="c-btn style-4">SAVE INFORMATION</button>
                </form>
            </div>
        </div>
    </section>





    <!-- FOOTER END -->
    <?php include("../includes/footer.php") ?>
    <!-- FOOTER START -->

    <!-- FOOTER SCRIPTS -->
    <?php include("../includes/scripts.php") ?>
    <!-- FOOTER END -->

</body>

</html>