<?php
include("functions.php");
include("header.php")
// PHP goes here!
?>

<section class="user-dashboard-wrapper">
    <div class="custom-container">
        <div class="user-sec-title">
            <h4>Billing History / Receipts</h4>
        </div>

        <div class="dash-wrap blue-bg mb-4">
            <div class="form-wrapper">
                <div class="col-md-12 col-lg-8 mx-auto">
                    <input type="search" class="form-control" placeholder="Search by Invoice Number">
                </div>
                <div class="row">
                    <div class="mx-auto">
                        <button class="btn btn-primary brand-btn-purple">Search</button>
                        <button class="btn btn-primary brand-btn-purple">Reset</button>
                    </div>
                </div>
                <div class="billing-table">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead">
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
                            <td><a href="#">1079</a></td>
                            <td>Pro 1 Month createpickuptwoo.sa-matjary.com</td>
                            <td>SAR 819.99</td>
                            <td>SAR 0.00</td>
                            <td>SAR 819.99</td>
                            <td>12/14/2021</td>
                            <td>12/14/2021</td>
                            <td>Paid</td>
                            <td>12/14/2021</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
            </div>
        </div>

        
    </div>
</section>

<!-- Footer section  -->
<?php include("footer.php") ?>