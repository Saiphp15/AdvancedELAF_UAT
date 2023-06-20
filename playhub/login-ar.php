<?php
include("functions.php");
include("header-ar.php");
?>

<section class="section-spacing login-bg text-right">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="login-signup-panel">
                    <div class="ui-title text-white">
                        <h4 class="mb-3">Already a User? Login!</h4>
                    </div>
                    <div class="login-signup-wrap">
                        <div class="mb-2">
                            <label class="brand-label text-orange">Email Address <span class="required-mark">*</span></label>
                            <input class="brand-input" type="email">
                        </div>

                        <div class="mb-2">
                            <label class="brand-label text-orange">Password <span class="required-mark">*</span></label>
                            <input class="brand-input" type="password">
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="loginSignupLink text-right mt-3">
                                    <a href="#">
                                        <h6>Forgot Password?</h6>
                                    </a>
                                    <a href="#">
                                        <h6>New User? Register</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-left mt-3">
                                    <button class="brand-btn-orange">Login</button>
                                    <button class="brand-btn-white">Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>

<?php
include("footer-ar.php");
?>