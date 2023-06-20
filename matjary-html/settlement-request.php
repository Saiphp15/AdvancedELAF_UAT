<?php
include("functions.php");
include("header.php") 
// PHP goes here!
?>
<!-- Header section  -->


<!-- Main section  -->

<div class="container">
    <div class="dashboard-page-title">
        <h2>Settlement Request</h2>
    </div>

    <div class="sr-form">
        <form>
            <div class="form-group row">
            <label class="col-sm-3 col-form-label acc-label">Requested Amount (SAR) <span class="required-mark">*</span></label>
                <div class="col-sm-5">
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="form-group row">
            <label class="col-sm-3 col-form-label acc-label">Description <span class="required-mark">*</span></label>
                <div class="col-sm-5">
                    <input type="text" class="form-control">
                </div>
            </div>
        </form>
    </div>

    <div class="row sr-btn-spacing">

        <div class="col-xs-12 xol-sm-12 col-md-6 col-lg-6 col-xl-6">
            <button class="btn btn-primary btn-lg sr-btn float-right" 
                        type="submit">
                     Save Changes
            </button>
        </div>
    </div>
</div>

 <!-- Footer section  -->
 <?php include("footer.php") ?>