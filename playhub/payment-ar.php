<?php
include("functions.php");
include("header-ar.php");
?>

<section>
    <div class="container-fluid">
        <div class="trans-page-title text-right">
            <h1>Payment</h1>
        </div>
    </div>
</section>

<section class="section-spacing text-right">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-lg-8">
                <div class="ui-title text-black">
                    <h4>Select Payment Method</h4>
                </div>

                <div class="pay-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <input class="form-check-input" type="radio" name="Radios" id="Radios1" value="option1" checked>
                                <label class="form-check-label pay-label" for="Radios1">
                                    Online Payment
                                </label>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="Radios" id="Radios2" value="option2">
                                    <label class="form-check-label pay-label" for="Radios2">
                                        Cash on Delivery
                                    </label>
                                </div>
                            </div>


                            <div class="col-lg-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="Radios" id="Radios3" value="option3">
                                    <label class="form-check-label pay-label" for="Radios3">
                                        Gift Card Payment
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="ui-title text-black">
                    <h4>Order Summary</h4>
                </div>

                <div class="summary-wrap">
                    <div class="border-bottom mb-2">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <label class="text-black">Cart Amount</label>
                            </div>

                            <div class="col-6 text-left">
                                <h6>SAR 200.00</h6>
                            </div>
                        </div>
                    </div>

                    <div class="border-bottom mb-2">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <label class="text-black">Delivery</label>
                            </div>

                            <div class="col-6 text-left">
                                <h6>SAR 200.00</h6>
                            </div>
                        </div>
                    </div>

                    <div class="total-amount text-center text-orange">
                        <h5>Total Amount: SAR 400.00</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include("footer-ar.php");
?>