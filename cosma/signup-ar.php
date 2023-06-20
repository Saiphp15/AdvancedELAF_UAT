<?php
include("functions.php");
include("header-ar.php")
// PHP goes here!
?>

<!-- PAGE BAR STARTS -->
<div class="page-bar">
    <div class="container">
        <div class="section-title">
            <h4>Sign up</h4>
        </div>
    </div>
</div>
<!-- PAGE BAR ENDS -->

<!-- SIGN UP SECTION STARTS -->

<section class="section-spacing">
    <div class="container">
        <div class="section-title text-center mb-3">
            <h4>New user? sign up</h4>
        </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="checkout-login-wrapper">
                    <input type="text" class="form-control" placeholder="Username*">
                    <input type="email" class="form-control" placeholder="Email Address*">
                    <input type="password" class="form-control" placeholder="Password*">
                    <input type="password" class="form-control" placeholder="Confirm Password*">

                    <div class="custom-control custom-checkbox newsletter-checkbox mb-2 text-right">
                        <input type="checkbox" class="custom-control-input" id="newsletterCheck">
                        <label class="custom-control-label" for="newsletterCheck">Subscribe Newsletter</label>
                    </div>

                    <div class="d-grid gap-2 d-md-block text-right">
                        <button class="btn btn-primary brand-btn-black-outline">Reset</button>
                        <button class="btn btn-primary brand-btn-black">Sign up</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>

<!-- SIGN UP SECTION ENDS -->

<!-- Footer section  -->
<?php include("footer-ar.php") ?>