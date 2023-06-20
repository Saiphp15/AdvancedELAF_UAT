<?php
include("functions.php");
include("header.php")
// PHP goes here!
?>

<section class="user-dashboard-wrapper">
    <div class="custom-container">
        <div class="user-sec-title">
            <h4>My Profile</h4>
        </div>

        <div class="dash-wrap blue-bg">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link active tab-active" id="nav-acc-tab" data-toggle="tab" href="#acc-details" role="tab" aria-controls="acc-details" aria-selected="true">Account Details</a>
                    <a class="nav-link" id="nav-pass-tab" data-toggle="tab" href="#nav-pass" role="tab" aria-controls="nav-pass" aria-selected="false">Change Password</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="acc-details" role="tabpanel" aria-labelledby="nav-acc-tab">
                    <h5 class="tab-title mt-3 mb-4">Fill in the form below to update your account details:</h5>
                    <div class="form-section-title mt-3 mb-3">
                        <h4>Basic Details</h4>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 col-lg-4">
                            <div class="tab-form form-wrapper mb-3">
                                <input type="text" class="form-control" value="Username" readonly>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4">
                            <div class="tab-form form-wrapper mb-3">
                                <input type="text" class="form-control" placeholder="First Name*">
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4">
                            <div class="tab-form form-wrapper mb-3">
                                <input type="text" class="form-control" placeholder="Last Name*">
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="tab-form form-wrapper mb-3">
                                <input type="email" class="form-control" placeholder="Email Address*">
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="tab-form form-wrapper mb-3">
                                <input type="email" class="form-control" placeholder="Invoice Email Address*">
                            </div>
                        </div>
                    </div>

                    <div class="form-section-title mt-3 mb-3">
                        <h4>Address Details</h4>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 col-lg-3">
                            <div class="tab-form form-wrapper mb-3">
                                <input type="address" class="form-control" placeholder="Address">
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-3">
                            <div class="tab-form form-wrapper mb-3">
                                <select class="form-control">
                                    <option>Country</option>
                                    <option>Saudi Arabia</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-3">
                            <div class="tab-form form-wrapper mb-3">
                                <input type="address" class="form-control" placeholder="State">
                            </div>
                        </div>

                        <div class="col-md-4 col-lg">
                            <div class="tab-form form-wrapper mb-3">
                                <input type="address" class="form-control" placeholder="City">
                            </div>
                        </div>

                        <div class="col-md-4 col-lg">
                            <div class="tab-form form-wrapper mb-3">
                                <input type="address" class="form-control" placeholder="Zip">
                            </div>
                        </div>
                    </div>

                    <div class="form-section-title mt-3 mb-3">
                        <h4>Contact Details</h4>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 col-lg-4">
                            <div class="tab-form form-wrapper mb-3">
                                <input type="tel" class="form-control" placeholder="Phone*">
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4">
                            <div class="tab-form form-wrapper mb-3">
                                <input type="tel" class="form-control" placeholder="Fax*">
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary brand-btn-pink mx-auto d-block">Save Changes</button>
                </div>
                <div class="tab-pane fade" id="nav-pass" role="tabpanel" aria-labelledby="nav-pass-tab">
                    <h5 class="tab-title mt-3 mb-4">Fill in the form below to update your password details:</h5>
                    <div class="form-row">
                        <div class="col-md-4 col-lg-4">
                            <div class="tab-form form-wrapper mb-3">
                                <input type="password" class="form-control" placeholder="Current Password*">
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4">
                            <div class="tab-form form-wrapper mb-3">
                                <input type="password" class="form-control" placeholder="New Password*">
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4">
                            <div class="tab-form form-wrapper mb-3">
                                <input type="password" class="form-control" placeholder="Confirm New Password*">
                            </div>
                        </div>

                        <button class="btn btn-primary brand-btn-pink mx-auto d-block">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer section  -->
<?php include("footer.php") ?>