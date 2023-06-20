<?php
include("functions.php");
include("header.php");
?>

<section class="section-spacing">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5">
                <div class="giftcard-detail-image">
                    <img src="assets/images/gift-card-1.png">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="giftcard-main-detail">
                    <div class="giftcard-detail-title mb-4">
                        <h3>Gift Card Name</h3>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="giftcard-detail-data">
                                <p>E-Code</p>
                                <h5>63d0cf1136d17</h5>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="giftcard-detail-data">
                                <p>Value</p>
                                <h5>SAR 1000</h5>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="giftcard-detail-data">
                                <p>Current Balance</p>
                                <h5>SAR 1000</h5>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="giftcard-detail-data">
                                <p>Valid From</p>
                                <h5>25-01-2023</h5>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="giftcard-detail-data">
                                <p>Valid Till</p>
                                <h5>25-01-2024</h5>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="giftcard-detail-data">
                                <p>Gift Card Status</p>
                                <h5><span class="badge badge-success">Active</span></h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-right mt-3">
                    <button class="brand-btn-black">Back</button>
                </div>
            </div>
        </div>

        <div class="ui-title text-black">
            <h4>Gift Card Transaction History</h4>
        </div>

        <div class="table-wrap">
            <div class="brand-table">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Transaction ID</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Payment Status</th>
                                <th scope="col">Total Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>TST2302700639027</td>
                                <td>23-01-2023</td>
                                <td><span class="badge badge-success">Complete</span></td>
                                <td>SAR 400.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include("footer.php");
?>