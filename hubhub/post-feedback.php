<?php
include("functions.php");
include("header.php")
// PHP goes here!
?>

<section class="ot-banner">
    <div class="container">
        <div class="page-title">
            <h1>Post a Feedback</h1>
        </div>
    </div>
</section>

<section class="section-spacing">
    <div class="container">
        <div class="section-title text-center mb-3">
            <h4>Product name</h4>
        </div>

        <div class="row">
            <div class="col-md-3"></div>

            <div class="col-md-6">
                <div class="feedback-wrapper">
                    <div class="mb-3">
                        <label>Feedback Type <span class="text-danger">*</span></label>
                        <select class="brand-select">
                            <option selected="">Positive</option>
                            <option>Negative</option>
                            <option>Neutral</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Enter Feedback <span class="text-danger">*</span></label>
                        <textarea class="brand-textarea" rows="3"></textarea>
                    </div>

                    <div class="d-grid gap-2 d-md-block">
                        <button class="brand-btn">Back</button>
                        <button class="g-brand-btn">Save</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3"></div>
        </div>
    </div>
</section>

<?php
include("footer.php")
?>