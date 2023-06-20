<?php
include("functions.php");
include("header-ar.php")
// PHP goes here!
?>

<section class="ot-banner">
    <div class="container">
        <div class="page-title">
            <h1>My Profile</h1>
        </div>
    </div>
</section>

<!-- MY PROFILE SECTION STARTS -->

<section class="section-spacing">
    <div class="container">
        <div class="section-title text-center mb-3">
            <h2>My Profile</h2>
        </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="my-profile-wrapper">
                    <div class="mb-2">
                        <label>Username</label>
                        <input type="text" readonly="" class="form-control-plaintext remove-border text-light" value="sultansiddiqui">
                    </div>

                    <div class="mb-2">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-2">
                                    <label>Email Address</label>
                                    <input type="email" class="brand-input">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-2">
                                    <label>Current Password</label>
                                    <input type="password" class="brand-input">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-2">
                                    <label>New Password</label>
                                    <input type="password" class="brand-input">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-2">
                                    <label>Confirm New Password</label>
                                    <input type="password" class="brand-input">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-block text-right">
                        <button class="g-brand-btn">Cancel</button>
                        <button class="g-brand-btn">Save</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>

<!-- MY PROFILE SECTION ENDS -->

<?php
include("footer-ar.php")
?>