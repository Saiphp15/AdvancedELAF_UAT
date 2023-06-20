<?php
include("functions.php");
include("header-ar.php")
// PHP goes here!
?>

<section class="section-spacing">
    <div class="container">
        <div class="pay-wrap blue-bg">
            <div class="success-checkmark">
                <div class="check-icon">
                    <span class="icon-line line-tip"></span>
                    <span class="icon-line line-long"></span>
                    <div class="icon-circle"></div>
                    <div class="icon-fix"></div>
                </div>
            </div>

            <div class="payment-msg text-center">
                <h4>Payment Successful</h4>
                <p>Your payment was successful, you can now continue using Matjary.</p>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="payment-wrapper">
                        <div class="payment-col-title">
                            <h4>Payment Details</h4>
                        </div>

                        <div class="table-responsive">
                            <table class="table mb-0">
                                <tbody>
                                    <tr>
                                        <td>Order Id</td>
                                        <td></td>
                                        <td>#75676</td>
                                    </tr>

                                    <tr>
                                        <td>Transaction Id</td>
                                        <td></td>
                                        <td>#789678</td>
                                    </tr>

                                    <tr>
                                        <td>Status</td>
                                        <td></td>
                                        <td>Active</td>
                                    </tr>

                                    <tr class="total-row">
                                        <td>Total</td>
                                        <td></td>
                                        <td>SAR459.99</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="payment-wrapper">
                        <div class="payment-col-title">
                            <h4>Store Details</h4>
                        </div>

                        <div class="table-responsive">
                            <table class="table mb-0">
                                <tbody>
                                    <tr>
                                        <td>Store URL</td>
                                        <td></td>
                                        <td><a href="#">sultanstore.matjary.in</a></td>
                                    </tr>

                                    <tr>
                                        <td>Admin URL</td>
                                        <td></td>
                                        <td><a href="#">sultanstore.matjary.in/admin</a></td>
                                    </tr>

                                    <tr>
                                        <td>Status</td>
                                        <td></td>
                                        <td>Active</td>
                                    </tr>

                                    <tr class="total-row">
                                        <td>Total</td>
                                        <td></td>
                                        <td>SAR459.99</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-3 text-center">
                    <button class="btn btn-primary brand-btn-pink">Go Home</button>
                </div>
        </div>
    </div>
</section>

<!-- Footer section  -->
<?php include("footer-ar.php") ?>