<?php
include("functions.php");
include("header-ar.php")
// PHP goes here!
?>

<!-- PAGE BAR STARTS -->
<div class="page-bar">
    <div class="container">
        <div class="section-title">
            <h4>Post a Feedback</h4>
        </div>
    </div>
</div>
<!-- PAGE BAR ENDS -->

<section class="section-spacing">
    <div class="container">
        <div class="section-title text-center mb-3">
            <h4>Product name</h4>
        </div>

        <div class="row">
            <div class="col-md-3"></div>

            <div class="col-md-6">
                <div class="feedback-wrapper text-right">
                    <div class="mb-2">
                        <label>Feedback Type*</label>
                        <select class="custom-select">
                            <option selected="">Positive</option>
                            <option>Negative</option>
                            <option>Neutral</option>
                        </select>
                    </div>

                    <div class="mb-2">
                        <label>Enter Feedback*</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>

                    <div class="d-grid gap-2 d-md-block">
                        <button class="btn btn-primary brand-btn-black-outline">Back</button>
                        <button class="btn btn-primary brand-btn-black">Save</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3"></div>
        </div>
    </div>
</section>

<!-- Footer section  -->
<?php include("footer-ar.php") ?>