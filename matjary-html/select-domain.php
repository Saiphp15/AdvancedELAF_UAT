<?php
include("functions.php");
include("header.php") 
// PHP goes here!
?>
<!-- Header section  -->


<!-- Main section  -->

<div class="container">
    <div class="domain-page-title">
        <h3>Choose your <span>Domain</span></h3>
    </div>

    <div class="domain-box">
        <div class="container">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="domain-checkbox-one" value="option1" checked>
                <label class="form-check-label" for="domain-checkbox-one">I want to use a subdomain</label>
            </div>

            <div class="row">
                <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="input-group mt-4 mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">http://</span>
                        </div>
                        <input type="text" class="form-control">
                        <div class="input-group-append">
                            <span class="input-group-text">.sa-matjary.com</span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6">
                    <button class="btn btn-primary mt-4 check-domain-btn" type="submit">Check Availability</button>
                </div>
            </div>
        
            <div class="form-check mt-4">
                <input class="form-check-input" type="radio" name="exampleRadios" id="domain-checkbox-two" value="option2">
                <label class="form-check-label" for="domain-checkbox-two">I want to use a new domain</label>
            </div>

            <div class="row">
                <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="input-group mt-4 mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">http://www.</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">com</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">info</a>
                                <a class="dropdown-item" href="#">org</a>
                                <a class="dropdown-item" href="#">biz</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6">
                    <button class="btn btn-primary mt-4 check-domain-btn" type="submit">Check Availability</button>
                </div> 
            </div>

            <div class="form-check mt-4">
                <input class="form-check-input" type="radio" name="exampleRadios" id="domain-checkbox-two" value="option2">
                <label class="form-check-label" for="domain-checkbox-two">I want to use my existing domain</label>
            </div>

            <div class="row">
                <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="input-group mt-4 mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">http://www.</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">com</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">info</a>
                                <a class="dropdown-item" href="#">org</a>
                                <a class="dropdown-item" href="#">biz</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="plan-selected mt-4">
                <p>Plan Selected: <span class="selected-plan-amt">[ SAR 459.99 ]</span></p>
            </div>

            <div class="row">
                <div class="domain-final-button">
                    <button type="button" class="btn btn-primary back-btn">Back</button>

                    <button type="button" class="btn btn-primary proceed-btn">Proceed</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer section  -->
<?php include("footer.php") ?>