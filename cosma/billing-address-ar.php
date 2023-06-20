<?php
include("functions.php");
include("header-ar.php")
// PHP goes here!
?>

<!-- PAGE BAR STARTS -->
<div class="page-bar">
    <div class="container">
        <div class="section-title">
            <h4>Billing Address</h4>
        </div>
    </div>
</div>
<!-- PAGE BAR ENDS -->

<!-- BILLING ADDRESS SECTION STARTS -->

<section class="section-spacing">
    <div class="container">
        <div class="section-title text-center mb-3">
            <h4>Billing address</h4>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="bill-ship-wrapper">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label>First Name*</label>
                                <input type="text" class="form-control" value="Sami">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-2">
                                <label>Last Name</label>
                                <input type="text" class="form-control" value="Elbadawi">
                            </div>
                        </div>
                    </div>

                    <div class="mb-2">
                        <label>Billing Email*</label>
                        <input type="email" class="form-control" value="test@gmail.com">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label>Address*</label>
                                <input type="address" class="form-control" value="Al Thumamah Road">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-2">
                                <label>Country*</label>
                                <select class="custom-select">
                                    <option selected="">Saudi Arabia</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label>State*</label>
                                <input type="address" class="form-control" value="Riyadh">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-2">
                                <label>City</label>
                                <input type="address" class="form-control" value="Riyadh">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label>Zipcode*</label>
                                <input type="zip" class="form-control" value="12211">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-2">
                                <label>Phone</label>
                                <input type="tel" class="form-control" value="+966 12345 67890">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label>Mobile</label>
                                <input type="tel" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-2">
                                <label>Fax</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-block">
                        <button class="btn btn-primary brand-btn-black-outline">Back</button>
                        <button class="btn btn-primary brand-btn-black">Save</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>

<!-- BILLING ADDRESS SECTION ENDS -->

<!-- Footer section  -->
<?php include("footer-ar.php") ?>