<?php
include("functions.php");
include("header-ar.php")
// PHP goes here!
?>

<!-- PAGE BAR STARTS -->
<div class="page-bar">
    <div class="container">
        <div class="section-title">
            <h4>Billing</h4>
        </div>
    </div>
</div>
<!-- PAGE BAR ENDS -->

<!-- BILLING PAGE SECTION STARTS -->

<section class="section-spacing">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title mb-4 text-right">
                    <h4>Billing address</h4>
                </div>

                <div class="billing-form">
                    <div class="mb-2">
                        <input class="form-control" placeholder="Email Address*">
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <input class="form-control" placeholder="First Name*">
                        </div>

                        <div class="col-md-6 mb-2">
                            <input class="form-control" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <input class="form-control" placeholder="Address*">
                        </div>

                        <div class="col-md-6 mb-2">
                            <select class="custom-select">
                                <option selected>Country*</option>
                                <option>Saudi Arabia</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <select class="custom-select">
                                <option selected>States*</option>
                                <option>Riyadh</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-2">
                            <input class="form-control" placeholder="City*">
                        </div>
                    </div>

                    <div class="mb-2">
                        <input class="form-control" placeholder="Zip Code*">
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <input class="form-control" placeholder="Phone*">
                        </div>

                        <div class="col-md-6 mb-2">
                            <input class="form-control" placeholder="Mobile">
                        </div>
                    </div>

                    <div class="mb-2">
                        <input class="form-control" placeholder="Fax">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="section-title mb-4 text-right">
                    <h4>Shipping address</h4>

                    <div class="custom-control custom-checkbox shipping-checkbox">
                        <input type="checkbox" class="custom-control-input" id="shippingCheck">
                        <label class="custom-control-label" for="shippingCheck">Same as billing address</label>
                    </div>
                </div>

                <div class="shipping-form">
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <input class="form-control" placeholder="First Name*">
                        </div>

                        <div class="col-md-6 mb-2">
                            <input class="form-control" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <input class="form-control" placeholder="Address*">
                        </div>

                        <div class="col-md-6 mb-2">
                            <select class="custom-select">
                                <option selected>Country*</option>
                                <option>Saudi Arabia</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <select class="custom-select">
                                <option selected>States*</option>
                                <option>Riyadh</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-2">
                            <input class="form-control" placeholder="City*">
                        </div>
                    </div>

                    <div class="mb-2">
                        <input class="form-control" placeholder="Zip Code*">
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <input class="form-control" placeholder="Phone*">
                        </div>

                        <div class="col-md-6 mb-2">
                            <input class="form-control" placeholder="Mobile">
                        </div>
                    </div>

                    <div class="mb-2">
                        <input class="form-control" placeholder="Fax">
                    </div>

                    <div class="mb-2">
                        <select class="custom-select">
                            <option selected>Shipping Method</option>
                            <option>Aramex</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <button class="btn btn-primary brand-btn-black mx-auto d-block btn-lg">Checkout</button>
    </div>
</section>

<!-- BILLING PAGE SECTION ENDS -->

<!-- Footer section  -->
<?php include("footer-ar.php") ?>