<?php
include("functions.php");
include("header.php")
// PHP goes here!
?>

<!-- PAGE BAR STARTS -->
<div class="page-bar">
    <div class="container">
        <div class="section-title">
            <h4>My Profile</h4>
        </div>
    </div>
</div>
<!-- PAGE BAR ENDS -->

<!-- MY PROFILE SECTION STARTS -->

<section class="section-spacing">
    <div class="container">
        <div class="section-title text-center mb-3">
            <h4>My Profile</h4>
        </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="my-profile-wrapper">
                    <div class="mb-2">
                        <label>Username</label>
                        <input type="text" readonly class="form-control-plaintext remove-border" value="sultansiddiqui">
                    </div>

                    <div class="mb-2">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Email Address</label>
                                <input type="email" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Current Password</label>
                                <input type="password" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label>New Password</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label>Confirm New Password</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-block">
                        <button class="btn btn-primary brand-btn-black-outline">Cancel</button>
                        <button class="btn btn-primary brand-btn-black">Save</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>

<!-- MY PROFILE SECTION ENDS -->

<!-- Footer section  -->
<?php include("footer.php") ?>