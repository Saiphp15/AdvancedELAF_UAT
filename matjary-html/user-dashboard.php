<?php
include("functions.php");
include("header.php") 
// PHP goes here!
?>

<!-- Header section  -->


<!-- Main section  -->
<div class="container">
    <div class="dashboard-page-title">
        <h2>Dashboard</h2>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="user-dashboard-card">
                <div class="host-title">
                    <h4>Hosted On</h4>
                </div>

                <div class="host-link">
                    <a href="#">Host Link</a>
                </div>

                <div class="expiry-date">
                    Expires on: 06/10/2021
                </div>

                <button class="btn btn-primary btn-lg user-dashboard-btn" 
                        type="submit">
                     Upgrade 
                </button>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <div class="user-dashboard-card">
                <div class="host-title">
                    <h4>Hosted On</h4>
                </div>

                <div class="host-link">
                    <a href="#">Host Link</a>
                </div>

                <div class="expiry-date">
                    Expires on: 06/10/2021
                </div>

                <button class="btn btn-primary btn-lg user-dashboard-edit-btn" 
                        type="submit">
                     Edit Card Details
                </button>

                <a href="#"><span class="user-dashboard-cancel">Cancel Account</span></a>
            </div>
        </div>
    </div>

    
        <div class="dash-msg">
            <p>If you want to create more stores then kindly <a href="#">Click here</a> to continue.</p>
        </div>
</div>


<!-- Footer section  -->
<?php include("footer.php") ?>