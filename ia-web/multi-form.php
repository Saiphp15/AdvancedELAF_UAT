<?php
include("functions.php");
include("header.php")
// PHP goes here!
?>

<div class="lb-bg section-spacing bg-dot">
    <div class="container">
        <div>
            <div class="info-banner-content text-right mt-5">
                <h3>Apply/Renew Insurance</h3>
                <h5>We request you to fill the required details mentioned below.</h5>
            </div>
        </div>
    </div>
</div>

<div class="city-bg">
    <div class="container">
        <div class="multi-form">
            <div id="svg_wrap"></div>

            <h1 class="text-center">Online Application</h1>
            <section class="step-wrapper">
                <h4>Policy Holder Details</h4>
                <!-- <input type="text" placeholder="Firstname" />
                <input type="text" placeholder="Surname" />
                <input type="text" placeholder="Birthdate" />
                <input type="text" placeholder="Insurance number" />
                <input type="text" placeholder="Family status" /> -->

                <input type="text" class="form-control mb-2" placeholder="Full Name" />
                <div class="row">
                    <div class="col-md-4">
                        <input type="email" class="form-control mb-2" placeholder="Email Address" />
                    </div>
                    <div class="col-md-4">
                        <input type="tel" class="form-control mb-2" placeholder="Contact Number" />
                    </div>
                    <div class="col-md-4">
                        <input type="date" class="form-control mb-2" placeholder="DD-MM-YY" />
                    </div>
                </div>
                <textarea type="address" class="form-control" placeholder="Address" rows="3"></textarea>
            </section>

            <section class="step-wrapper">
                <h4>Insurance Details</h4>
                <div class="text-right">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">New Application</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Renew</label>
                    </div>
                </div>


                <div class="text-right mb-2">
                    <label>Insurance Category</label>
                    <select class="form-control" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="National ID/Iqama Number/ Company MOI">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <input type="date" class="form-control mb-2" placeholder="Date of Policy to be effective" />
                    </div>
                </div>
            </section>

            <section class="step-wrapper">
                <h4>Vehicle Details</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </section>

            <section class="step-wrapper">
                <h4>Driver Details</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </section>

            <section class="step-wrapper">
                <h4>Insurance Quotes</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </section>

            <section class="step-wrapper">
                <h4>Payment</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </section>

            <section class="step-wrapper">
                <h4>Success-Insurance Details</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </section>

            <div class="mx-auto d-block">
                <div class="button" id="prev">&larr; Previous</div>
                <div class="button" id="next">Next &rarr;</div>
                <div class="button" id="submit">Agree and send application</div>
            </div>

        </div>

    </div>
</div>

<!-- Footer section  -->
<?php include("footer.php") ?>