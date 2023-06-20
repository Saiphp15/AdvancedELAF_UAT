<?php
include("functions.php");
include("header.php");
?>

<section>
    <div class="container-fluid">
        <div class="trans-page-title">
            <h1>My Profile</h1>
        </div>
    </div>
</section>

<section class="section-spacing">
    <div class="container-fluid">
        <div class="brand-wrap">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="mb-2">
                        <label class="brand-label text-orange">Name</label>
                        <input type="text" class="brand-input">
                    </div>
                </div>

                <div class="col-md-3 col-lg-4">
                    <div class="mb-2">
                        <label class="brand-label text-orange">Profile Picture</label>
                        <input type="file" class="brand-input">
                    </div>
                </div>

                <div class="col-md-3 col-lg-2">
                    <div class="profile-image mb-2">
                        <img src="https://uat.matjary.in/store_admin/assets/images/profile_default_image.png">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-2">
                        <label class="brand-label text-orange">Email Address</label>
                        <input type="text" readonly="" class="form-control-plaintext b-none brand-input" value="s.ahmed@advancedelaf.com">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-2">
                        <label class="brand-label text-orange">Contact Number</label>
                        <input type="text" class="brand-input">
                    </div>
                </div>

                <div class="col-md-12">
                    <label class="brand-label text-orange">Address</label>
                    <textarea class="brand-input" rows="3"></textarea>
                </div>

                <div class="col-md-6 col-lg-3">
                    <label class="brand-label text-orange">Country</label>
                    <select class="brand-select">
                        <option>Select Country</option>
                    </select>
                </div>

                <div class="col-md-6 col-lg-3">
                    <label class="brand-label text-orange">Country</label>
                    <select class="brand-select">
                        <option>Select State</option>
                    </select>
                </div>

                <div class="col-md-6 col-lg-3">
                    <label class="brand-label text-orange">Country</label>
                    <select class="brand-select">
                        <option>Select City</option>
                    </select>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="mb-2">
                        <label class="brand-label text-orange">Zipcode</label>
                        <input type="text" class="brand-input">
                    </div>
                </div>
            </div>
        </div>

        <div class="text-right">
            <button class="brand-btn-orange">Save</button>
            <a href="#" class="brand-btn-black">Change Password</a>
            <a href="#" class="brand-btn-orange">Cancel</a>
        </div>
    </div>
</section>

<?php
include("footer.php");
?>