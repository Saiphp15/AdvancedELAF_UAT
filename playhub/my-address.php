<?php
include("functions.php");
include("header.php");
?>

<section>
    <div class="container-fluid">
        <div class="trans-page-title">
            <h1>My Address</h1>
        </div>
    </div>
</section>

<section class="section-spacing">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-6 col-lg-4">
                <div class="brand-wrap mb-2">
                    <div class="my-add text-black">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    </div>
                    <div class="text-right">
                        <button class="brand-btn-orange m-1">Edit</button>
                        <button class="brand-btn-black m-1">Delete</button>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="brand-wrap mb-2">
                    <div class="my-add text-black">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    </div>
                    <div class="text-right">
                        <button class="brand-btn-orange m-1">Edit</button>
                        <button class="brand-btn-black m-1">Delete</button>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="brand-wrap mb-2">
                    <div class="my-add text-black">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    </div>
                    <div class="text-right">
                        <button class="brand-btn-orange m-1">Edit</button>
                        <button class="brand-btn-black m-1">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui-title text-black">
            <h4>Add a New Address</h4>
        </div>

        <div class="brand-wrap">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-2">
                        <label class="brand-label text-orange">Address</label>
                        <textarea class="brand-input" rows="3" placeholder="Enter delivery address..."></textarea>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="mb-2">
                        <label class="brand-label text-orange">Country</label>
                        <select class="brand-select">
                            <option>Select Country</option>
                        </select>
                    </div>

                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="mb-2">
                        <label class="brand-label text-orange">State</label>
                        <select class="brand-select">
                            <option>Select State</option>
                        </select>
                    </div>

                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="mb-2">
                        <label class="brand-label text-orange">City</label>
                        <select class="brand-select">
                            <option>Select City</option>
                        </select>
                    </div>

                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="mb-2">
                        <label class="brand-label text-orange">Zipcode</label>
                        <input class="brand-input">
                    </div>
                </div>
            </div>

            <div class="text-right">
                <button class="brand-btn-orange m-1">Save</button>
                <button class="brand-btn-black m-1">Reset</button>
            </div>
        </div>
    </div>
</section>

<?php
include("footer.php");
?>