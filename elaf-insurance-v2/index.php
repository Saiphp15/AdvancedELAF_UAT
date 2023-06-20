<?php
include("functions.php");
include("header.php")
?>

<div class="grey-bg">
    <section class="home-section-one">
        <div class="hero-content">
            <div class="container">
                <div class="hero-text text-center mt-3 mb-5">
                    <h5>Get your vehicle insured within minutes</h5>
                    <h1>We made Vehicle Inusrance <span class="black-highlight">Easy for you!</span></h1>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div id="banner-hero-carousel" class="carousel slide hero-carousel" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-interval="2000">
                                    <img src="assets/images/banner-image-1.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item" data-interval="4000">
                                    <img src="assets/images/banner-image-2.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-form-text mb-4">
                            <h6>Experience the fastest, safest and reliable insurance platform in Saudi Arabia.</h6>
                        </div>

                        <div class="form-tab">
                            <ul class="nav nav-tabs mb-2 banner-form-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link banner-form-links active " id="tpl-tab" data-toggle="tab" href="#tpl" role="tab" aria-controls="tpl" aria-selected="true">TPL</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link banner-form-links" id="comprehensive-tab" data-toggle="tab" href="#comprehensive" role="tab" aria-controls="comprehensive" aria-selected="false">Comprehensive</a>
                                </li>
                            </ul>
                            <div class="tab-content tab-content-form" id="myTabContent">
                                <div class="tab-pane fade show active" id="tpl" role="tabpanel" aria-labelledby="tpl-tab">
                                    <div class="floating-label">
                                        <select class="floating-select" onclick="this.setAttribute('value', this.value);" value="">
                                            <option value=""></option>
                                            <option value="1">Two Wheeler</option>
                                            <option value="2">Four Wheeler</option>
                                        </select>
                                        <span class="highlight"></span>
                                        <label>Choose vehicle type</label>
                                    </div>

                                    <div class="floating-label mb-4">
                                        <input class="floating-input" type="text" placeholder=" ">
                                        <span class="highlight"></span>
                                        <label>National ID/Iqama Num/Company MOI</label>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="floating-label mb-4">
                                                <input class="floating-input" type="text" onclick="(this.type='date')" placeholder=" ">
                                                <span class="highlight"></span>
                                                <label>Date of policy to be effective</label>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="floating-label mb-4">
                                                <input class="floating-input" type="text" placeholder=" ">
                                                <span class="highlight"></span>
                                                <label>Enter Captcha</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button class="brand-btn">Submit</button>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="comprehensive" role="tabpanel" aria-labelledby="comprehensive-tab">
                                    <div class="floating-label">
                                        <select class="floating-select" onclick="this.setAttribute('value', this.value);" value="">
                                            <option value=""></option>
                                            <option value="1">Two Wheeler</option>
                                            <option value="2">Four Wheeler</option>
                                        </select>
                                        <span class="highlight"></span>
                                        <label>Choose vehicle type</label>
                                    </div>

                                    <div class="floating-label mb-4">
                                        <input class="floating-input" type="text" placeholder=" ">
                                        <span class="highlight"></span>
                                        <label>National ID/Iqama Num/Company MOI</label>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="floating-label mb-4">
                                                <input class="floating-input" type="text" onclick="(this.type='date')" placeholder=" ">
                                                <span class="highlight"></span>
                                                <label>Date of policy to be effective</label>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="floating-label mb-4">
                                                <input class="floating-input" type="text" placeholder=" ">
                                                <span class="highlight"></span>
                                                <label>Enter Captcha</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button class="brand-btn">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-section-two section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="achievement-wrapper">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h3>95%</h3>
                            </div>
                            <div class="col-6">
                                <i class="icofont-star"></i>
                            </div>
                        </div>
                        <h5>Customer Satisfaction</h5>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="achievement-wrapper">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h3>90+ Cr</h3>
                            </div>
                            <div class="col-6">
                                <i class="icofont-simple-smile achievement-smile"></i>
                            </div>
                        </div>
                        <h5>Happy Customers</h5>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="achievement-wrapper">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h3>99%</h3>
                            </div>
                            <div class="col-6">
                                <i class="icofont-diamond achievement-diamond"></i>
                            </div>
                        </div>
                        <h5>Quality Service</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="section-spacing">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="features-content feature-border">
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <div class="features-icon text-md-center mb-3">
                                <i class="icofont-chart-line-alt"></i>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="features-detail">
                                <h5>Incredibly Low Prices</h5>
                                <p>We thrive to provide the lowest insurance
                                    yet beneficial policies for our customers.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="features-content feature-border">
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <div class="features-icon text-md-center mb-3">
                                <i class="icofont-money"></i>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="features-detail">
                                <h5>High Savings</h5>
                                <p>We make sure that our customers make
                                    highest saving possible on each plan.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="features-content feature-border">
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <div class="features-icon text-md-center mb-3">
                                <i class="icofont-safety"></i>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="features-detail">
                                <h5>Fully Secured</h5>
                                <p>Your transactions and details are
                                    completely secured with us.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="feature-banner">
                    <img class="img-fluid" src="assets/images/home-image-1.png">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="grey-bg">
    <section class="home-section-three section-spacing">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="covered-title">
                        <h3>What our insurance partners cover under their insurance policies?</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="covered-wrapper">
                                <img src="assets/images/fender-bender.png">
                                <h5>Accidents</h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="covered-wrapper">
                                <img src="assets/images/fire.png">
                                <h5>Fire</h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="covered-wrapper">
                                <img src="assets/images/criminal.png">
                                <h5>Theft</h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="covered-wrapper">
                                <img src="assets/images/flood.png">
                                <h5>Calamities</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="home-section-four section-spacing">
    <div class="container">
        <div class="section-four-title text-center mb-4">
            <h6>We partnered with best</h6>
            <h4>Top Insurance Companies of Saudi Arabia</h4>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="partner-card">
                    <img src="assets/images/partner-1.png">
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="partner-card">
                    <img src="assets/images/partner-2.png">
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="partner-card">
                    <img src="assets/images/partner-3.png">
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="partner-card">
                    <img src="assets/images/partner-4.png">
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="partner-card">
                    <img src="assets/images/partner-5.jpg">
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="partner-card">
                    <img src="assets/images/partner-6.png">
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="partner-card">
                    <img src="assets/images/partner-7.jpg">
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="partner-card">
                    <img src="assets/images/partner-8.png">
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include("footer.php")
?>