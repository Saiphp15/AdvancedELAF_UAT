<?php
include("functions.php");
include("header-ar.php")
// PHP goes here!
?>

<!-- PAGE BAR STARTS -->
<div class="page-bar">
    <div class="container">
        <div class="section-title">
            <h4>Forgot Password</h4>
        </div>
    </div>
</div>
<!-- PAGE BAR ENDS -->

<!-- FORGOT PASSWORD SECTION STARTS -->

<section class="section-spacing">
    <div class="container">
        <div class="section-title text-center mb-3">
            <h4>Forgot Password?</h4>
        </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="forgot-pass-wrapper">
                    <div class="section-tagline text-right">
                        <h6>Request for a new Password</h6>
                    </div>
                    <input type="text" class="form-control" placeholder="Username*">
                    <input type="password" class="form-control" placeholder="Email*">

                    <div class="d-grid gap-2 d-md-block text-right">
                        <button class="btn btn-primary brand-btn-black-outline">Cancel</button>
                        <button class="btn btn-primary brand-btn-black">Submit</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>

<!-- LOGIN SECTION ENDS -->

<!-- Footer section  -->
<?php include("footer-ar.php") ?>