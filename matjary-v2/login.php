<?php
include("functions.php");
include("header.php")
// PHP goes here!
?>

<!-- LOGIN SECTION STARTS -->

<section>
    <div class="custom-container">
        <div class="login-wrapper wow fadeIn" data-wow-delay="200ms">
            <div class="login-box wow slideInDown" data-wow-delay="400ms">
                <img src="assets/images/logo-2.png">
                <h4>Login to your account</h4>
                <div class="form-wrapper">
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email Address*">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Password*">
                    </div>
                    <div class="text-right">
                        <p><a href="forgot-password.php">Forgot Password?</a></p>
                    </div>
                    <button class="btn btn-primary brand-btn-pink w-100 mx-auto d-block">Login</button>
                    <div class="text-center mt-2">
                        <p>Don't have an account? <a href="register.php">Register Now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer section  -->
<?php include("footer.php") ?>