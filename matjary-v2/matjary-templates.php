<?php
include("functions.php");
include("header.php")
// PHP goes here!
?>

<!-- CHOOSE DOMAIN MODAL STARTS -->

<div class="modal fade" id="chooseDomainModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content chooseDomain-modal-content">
            <div class="modal-header chooseDomain-modal-header">
                <img src="assets/images/logo-2.png">
                <button type="button" class="close chooseDomain-modal-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body chooseDomain-modal-body">
                <h4 class="chooseDomain-modal-title">Choose your <span class="matjary-font">Domain</span></h4>
                <h4 class="chooseDomain-modal-title">Plan Selected: <span class="pink-highlighter font-weight-bold">SAR 459</span></h4>

                <div class="chooseDomain-modal-form">
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="domain-checkbox-one" value="option1" checked="">
                        <label class="form-check-label" for="domain-checkbox-one">I want to use a subdomain</label>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text domain-group-text">http://</span>
                        </div>
                        <input type="text" class="form-control">
                        <div class="input-group-append">
                            <span class="input-group-text domain-group-text">.sa-matjary.com</span>
                        </div>
                    </div>

                    <button class="btn btn-primary brand-btn-pink-popup mx-auto d-block">Check Availability</button>

                    <div class="form-check mt-3 mb-2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="domain-checkbox-two" value="option2">
                        <label class="form-check-label" for="domain-checkbox-two">I want to use a new domain</label>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text domain-group-text">http://www.</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary dropdown-toggle domain-group-text" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">.com</button>
                            <div class="dropdown-menu" style="will-change: transform;">
                                <a class="dropdown-item" href="#">.info</a>
                                <a class="dropdown-item" href="#">.org</a>
                                <a class="dropdown-item" href="#">.biz</a>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary brand-btn-pink-popup mx-auto d-block">Check Availability</button>

                    <div class="form-check mt-3 mb-2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="domain-checkbox-two" value="option2">
                        <label class="form-check-label" for="domain-checkbox-two">I want to use my existing domain</label>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text domain-group-text">http://www.</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary dropdown-toggle domain-group-text" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">.com</button>
                            <div class="dropdown-menu" style="will-change: transform;">
                                <a class="dropdown-item" href="#">.info</a>
                                <a class="dropdown-item" href="#">.org</a>
                                <a class="dropdown-item" href="#">.biz</a>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary mt-2 brand-btn-purple-popup mx-auto d-block">Proceed</button>
                </div>
            </div>
            <div class="modal-footer chooseDomain-modal-footer">
                <small>Powered by <a href="https://advancedelaf.com" target="_blank">Advanced Elaf</a></small>
            </div>
        </div>
    </div>
</div>

<!-- CHOOSE DOMAIN MODAL ENDS -->

<!-- TEMPLATE SECTION ONE STARTS -->

<section>
    <div class="custom-container">
        <div class="template-wrapper">
            <div class="template-title-wrapper blue-bg">
                <h3 class="wow fadeInDown">Choose your favourite Template</h3>
                <h5 class="wow fadeInUp">Setup your store with <span class="purple-highlighter matjary-font">MATJARY'S</span> world-class templates</h5>
                <h5 class="wow fadeInUp">and make remarkable sales.</h5>
            </div>
        </div>
    </div>
</section>

<!-- TEMPLATE SECTION ONE ENDS -->

<!-- TEMPLATE SECTION TWO STARTS -->

<section class="section-spacing">
    <div class="custom-container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="template-card wow fadeIn" data-wow-delay="300ms">
                    <img class="img-fluid" src="assets/images/template-01.png">
                    <h4>Template Name</h4>
                    <p>This minimalist design is easy and intuitive for your customers. Numerous color options. Grid design style....</p>
                    <button class="btn btn-primary brand-btn-purple align-mid" data-toggle="modal" data-target="#chooseDomainModal">Select Template</button>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="template-card wow fadeIn" data-wow-delay="600ms">
                    <img class="img-fluid" src="assets/images/template-01.png">
                    <h4>Template Name</h4>
                    <p>This minimalist design is easy and intuitive for your customers. Numerous color options. Grid design style....</p>
                    <button class="btn btn-primary brand-btn-purple align-mid" data-toggle="modal" data-target="#chooseDomainModal">Select Template</button>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="template-card wow fadeIn" data-wow-delay="900ms">
                    <img class="img-fluid" src="assets/images/template-01.png">
                    <h4>Template Name</h4>
                    <p>This minimalist design is easy and intuitive for your customers. Numerous color options. Grid design style....</p>
                    <button class="btn btn-primary brand-btn-purple align-mid" data-toggle="modal" data-target="#chooseDomainModal">Select Template</button>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="template-card wow fadeIn" data-wow-delay="900ms">
                    <img class="img-fluid" src="assets/images/template-01.png">
                    <h4>Template Name</h4>
                    <p>This minimalist design is easy and intuitive for your customers. Numerous color options. Grid design style....</p>
                    <button class="btn btn-primary brand-btn-purple align-mid" data-toggle="modal" data-target="#chooseDomainModal">Select Template</button>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="template-card wow fadeIn" data-wow-delay="900ms">
                    <img class="img-fluid" src="assets/images/template-01.png">
                    <h4>Template Name</h4>
                    <p>This minimalist design is easy and intuitive for your customers. Numerous color options. Grid design style....</p>
                    <button class="btn btn-primary brand-btn-purple align-mid" data-toggle="modal" data-target="#chooseDomainModal">Select Template</button>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="template-card wow fadeIn" data-wow-delay="900ms">
                    <img class="img-fluid" src="assets/images/template-01.png">
                    <h4>Template Name</h4>
                    <p>This minimalist design is easy and intuitive for your customers. Numerous color options. Grid design style....</p>
                    <button class="btn btn-primary brand-btn-purple align-mid" data-toggle="modal" data-target="#chooseDomainModal">Select Template</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer section  -->
<?php include("footer.php") ?>