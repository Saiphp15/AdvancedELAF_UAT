<?php
include("functions.php");
include("header-ar.php");
?>

<section>
    <div class="container-fluid">
        <div class="trans-page-title text-right">
            <h1>Checkout</h1>
        </div>
    </div>
</section>

<section class="section-spacing text-right">
    <div class="container-fluid">
        <div class="ui-title text-black">
            <h4>Add New Address</h4>
        </div>

        <div class="address-wrap">
            <div class="container">
                <div class="mb-2">
                    <label class="brand-label text-orange">Address</label>
                    <textarea class="brand-input" rows="5"></textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <label class="brand-label text-orange">Country</label>
                        <select class="brand-select">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <label class="brand-label text-orange">State</label>
                        <select class="brand-select">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <label class="brand-label text-orange">City</label>
                        <select class="brand-select">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <label class="brand-label text-orange">Zipcode</label>
                        <input class="brand-input">
                    </div>
                </div>

                <div class="text-right mt-3">
                    <button class="brand-btn-orange">Save</button>
                    <button class="brand-btn-black">Reset</button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-7">
                <div class="ui-title text-black">
                    <h4>Select Delivery Address</h4>
                </div>

                <div class="select-add-wrapper">
                    <p class="text-black">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>

                    <div class="form-check">
                        <a href="#">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label del-add-label" for="exampleRadios1">
                                Deliver to this address
                            </label>
                        </a>
                    </div>

                    <div class="mt-2 text-left">
                        <button class="brand-btn-orange">Edit</button>
                        <button class="brand-btn-black">Delete</button>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-5">
                <div class="ui-title text-black">
                    <h4>Choose a Shipping Company</h4>
                </div>

                <div class="shipping-wrap">
                    <label class="brand-label text-orange">Shipping Company List</label>
                    <select class="brand-select">
                        <option>Aramex</option>
                    </select>

                    <div class="text-left mt-3">
                        <button class="brand-btn-black">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include("footer-ar.php");
?>