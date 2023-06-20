<?php
include("functions.php");
include("header.php") 
// PHP goes here!
?>
<!-- Header section  -->


<!-- Main section  -->

<div class="container">
    <div class="dashboard-page-title">
        <h2>My Profile</h2>
    </div>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item m-style">
            <a class="nav-link active" id="account-details-tab" data-toggle="tab" href="#account-details" role="tab" aria-controls="account-details" aria-selected="true">Account Details</a>
        </li>
        <li class="nav-item m-style">
            <a class="nav-link" id="change-pass-tab" data-toggle="tab" href="#change-pass" role="tab" aria-controls="change-pass" aria-selected="false">Change Password</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="account-details" role="tabpanel" aria-labelledby="account-details-tab">
            <div class="acc-details-desc">
                <p>Fill in the form below to update your account details:</p>
            </div>

            <div class="acc-form">
                <form>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label acc-label">Username <span class="required-mark">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label acc-label">First Name <span class="required-mark">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label acc-label">Last Name <span class="required-mark">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label acc-label">Email <span class="required-mark">*</span></label>
                        <div class="col-sm-4">
                            <input type="email" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label acc-label">Invoice Email</label>
                        <div class="col-sm-4">
                            <input type="email" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label acc-label">Address</label>
                        <div class="col-sm-4">
                            <input type="textarea" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label acc-label">Country</label>
                        <div class="col-sm-4">
                            <select  class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label acc-label">State</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label acc-label">City</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label acc-label">Zip</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label acc-label">Phone</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label acc-label">Fax</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary account-btn">Save Changes</button>
                </form>
            </div>
        </div>

        <div class="tab-pane fade" id="change-pass" role="tabpanel" aria-labelledby="change-pass-tab">
            <div class="acc-details-desc">
                <p>Fill in the form below to update your password:</p>
            </div>

            <div class="pass-form">
                <form>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label pass-label">Current Password <span class="required-mark">*</span></label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label pass-label">Password <span class="required-mark">*</span></label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label pass-label">Confirm Password <span class="required-mark">*</span></label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary pass-btn">Save Changes</button>
            </form>
        </div>
</div>
    </div>
</div>


<!-- Footer section  -->
<?php include("footer.php") ?>