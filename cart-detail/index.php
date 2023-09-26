<?php include("../includes/var.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cart Details | Kids Fun Hut</title>
    <?php include("../includes/compatibility.php") ?>
    <?php include("../includes/styles.php") ?>
</head>

<body>

    <?php include("../includes/header.php") ?>

    <section class="spacing__x f-header cart-detail-section">
        <div class="container position-relative">
            <img class="element element-2" src="assets/images/elements/element-2.png" alt="">
            <img class="element element-3" src="assets/images/elements/element-3.png" alt="">
            <img class="element element-rocket" src="assets/images/elements/rocket-element.png" alt="">
            <img class="element element-4-1" src="assets/images/elements/element-4-1.png" alt="">
            <div class="d-flex justify-content-end align-items-center gap-10 mb-15">
                <h6 class="color-secondary-2 mb-0">Cart <i class="fas fa-shopping-cart"></i> <span>14 Items</span></h6>
                <a class="c-btn bg-color-tertiary br-10 text-shadow" href="#">View</a>
                <a class="c-btn bg-color-tertiary br-10 text-shadow" href="#">Continue Shopping</a>
                <hr class="vr">
                <a class="color-1" href="#"> Login</a>
            </div>
            <h1 class="fs-30 color-1 mb-10">CART DETAILS (ALL PRICES ARE IN CANADIAN DOLLARS)</h1>
            <div class="cart-table-wrap">
                <div class="cart-table-view">
                    <ul class="dtbl t-head">
                        <li class="dtd bg-color-tertiary">
                            <h6 class="fs-20 mb-0 ">L9742878,2023-08-31 15:33:18</h6>
                        </li>
                        <li class="dtd wd-220 bg-color-tertiary">
                            <h6 class="fs-20 mb-0 ">Price (CAD)</h6>
                        </li>
                        <li class="dtd wd-330 bg-color-tertiary text-center">
                            <h6 class="fs-20 mb-0 ">Qty</h6>
                        </li>
                        <li class="dtd wd-110 bg-color-tertiary">
                            <h6 class="fs-20 mb-0 ">Total</h6>
                        </li>
                        <li class="dtd wd-110 bg-color-tertiary">

                        </li>
                    </ul>
                    <ul class="dtbl">
                        <li class="dtd text-left">
                            <p class="pad-left">5 Wall Climbs</p>
                        </li>
                        <li class="dtd wd-220">
                            <p class="color-secondary-2">$15.00</p>
                        </li>
                        <li class="dtd wd-330">
                            <div class="quantity-list">
                                <a class="bg-color-tertiary text-shadow" href="#"><i class="fas fa-minus"></i></a>
                                <p class="color-secondary-2">13</p>
                                <a class="bg-color-primary text-shadow" href="#"><i class="fas fa-plus"></i></a>
                            </div>
                        </li>
                        <li class="dtd wd-110">
                            <p>$195.00</p>
                        </li>
                        <li class="dtd wd-110">
                            <a class="bg-color-primary text-shadow" href="#"><i class="fas fa-trash-alt"></i></a>
                        </li>
                    </ul>
                    <ul class="dtbl">
                        <li class="dtd text-right">
                            <p>Subtotal:</p>
                        </li>
                        <li class="dtd wd-220 bor-right-0"></li>
                        <li class="dtd wd-330"> </li>
                        <li class="dtd wd-110">
                            <p>$195.00</p>
                        </li>
                        <li class="dtd wd-110"></li>
                    </ul>
                    <ul class="dtbl">
                        <li class="dtd text-right">
                            <p>Tax:</p>
                        </li>
                        <li class="dtd wd-220 bor-right-0"></li>
                        <li class="dtd wd-330"> </li>
                        <li class="dtd wd-110">
                            <p>$25.35</p>
                        </li>
                        <li class="dtd wd-110"></li>
                    </ul>
                    <ul class="dtbl">
                        <li class="dtd text-right">
                            <p>Total(CAD):</p>
                        </li>
                        <li class="dtd wd-220 bor-right-0">
                        <li class="dtd wd-330"> </li>
                        <li class="dtd wd-110">
                            <p>$220.35</p>
                        </li>
                        <li class="dtd wd-110"></li>
                    </ul>
                </div>
                <div class="text-right">
                    <div class="d-flex gap-15 justify-content-end align-items-center mb-20">
                        <input class="enter-code" type="text" placeholder="Enter Code">
                        <a class="c-btn bg-color-secondary-2 box-button-shadow br-10" href="#">Apply Promo-Code</a>
                    </div>
                    <div class="bill-text">
                        <h6>Total: $220.35</h6>
                        <h6>Paid: $0.00</h6>
                        <h6>Balance: $220.35</h6>
                    </div>
                    <div class="btn-list justify-content-end">
                        <a class="c-btn  bg-color-tertiary br-10 text-shadow" href="#">Back</a>
                        <a class="c-btn  bg-color-tertiary br-10 text-shadow" href="#">PAY $220.35</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("../includes/footer.php") ?>

    <?php include("../includes/scripts.php") ?>

</body>

</html>