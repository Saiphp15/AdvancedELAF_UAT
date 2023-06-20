<?php
include("functions.php");
include("header.php")
// PHP goes here!
?>

<section class="ot-banner">
    <div class="container">
        <div class="page-title">
            <h1>Login</h1>
        </div>
    </div>
</section>

<section class="section-spacing">
    <div class="container">
        <div class="section-title text-center mb-4">
            <h2>Already a User? Log in!</h2>
        </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="login-signup-wrapper">
                    <input type="text" class="brand-input mb-3" placeholder="Username*">
                    <input type="password" class="brand-input mb-3" placeholder="Password*">
                    <div class="d-grid gap-2 d-md-block">
                        <button class="g-brand-btn">Cancel</button>
                        <button class="g-brand-btn">Login</button>
                    </div>
                    <div class="loginSignupLink mt-3">
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

<?php
include("footer.php")
?>