<?php
include("functions.php");
include("header-ar.php")
// PHP goes here!
?>

<!-- PAGE BAR STARTS -->
<div class="page-bar">
    <div class="container">
        <div class="section-title">
            <h4>All Feedbacks</h4>
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
                    <label>Posted By</label>
                    <input readonly="" class="form-control-plaintext remove-border" value="Guest25">

                    <label>Posted On</label>
                    <input readonly="" class="form-control-plaintext remove-border" value="03-23-2022">

                    <label>Type of Feedback</label>
                    <input readonly="" class="form-control-plaintext remove-border" value="Positive">

                    <label>Feedback Comments</label>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                
                    <button class="btn btn-primary brand-btn-black-outline mx-auto d-block">Back</button>
                </div>
            </div>

            <div class="col-md-3"></div>
        </div>
    </div>
</section>

<!-- Footer section  -->
<?php include("footer-ar.php") ?>