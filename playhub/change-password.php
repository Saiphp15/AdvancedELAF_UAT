<?php
include("functions.php");
include("header.php");
?>

<section>
    <div class="container-fluid">
        <div class="trans-page-title">
            <h1>Change Password</h1>
        </div>
    </div>
</section>

<section class="section-spacing">
    <div class="container-fluid">
        <div class="brand-wrap">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-2">
                        <label class="brand-label text-orange">Old Password <span class="required-mark">*</span></label>
                        <input type="text" class="brand-input">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-2">
                        <label class="brand-label text-orange">New Password <span class="required-mark">*</span></label>
                        <input type="password" class="brand-input">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-2">
                        <label class="brand-label text-orange">Confirm Password <span class="required-mark">*</span></label>
                        <input type="password" class="brand-input">
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <button class="brand-btn-orange">Update</button>
        </div>
    </div>
</section>

<?php
include("footer.php");
?>