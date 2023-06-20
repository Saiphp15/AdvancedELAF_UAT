<?php
include("functions.php");
include("header.php") 
// PHP goes here!
?>
<!-- Header section  -->


<!-- Main section  -->

<div class="container">
    <div class="main-dash-sec">
        <div class="row">
            <div class="col-sm-12 col-xs-12 col-md-4 col-lg-4 col-xl-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-dashboard-list" data-toggle="list" href="#list-dashboard" role="tab" aria-controls="dashboard">Dashboard</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">My Profile</a>
                    <a class="list-group-item list-group-item-action" id="list-bhr-list" data-toggle="list" href="#list-bhr" role="tab" aria-controls="bhr">Billing History / Receipts</a>
                    <a class="list-group-item list-group-item-action" id="list-pend-sett-list" data-toggle="list" href="#list-pend-sett" role="tab" aria-controls="pend-sett">Settings</a>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-md-8 col-lg-8 col-xl-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-dashboard" role="tabpanel" aria-labelledby="list-dashboard-list">Dashboard Panel</div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">My Profile Panel</div>
                    <div class="tab-pane fade" id="list-bhr" role="tabpanel" aria-labelledby="list-bhr-list">Billing History / Receipts Panel</div>
                    <div class="tab-pane fade" id="list-pend-sett" role="tabpanel" aria-labelledby="list-pend-sett-list">Pending Settlements Panel</div>
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- Footer section  -->
 <?php include("footer.php") ?>