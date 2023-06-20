<?php
include("functions.php");
include("header-ar.php")
// PHP goes here!
?>

<section class="ot-banner">
    <div class="container">
        <div class="page-title">
            <h1>Signup</h1>
        </div>
    </div>
</section>

<section class="section-spacing">
    <div class="container">
        <div class="section-title text-center mb-4">
            <h2>New user? sign up</h2>
        </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="login-signup-wrapper">
                    <input type="text" class="brand-input mb-3" placeholder="Username*">
                    <input type="email" class="brand-input mb-3" placeholder="Email Address*">
                    <input type="password" class="brand-input mb-3" placeholder="Password*">
                    <input type="password" class="brand-input mb-3" placeholder="Confirm Password*">
                    <div class="custom-control custom-checkbox newsletter-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="newsletterCheck">
                        <label class="custom-control-label text-white" for="newsletterCheck">Subscribe Newsletter</label>
                    </div>
                    <div class="d-grid gap-2 d-md-block text-right">
                        <button class="g-brand-btn">Reset</button>
                        <button class="g-brand-btn">Signup</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>

<?php
include("footer-ar.php")
?>