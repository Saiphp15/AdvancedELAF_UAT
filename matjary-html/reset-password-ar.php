<?php
include("functions.php");
include("header-ar.php") 
// PHP goes here!
?>

    <!-- Header section  -->


    <!-- Main section  -->

    <div class="rp-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3"></div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="rp-page-title">
                        <h1>Reset Password</h1>
                    </div>

                    <div class="rp-card">
                        <h4 class="rp-message">Set your new Password</h4>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="icofont-ui-password"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="New Password" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="icofont-ui-password"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Confirm Password" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="d-flex justify-content-center mt-3 login_container">
                            <button type="submit" class="btn btn-primary rp-page-btn">Reset Password</button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3"></div>
            </div>
        </div>
    </div>

<!-- Footer section  -->
<?php include("footer-ar.php") ?>