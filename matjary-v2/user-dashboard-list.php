<?php
include("functions.php");
include("header.php")
// PHP goes here!
?>

<div class="user-dashboard-wrapper">
    <div class="custom-container">
        <ul class="nav nav-pills justify-content-center mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-dashboard-tab" data-toggle="pill" href="#pills-dashboard" role="tab" aria-controls="pills-dashboard" aria-selected="true">Dashboard</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">My Profile</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-bhr-tab" data-toggle="pill" href="#pills-bhr" role="tab" aria-controls="pills-bhr" aria-selected="false">Billing History / Receipts</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-psp-tab" data-toggle="pill" href="#pills-psp" role="tab" aria-controls="pills-psp" aria-selected="false">Pending Settlements</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-dashboard" role="tabpanel" aria-labelledby="pills-dashboard-tab">Dashboard Panel</div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">My Profile Panel</div>
            <div class="tab-pane fade" id="pills-bhr" role="tabpanel" aria-labelledby="pills-contact-tab">Billing History / Receipts Panel</div>
            <div class="tab-pane fade" id="pills-psp" role="tabpanel" aria-labelledby="pills-psp-tab">Pending Settlements Panel</div>
        </div>
    </div>
</div>



<!-- Footer section  -->
<?php include("footer.php") ?>