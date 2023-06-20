<?php
include("functions.php");
include("header.php")
// PHP goes here!
?>

<!-- REGISTER SECTION STARTS -->

<section>
    <div class="custom-container">
        <div class="register-wrapper wow fadeIn" data-wow-delay="200ms">
            <div class="register-box wow slideInDown" data-wow-delay="400ms">
                <img src="assets/images/logo-2.png">
                <h4>Register account</h4>
                <div class="form-wrapper">
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="First Name*">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Last Name*">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email Address*">
                    </div>
                    <div class="mb-3">
                        <input type="tel" class="form-control" placeholder="Phone Number*">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Password*">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Confirm Password*">
                    </div>
                    <button class="btn btn-primary brand-btn-pink w-100 mx-auto d-block">Register</button>
                    <div class="text-center mt-2">
                        <p>Already have an account? <a href="login.php">Login Now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- REGISTER SECTION ENDS -->

<!-- Footer section  -->
<?php include("footer.php") ?>