<?php
include("functions.php");
include("header-ar.php")
// PHP goes here!
?>

<section class="ot-banner">
    <div class="container">
        <div class="page-title">
            <h1>Forgot Password</h1>
        </div>
    </div>
</section>

<!-- FORGOT PASSWORD SECTION STARTS -->

<section class="section-spacing">
    <div class="container">
        <div class="section-title text-center mb-3">
            <h2>Forgot Password?</h2>
        </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="forgot-pass-wrapper text-right">
                    <div class="section-tagline">
                        <h6>Request for a new password!</h6>
                    </div>
                    <div class="mb-2">
                        <input type="text" class="brand-input" placeholder="Username*">
                    </div>

                    <div class="mb-2">
                        <input type="password" class="brand-input" placeholder="Email*">
                    </div>

                    <div class="d-grid gap-2 d-md-block">
                        <button class="g-brand-btn">Cancel</button>
                        <button class="g-brand-btn">Submit</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>

<!-- FORGOT PASSWORD SECTION ENDS -->

<?php
include("footer-ar.php")
?>