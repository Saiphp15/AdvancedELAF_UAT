<?php
include("functions.php");
include("header-ar.php");
?>

<section class="section-spacing signup-bg text-right">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="login-signup-panel">
                    <div class="ui-title text-white">
                        <h4 class="mb-3">New User? Sign Up!</h4>
                    </div>
                    <div class="login-signup-wrap">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-2">
                                    <label class="brand-label text-orange">Full Name <span class="required-mark">*</span></label>
                                    <input class="brand-input" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-2">
                                    <label class="brand-label text-orange">Contact Number <span class="required-mark">*</span></label>
                                    <input class="brand-input" type="tel">
                                </div>
                            </div>
                        </div>




                        <div class="mb-2">
                            <label class="brand-label text-orange">Email Address <span class="required-mark">*</span></label>
                            <input class="brand-input" type="email">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-2">
                                    <label class="brand-label text-orange">Password <span class="required-mark">*</span></label>
                                    <input class="brand-input" type="password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-2">
                                    <label class="brand-label text-orange">Confirm Password <span class="required-mark">*</span></label>
                                    <input class="brand-input" type="password">
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="loginSignupLink text-right mt-3">
                                    <a href="login.php">
                                        <h6>Already a User? Login</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-left mt-3">
                                    <button class="brand-btn-orange">Sign Up</button>
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