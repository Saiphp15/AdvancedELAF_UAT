<?php
include("functions.php");
include("header.php")
// PHP goes here!
?>

<section class="ot-banner">
    <div class="container">
        <div class="page-title">
            <h1>Billing Address</h1>
        </div>
    </div>
</section>

<!-- BILLING ADDRESS SECTION STARTS -->

<section class="section-spacing">
    <div class="container">
        <div class="section-title text-center mb-3">
            <h2>Billing address</h2>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="bill-ship-wrapper">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label>First Name*</label>
                                <input type="text" class="brand-input" value="Sami">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-2">
                                <label>Last Name</label>
                                <input type="text" class="brand-input" value="Elbadawi">
                            </div>
                        </div>
                    </div>

                    <div class="mb-2">
                        <label>Billing Email*</label>
                        <input type="email" class="brand-input" value="test@gmail.com">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label>Address*</label>
                                <input type="address" class="brand-input" value="Al Thumamah Road">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-2">
                                <label>Country*</label>
                                <select class="brand-select">
                                    <option selected="">Saudi Arabia</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label>State*</label>
                                <input type="address" class="brand-input" value="Riyadh">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-2">
                                <label>City</label>
                                <input type="address" class="brand-input" value="Riyadh">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label>Zipcode*</label>
                                <input type="zip" class="brand-input" value="12211">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-2">
                                <label>Phone</label>
                                <input type="tel" class="brand-input" value="+966 12345 67890">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label>Mobile</label>
                                <input type="tel" class="brand-input">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-2">
                                <label>Fax</label>
                                <input type="text" class="brand-input">
                            </div>
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-block">
                        <button class="g-brand-btn">Back</button>
                        <button class="g-brand-btn">Save</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>

<!-- BILLING ADDRESS SECTION ENDS -->

<?php
include("footer.php")
?>