<?php
include("functions.php");
include("header-ar.php")
// PHP goes here!
?>

<section class="ot-banner">
    <div class="container">
        <div class="page-title">
            <h1>My Orders</h1>
        </div>
    </div>
</section>

<!-- MY ORDER TABLE STARTS -->

<section class="section-spacing">
    <div class="container">
        <div class="row mb-3 align-items-center">
            <div class="col-md-3">
                <div class="order-filter-wrapper">
                    <select class="brand-select">
                        <option selected="">Order Number</option>
                        <option>Order Status</option>
                        <option>Payment Method</option>
                        <option>Date of Order (mm-dd-yy)</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="order-filter-wrapper">
                    <input type="text" class="brand-input">
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-inline">
                    <button class="g-brand-btn">Search</button>
                    <button class="db-brand-btn mr-1">Clear</button>
                </div>
            </div>
        </div>

        <div class="order-table-count text-right">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="order-table-title" scope="col">#</th>
                            <th class="order-table-title" scope="col">Order Number</th>
                            <th class="order-table-title" scope="col">Order Date</th>
                            <th class="order-table-title" scope="col">Total</th>
                            <th class="order-table-title" scope="col">Payment Menthod</th>
                            <th class="order-table-title" scope="col">Order Status</th>
                            <th class="order-table-title" scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td class="order-number-data"><h5><a href="#">11</a></h5></td>
                            <td class="order-date"><h5>28th March, 06:03 PM, 2022</h5></td>
                            <td class="order-total"><h5>20.00</h5></td>
                            <td class="order-payment"><h5>PayTabs</h5></td>
                            <td class="order-status"><h5>Completed</h5></td>
                            <td class="order-detail-link">
                                <a href="order-details-ar.php">Details</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <button class="db-brand-btn mx-auto d-block">Back</button>
    </div>
</section>

<!-- MY ORDER TABLE ENDS -->

<?php
include("footer-ar.php")
?>