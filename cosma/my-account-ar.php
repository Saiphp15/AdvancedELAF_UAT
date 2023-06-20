<?php
include("functions.php");
include("header-ar.php")
// PHP goes here!
?>

<!-- PAGE BAR STARTS -->
<div class="page-bar">
    <div class="container">
        <div class="section-title">
            <h4>My account</h4>
        </div>
    </div>
</div>
<!-- PAGE BAR ENDS -->

<!-- MY ACCOUNT SECTION STARTS -->

<section class="section-spacing">
    <div class="container">
        <div class="section-title text-center mb-3">
            <h4>My account</h4>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="my-acc-wrapper">
                    <i class="icofont-ui-user"></i>
                    <a href="my-profile-ar.php">
                        <h5>My Profile</h5>
                    </a>
                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="my-acc-wrapper">
                    <i class="icofont-tasks-alt"></i>
                    <a href="my-orders-ar.php">
                        <h5>My Orders</h5>
                    </a>
                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="my-acc-wrapper">
                    <i class="icofont-cart-alt"></i>
                    <a href="cart-ar.php">
                        <h5>My Cart</h5>
                    </a>
                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="my-acc-wrapper">
                    <i class="icofont-heart-alt"></i>
                    <a href="my-wishlist-ar.php">
                        <h5>My Wishlist</h5>
                    </a>
                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="my-acc-wrapper">
                <i class="icofont-location-arrow"></i>
                    <a href="billing-address-ar.php">
                        <h5>My Billing Address</h5>
                    </a>
                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="my-acc-wrapper">
                <i class="icofont-map-pins"></i>
                    <a href="shipping-address-ar.php">
                        <h5>My Shipping Address</h5>
                    </a>
                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="my-acc-wrapper">
                <i class="icofont-refresh"></i>
                    <a href="#">
                        <h5>My Refund Requests</h5>
                    </a>
                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="my-acc-wrapper">
                <i class="icofont-gift"></i>
                    <a href="giftcard-details-ar.php">
                        <h5>My Giftcards</h5>
                    </a>
                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="my-acc-wrapper">
                <i class="icofont-gift-box"></i>
                    <a href="#">
                        <h5>Giftcard Usage</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MY ACCOUNT SECTION ENDS -->

<!-- Footer section  -->
<?php include("footer-ar.php") ?>