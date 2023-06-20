<?php
include("functions.php");
include("header.php")
// PHP goes here!
?>

<!-- CHECKOUT LOGIN SECTION STARTS -->
<section class="section-spacing">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="checkout-login-wrapper">
                    <div class="section-tagline">
                        <h6>Already have an account?</h6>
                    </div>
                    <div class="section-title">
                        <h4>Log in</h4>
                    </div>

                    <input type="text" class="brand-input mb-3" placeholder="Username*">
                    <input type="password" class="brand-input mb-3" placeholder="Password*">

                    <div class="d-grid gap-2 d-md-block mb-2">
                        <button class="brand-btn">Cancel</button>
                        <button class="g-brand-btn">Login</button>
                    </div>

                    <div class="loginSignupLink">
                        <a href="forgot-password.php">
                            <h5>Forgot Password?</h5>
                        </a>

                        <a href="signup.php">
                            <h5>New User? Signup</h5>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="option-tag mt-3 mb-3 text-center">
                    <h3>OR</h3>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="checkout-login-wrapper-trans">
                    <div class="section-tagline">
                        <h6>Checkout as a guest</h6>
                    </div>
                    <div class="section-title">
                        <h4>Guest Log in</h4>
                    </div>

                    <ul class="guest-feature-list">
                        <li class="d-flex">
                            <i class="icofont-circled-right"></i>
                            <h6>Make a One Time Payment</h6>
                        </li>

                        <li class="d-flex">
                            <i class="icofont-circled-right"></i>
                            <h6>Fast Safe and Secure</h6>
                        </li>
                    </ul>

                    <button class="g-brand-btn">Checkout as guest</button>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- CHECKOUT LOGIN SECTION ENDS -->

<?php
include("footer.php")
?>