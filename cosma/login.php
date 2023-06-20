<?php
include("functions.php");
include("header.php")
// PHP goes here!
?>

<!-- PAGE BAR STARTS -->
<div class="page-bar">
    <div class="container">
        <div class="section-title">
            <h4>Log in</h4>
        </div>
    </div>
</div>
<!-- PAGE BAR ENDS -->

<!-- LOGIN SECTION STARTS -->

<section class="section-spacing">
    <div class="container">
        <div class="section-title text-center mb-3">
            <h4>Already a User? Log in!</h4>
        </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="checkout-login-wrapper">
                    <input type="text" class="form-control" placeholder="Username*">
                    <input type="password" class="form-control" placeholder="Password*">

                    <div class="d-grid gap-2 d-md-block">
                        <button class="btn btn-primary brand-btn-black-outline">Cancel</button>
                        <button class="btn btn-primary brand-btn-black">Login</button>
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
            <div class="col-md-3"></div>
        </div>
    </div>
</section>

<!-- LOGIN SECTION ENDS -->

<!-- Footer section  -->
<?php include("footer.php") ?>