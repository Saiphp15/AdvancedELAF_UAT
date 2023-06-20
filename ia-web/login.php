<?php
include("functions.php");
include("header.php")
// PHP goes here!
?>

<!-- LOGIN STARTS -->

<div class="row ml-0">
    <div class="col-md-5 px-0 lb-bg city-bg">
        <div class="ls-form">
            <h4>Welcome Back!</h4>
            <p>Please login to continue</p>

            <form>
                <div class="col-md-12 col-lg-8 pr-0">
                    <div class="form-wrapper">
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email Address">
                        </div>

                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>

                        <div class="fp-link mb-3">
                            <a href="#">Forgot Password?</a>
                        </div>
                        <div class="d-grid mb-3">
                            <button class="btn btn-primary brand-btn-db">Log In</button>
                        </div>

                        <div class="ls-bottom-link">
                            <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-7 px-0">
        <div class="login-banner">
            <div class="glass-logo">
                <img src="assets/images/logo.png">
                <div class="glass-content">
                    <h4>Get the best Insurance Policies for your Vehicles in Saudi Arabia.</h4>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- LOGIN ENDS -->

<!-- Footer section  -->
<?php include("footer.php") ?>