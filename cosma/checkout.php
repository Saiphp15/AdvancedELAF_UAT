<?php
include("functions.php");
include("header.php")
// PHP goes here!
?>

<!-- PAGE BAR STARTS -->
<div class="page-bar">
    <div class="container">
        <div class="section-title">
            <h4>Checkout</h4>
        </div>
    </div>
</div>
<!-- PAGE BAR ENDS -->

<!-- CHECKOUT SECTION STARTS -->

<section class="section-spacing">
    <div class="container">
        <div class="section-title text-center mb-3">
            <h4>Shipping Address</h4>
        </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="checkout-wrapper">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <p>Sultan Ahmed Siddiqui</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                            <p>Al Thumamah Road, Riyadh-12211, Saudi Arabia.</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Phone</label>
                        <div class="col-sm-9">
                            <p>+966 12345 67890</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Shipping Method Chosen</label>
                        <div class="col-sm-9">
                            <p>Aramex</p>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary btn-lg btn-block brand-btn-black">Continue</button>
                    <button type="button" class="btn btn-secondary btn-lg btn-block brand-btn-black-outline">Back</button>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>

<!-- CHECKOUT SECTION ENDS -->

<!-- Footer section  -->
<?php include("footer.php") ?>