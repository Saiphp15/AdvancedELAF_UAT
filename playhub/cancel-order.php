<?php
include("functions.php");
include("header.php");
?>

<section>
    <div class="container-fluid">
        <div class="trans-page-title">
            <h1>Order Cancellation</h1>
        </div>
    </div>
</section>

<section class="section-spacing">
    <div class="container-fluid">
        <div class="ui-title text-black mb-3">
            <h4>Tracking Details</h4>
        </div>

        <div class="table-wrap">
            <div class="brand-table">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">Tracking ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3765678</td>
                                <td>6567TBV88</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="ui-title text-black mb-3">
            <h4>Order Details</h4>
        </div>

        <div class="table-wrap">
            <div class="brand-table">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Payment Mode</th>
                                <th scope="col">Transaction ID</th>
                                <th scope="col">Payment Status</th>
                                <th scope="col">Order Status</th>
                                <th scope="col">Total Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2023-01-27</td>
                                <td>Online Banking</td>
                                <td>TST2302700639027</td>
                                <td>Complete</td>
                                <td>Pending</td>
                                <td>SAR 400.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="ui-title text-black mb-3">
            <h4>Item Details</h4>
        </div>

        <div class="table-wrap">
            <div class="brand-table">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Sales Tax</th>
                                <th scope="col">Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#</td>
                                <td>T-Shirt</td>
                                <td><img src="https://uat.matjary.in/uploads/product/1671619143_8bec9ffbd468deae9c13.jpg" style="width: 70px; height:40px; object-fit: contain;"></td>
                                <td>1</td>
                                <td>SAR 200.00</td>
                                <td>SAR 20.00</td>
                                <td>SAR 220.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-8">
                <div class="ui-title text-black">
                    <h4>Shipping Address</h4>
                </div>

                <div class="select-add-wrapper">
                    <p class="text-black">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="ui-title text-black">
                    <h4>Amount Paid</h4>
                </div>

                <div class="summary-wrap">
                    <div class="total-amount text-center text-orange">
                        <h5>Grand Total: SAR 400.00</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-end">
            <div class="col-md-6 col-lg-6">
                <div class="mb-2">
                    <label class="brand-label text-orange">Reason for Cancellation</label>
                    <select class="brand-select">
                        <option>Select Reason</option>
                        <option>I changed my mind</option>
                        <option>High shipping costs and long delivery time are other popular reasons</option>
                        <option>Because The Item Will Not Be Shipped On Time</option>
                        <option>The Item Has Not Yet Been Shipped</option>
                        <option>Other Reason</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <button class="brand-btn-orange m-1">Confirm & Cancel</button>
                <button class="brand-btn-black m-1">Back to Orders</button>
            </div>
        </div>
    </div>
</section>

<?php
include("footer.php");
?>