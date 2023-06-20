<?php
include("functions.php");
include("header.php")
// PHP goes here!
?>

<!-- PAGE BAR STARTS -->
<div class="page-bar">
    <div class="container">
        <div class="section-title">
            <h4>Order details</h4>
        </div>
    </div>
</div>
<!-- PAGE BAR ENDS -->

<!-- ORDER DETAIL TABLE STARTS -->

<section class="section-spacing">
    <div class="container">
        <div class="section-title mb-3">
            <h4>Order details</h4>
        </div>

        <div class="order-detail-table">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Order Number</th>
                            <th scope="col">Order Date</th>
                            <th scope="col">Payment Status</th>
                            <th scope="col">Transaction ID</th>
                            <th scope="col">Order Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <h6>28 March, 06:03 PM, 2022</h6>
                            </td>
                            <td>
                                <h6>Paid</h6>
                            </td>
                            <td>
                                <h6>TST2208700476016</h6>
                            </td>
                            <td>
                                <h6>Completed</h6>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="section-title mb-3">
            <h4>Items details</h4>
        </div>

        <div class="order-detail-table">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Giftcard Number</th>
                            <th scope="col">Tax Included</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Discounted amount</th>
                            <th scope="col">Subtotal</th>
                            <th scope="col">Item Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">GFCRD2(Gift Card)</th>
                            <td>
                                <h6>No</h6>
                            </td>
                            <td>
                                <h6>1</h6>
                            </td>
                            <td>
                                <h6>20.00</h6>
                            </td>
                            <td>
                                <h6>20.00</h6>
                            </td>
                            <td>
                                <h6>0.00</h6>
                            </td>
                            <td>
                                <h6>20.00</h6>
                            </td>
                            <td>
                                <h6>Completed</h6>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="section-title mb-3">
            <h4>Billing address</h4>
        </div>

        <div class="cart-total-wrapper">
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="cart-structure-name">Name</td>
                            <td>
                                <div class="cart-price">
                                    <h5>Sami Elbadawi</h5>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="cart-structure-name">Address</td>
                            <td>
                                <div class="cart-price">
                                    <h5>Al-Thumamah Road, Riyadh, Saudi Arabia, 12211</h5>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="cart-structure-name">Phone</td>
                            <td>
                                <div class="cart-price">
                                    <h5>1234567890</h5>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="section-title mb-3">
                    <h4>Amount Paid</h4>
                </div>

                <div class="cart-total-wrapper">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="cart-structure-name">Product subtotal</td>
                                    <td>
                                        <div class="cart-price">
                                            <h5>20.00</h5>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart-structure-name">Tax Name</td>
                                    <td>
                                        <div class="cart-price">
                                            <h5>Saudi Tax (2%)</h5>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart-structure-name">Tax Amount</td>
                                    <td>
                                        <div class="cart-price">
                                            <h5>0.00</h5>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart-structure-name">Promocode Discount</td>
                                    <td>
                                        <div class="cart-price">
                                            <h5>0.00</h5>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart-structure-name">Grand total</td>
                                    <td>
                                        <div class="cart-price">
                                            <h5>20.00</h5>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="section-title mb-3">
                    <h4>Order Details</h4>
                </div>

                <div class="cart-total-wrapper">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="cart-structure-name">Payment Method</td>
                                    <td>
                                        <div class="cart-price">
                                            <h5>Paytabs</h5>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="back-btn">
            <button class="btn btn-primary brand-btn-black-outline float-right">Back to orders</button>
        </div>
    </div>
</section>

<!-- ORDER DETAIL TABLE ENDS -->

<!-- Footer section  -->
<?php include("footer.php") ?>