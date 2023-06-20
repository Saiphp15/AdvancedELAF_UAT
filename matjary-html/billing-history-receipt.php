<?php
include("functions.php");
include("header.php") 
// PHP goes here!
?>
<!-- Header section  -->


<!-- Main section  -->

<div class="container">
    <div class="dashboard-page-title">
        <h2>Billing History / Receipts</h2>
    </div>

    <div class="table-filter">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search by Invoice Number" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">Search</button>
                <button class="btn btn-outline-secondary" type="button">Reset</button>
            </div>
        </div>
    <div>

    <div class="bhr-table">
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Invoice Number</th>
                        <th scope="col">Plan</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Discount</th>
                        <th scope="col">Total</th>
                        <th scope="col">Generated</th>
                        <th scope="col">Due Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Payment Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>749</td>
                        <td>3 Months</td>
                        <td>SAR 459.99</td>
                        <td>SAR 0.00</td>
                        <td>SAR 459.99</td>
                        <td>20/07/2021</td>
                        <td>20/07/2021</td>
                        <td>Paid</td>
                        <td>20/07/2021</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>

 <!-- Footer section  -->
 <?php include("footer.php") ?>