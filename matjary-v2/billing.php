<?php
include("functions.php");
include("header.php")
// PHP goes here!
?>

<section>
    <div class="custom-container">
        <div class="billing-form-wrapper blue-bg">
            <h3>Please enter your billing info</h3>
            <div class="form-wrapper">
                <div class="form-row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="First Name*">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Last Name*">
                    </div>

                    <div class="col-md-6">
                        <input type="email" class="form-control" placeholder="Email Address*">
                    </div>

                    <div class="col-md-6">
                        <input type="tel" class="form-control" placeholder="Contact Number*">
                    </div>

                    <div class="col-md-6 col-lg">
                        <input type="text" class="form-control" placeholder="Address*">
                    </div>

                    <div class="col-md-6 col-lg">
                        <select class="form-control">
                            <option selected="">Country*</option>
                            <option>Saudi Arabia</option>
                        </select>
                    </div>

                    <div class="col-md-6 col-lg">
                        <select class="form-control">
                            <option selected="">City*</option>
                            <option>Riyadh</option>
                        </select>
                    </div>

                    <div class="col-md-6 col-lg">
                        <input type="text" class="form-control" placeholder="Zip/Postal Code*">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="billing-table-wrapper">
                    <div class="table-title">
                        <h4>Item details</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead billing-thead">
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

                    <div class="form-wrapper">
                        <div class="form-row">
                            <div class="col-lg-6">
                                <input type="text" class="form-control mb-2 coupon-field" placeholder="Enter coupon code">
                            </div>
                            <div class="col-lg-3">
                                <button class="btn btn-primary brand-btn-pink pl-4 pr-4 align-mid">Apply</button>
                            </div>
                            <div class="col-lg-3">
                                <button class="btn btn-primary brand-btn-purple pl-4 pr-4 align-mid">Remove</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="billing-payment-wrapper">
                    <div class="payment-title">
                        <h4>Select Payment Options</h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="payment-card-wrapper">
                                <img class="img-fluid" src="assets/images/authorizenet_logo.png">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="payment-card-wrapper">
                                <img class="img-fluid" src="assets/images/stripe_logo.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer section  -->
<?php include("footer.php") ?>