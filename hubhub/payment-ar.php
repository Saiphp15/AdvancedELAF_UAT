<?php
include("functions.php");
include("header-ar.php")
// PHP goes here!
?>

<section class="ot-banner">
    <div class="container">
        <div class="page-title">
            <h1>Payment</h1>
        </div>
    </div>
</section>

<!-- PAYMENT SECTION STARTS -->

<section class="section-spacing">
    <div class="container">
        <div class="section-title text-center mb-3">
            <h4>Select a Payment Option</h4>
        </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="payment-wrapper text-right">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Total to pay</label>
                        <div class="col-sm-9">
                            <p>20196.00</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Total shipping cost</label>
                        <div class="col-sm-9">
                            <p>10.00</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Grand total</label>
                        <div class="col-sm-9">
                            <p>20206.00</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Balance credits</label>
                        <div class="col-sm-9">
                            <p>0.00</p>
                        </div>
                    </div>

                    <label class="col-form-label giftcard-link" id="giftCardOption">
                        Use Gift Card
                    </label>

                    <div class="form-group giftCardInput">
                        <input class="brand-input mb-2" placeholder="Enter Gift Card Code">
                        <div class="text-center">
                            <button class="g-brand-btn">Pay using giftcard</button>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Pay using paytabs</label>
                        <div class="col-sm-9">
                            <a href="#">
                                <img class="img-fluid" src="assets/images/paytabs.png">
                            </a>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Pay Offline</label>
                        <div class="col-sm-9">
                            <button class="g-brand-btn">Cash on Delivery</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>

<!-- PAYMENT SECTION ENDS -->

<?php
include("footer-ar.php")
?>