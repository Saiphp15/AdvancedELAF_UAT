<?php
include("functions.php");
include("header.php")
// PHP goes here!
?>
<!-- Header section  -->


<!-- Main section  -->

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="billing-title">
                <p>Please enter your billing info</p>
            </div>

            <div class="billing-form">
                <form>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">First Name <span class="required-mark">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Last Name <span class="required-mark">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Email <span class="required-mark">*</span></label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Phone <span class="required-mark">*</span></label>
                        <div class="col-sm-8">
                            <input type="phone" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Address <span class="required-mark">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Country <span class="required-mark">*</span></label>
                        <div class="col-sm-8">
                            <select id="inputState" class="form-control">
                                <option selected>Saudi Arabia</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">State <span class="required-mark">*</span></label>
                        <div class="col-sm-8">
                            <select id="inputState" class="form-control">
                                <option selected>Riyadh</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">City <span class="required-mark">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Zip/Postal Code <span class="required-mark">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="billing-title">
                <p>Item Details</p>
            </div>

            <div class="billing-form">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Plan Name</th>
                                <th scope="col">Billing Duration</th>
                                <th scope="col">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3 Month</td>
                                <td>Monthly</td>
                                <td>SAR459.99</td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>Subtotal</td>
                                <td>SAR459.99</td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>Discount</td>
                                <td>SAR0.00</td>
                            </tr>

                            <tr class="total-row">
                                <td></td>
                                <td>Total</td>
                                <td>SAR459.99</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="billing-form">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter Coupon Code">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary coupon-btn" type="button">Apply</button>
                    </div>
                </div>
            </div>

            <div class="billing-title">
                <p>Select Payment Options</p>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="payment-card authorize-image">
                        <img src="image/authorizenet_logo.png" class="img-fluid" />
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="payment-card">
                        <img src="image/stripe_logo.png" class="img-fluid" />
                    </div>
                </div>
            </div>


            <div id="authorize-payment" class="authorize-net-card-form">
                <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Card Number <span class="required-mark">*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Expiry Date (MM/YYYY)<span class="required-mark">*</span></label>
                    <div class="col-sm-3 mt-3">
                        <div class="input-group">
                            <select class="custom-select" id="inputGroupSelect04">
                                <option selected>01</option>
                                <option value="1">02</option>
                                <option value="2">03</option>
                                <option value="3">04</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-3 mt-3">
                        <div class="input-group">
                            <select class="custom-select" id="inputGroupSelect04">
                                <option selected>2021</option>
                                <option value="1">2022</option>
                                <option value="2">2023</option>
                                <option value="3">2024</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-6 col-form-label">CVV/CVV2 No. <span class="required-mark">*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="auth-pay-btn">
                        <button type="button" class="btn btn-primary back-btn back-pay-btn">Back</button>

                        <button type="button" class="btn btn-primary proceed-btn">Pay Now</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- Footer section  -->
<?php include("footer.php") ?>