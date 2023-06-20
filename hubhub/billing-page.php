<?php
include("functions.php");
include("header.php")
// PHP goes here!
?>

<section class="ot-banner">
    <div class="container">
        <div class="page-title">
            <h1>Billing</h1>
        </div>
    </div>
</section>

<!-- BILLING PAGE SECTION STARTS -->

<section class="section-spacing">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title mb-4">
                    <h4>Billing address</h4>
                </div>

                <div class="billing-form">
                    <div class="mb-3">
                        <input class="brand-input" placeholder="Email Address*">
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input class="brand-input" placeholder="First Name*">
                        </div>

                        <div class="col-md-6 mb-3">
                            <input class="brand-input" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input class="brand-input" placeholder="Address*">
                        </div>

                        <div class="col-md-6 mb-3">
                            <select class="brand-select">
                                <option selected="">Country*</option>
                                <option>Saudi Arabia</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <select class="brand-select">
                                <option selected="">States*</option>
                                <option>Riyadh</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <input class="brand-input" placeholder="City*">
                        </div>
                    </div>

                    <div class="mb-3">
                        <input class="brand-input" placeholder="Zip Code*">
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input class="brand-input" placeholder="Phone*">
                        </div>

                        <div class="col-md-6 mb-3">
                            <input class="brand-input" placeholder="Mobile">
                        </div>
                    </div>

                    <div class="mb-3">
                        <input class="brand-input" placeholder="Fax">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="section-title mb-4">
                    <h4>Shipping address</h4>

                    <div class="custom-control custom-checkbox shipping-checkbox">
                        <input type="checkbox" class="custom-control-input" id="shippingCheck">
                        <label class="custom-control-label" for="shippingCheck">Same as billing address</label>
                    </div>
                </div>

                <div class="shipping-form">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input class="brand-input" placeholder="First Name*">
                        </div>

                        <div class="col-md-6 mb-3">
                            <input class="brand-input" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input class="brand-input" placeholder="Address*">
                        </div>

                        <div class="col-md-6 mb-3">
                            <select class="brand-select">
                                <option selected="">Country*</option>
                                <option>Saudi Arabia</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <select class="brand-select">
                                <option selected="">States*</option>
                                <option>Riyadh</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <input class="brand-input" placeholder="City*">
                        </div>
                    </div>

                    <div class="mb-3">
                        <input class="brand-input" placeholder="Zip Code*">
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input class="brand-input" placeholder="Phone*">
                        </div>

                        <div class="col-md-6 mb-3">
                            <input class="brand-input" placeholder="Mobile">
                        </div>
                    </div>

                    <div class="mb-3">
                        <input class="brand-input" placeholder="Fax">
                    </div>

                    <div class="mb-3">
                        <select class="brand-select">
                            <option selected="">Shipping Method</option>
                            <option>Aramex</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <button class="g-brand-btn mx-auto d-block mt-3">Checkout</button>
    </div>
</section>

<!-- BILLING PAGE SECTION ENDS -->

<?php
include("footer.php")
?>