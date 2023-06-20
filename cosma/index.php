<?php
include("functions.php");
include("header.php")
// PHP goes here!
?>

<!-- HOME CAROUSEL STARTS -->

<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://biagiotti.qodeinteractive.com/elementor/wp-content/uploads/2019/08/m-h-slider-img-1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-content-white">
                <h6 class="carousel-tagline-white">Perfect Shades</h6>
                <h2>Infinite Beauty</h2>
                <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h5>
                <a href="#" class="btn btn-primary btn-lg brand-btn-white">View More</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://biagiotti.qodeinteractive.com/elementor/wp-content/uploads/2019/08/m-h-slider-img-3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-content-black">
                <h6 class="carousel-tagline-black">Velvet Beauty</h6>
                <h2>Summer Look</h2>
                <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h5>
                <a href="#" class="btn btn-primary btn-lg brand-btn-black">View More</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://biagiotti.qodeinteractive.com/elementor/wp-content/uploads/2019/08/m-h-slider-img-2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-content-black">
                <h6 class="carousel-tagline-black">Perfect look</h6>
                <h2>Original Style</h2>
                <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h5>
                <a href="#" class="btn btn-primary btn-lg brand-btn-black">View More</a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
</div>

<!-- HOME CAROUSEL ENDS -->

<!-- HOME PAGE SECTION ONE STARTS -->

<section class="section-spacing">
    <div class="container">
        <div class="section-tagline text-center">
            <h6>Perfect shades</h6>
        </div>
        <div class="section-title text-center">
            <h4>Latest Products</h4>
        </div>

        <div class="carousel-wrapper mt-5">
            <div id="latest-products-carousel" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="assets/images/product-1.png">
                        </a>
                    </div>

                    <div class="prod-detail">
                        <h4>
                            <a href="#">Product Name </a>
                        </h4>
                    </div>

                    <div class="home-prod-price text-center">
                        <span class="strike-amount">SAR 250.00</span>
                        <span class="sale-amount">SAR 100.00</span>
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn btn-primary brand-btn-black">Add to Cart</button>
                    </div>
                </div>

                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="assets/images/product-2.png">
                        </a>
                    </div>

                    <div class="prod-detail">
                        <h4>
                            <a href="#">Product Name </a>
                        </h4>
                    </div>

                    <div class="home-prod-price text-center">
                        <span class="strike-amount">SAR 250.00</span>
                        <span class="sale-amount">SAR 100.00</span>
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn btn-primary brand-btn-black">Add to Cart</button>
                    </div>
                </div>

                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="assets/images/product-3.png">
                        </a>
                    </div>

                    <div class="prod-detail">
                        <h4>
                            <a href="#">Product Name </a>
                        </h4>
                    </div>

                    <div class="home-prod-price text-center">
                        <span class="strike-amount">SAR 250.00</span>
                        <span class="sale-amount">SAR 100.00</span>
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn btn-primary brand-btn-black">Add to Cart</button>
                    </div>
                </div>

                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="assets/images/product-4.png">
                        </a>
                    </div>

                    <div class="prod-detail">
                        <h4>
                            <a href="#">Product Name </a>
                        </h4>
                    </div>

                    <div class="home-prod-price text-center">
                        <span class="strike-amount">SAR 250.00</span>
                        <span class="sale-amount">SAR 100.00</span>
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn btn-primary brand-btn-black">Add to Cart</button>
                    </div>
                </div>

                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="assets/images/product-5.png">
                        </a>
                    </div>

                    <div class="prod-detail">
                        <h4>
                            <a href="#">Product Name </a>
                        </h4>
                    </div>

                    <div class="home-prod-price text-center">
                        <span class="strike-amount">SAR 250.00</span>
                        <span class="sale-amount">SAR 100.00</span>
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn btn-primary brand-btn-black">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- HOME PAGE SECTION ONE ENDS -->

<!-- HOME PAGE SECTION TWO STARTS -->

<section class="section-spacing">
    <div class="container">
        <div class="section-tagline text-center">
            <h6>Perfect shades</h6>
        </div>
        <div class="section-title text-center">
            <h4>Featured Products</h4>
        </div>

        <div class="carousel-wrapper mt-5">
            <div id="featured-products-carousel" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="assets/images/product-1.png">
                        </a>
                    </div>

                    <div class="prod-detail">
                        <h4>
                            <a href="#">Product Name </a>
                        </h4>
                    </div>

                    <div class="home-prod-price text-center">
                        <span class="strike-amount">SAR 250.00</span>
                        <span class="sale-amount">SAR 100.00</span>
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn btn-primary brand-btn-black">Add to Cart</button>
                    </div>
                </div>

                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="assets/images/product-2.png">
                        </a>
                    </div>

                    <div class="prod-detail">
                        <h4>
                            <a href="#">Product Name </a>
                        </h4>
                    </div>

                    <div class="home-prod-price text-center">
                        <span class="strike-amount">SAR 250.00</span>
                        <span class="sale-amount">SAR 100.00</span>
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn btn-primary brand-btn-black">Add to Cart</button>
                    </div>
                </div>

                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="assets/images/product-3.png">
                        </a>
                    </div>

                    <div class="prod-detail">
                        <h4>
                            <a href="#">Product Name </a>
                        </h4>
                    </div>

                    <div class="home-prod-price text-center">
                        <span class="strike-amount">SAR 250.00</span>
                        <span class="sale-amount">SAR 100.00</span>
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn btn-primary brand-btn-black">Add to Cart</button>
                    </div>
                </div>

                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="assets/images/product-4.png">
                        </a>
                    </div>

                    <div class="prod-detail">
                        <h4>
                            <a href="#">Product Name </a>
                        </h4>
                    </div>

                    <div class="home-prod-price text-center">
                        <span class="strike-amount">SAR 250.00</span>
                        <span class="sale-amount">SAR 100.00</span>
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn btn-primary brand-btn-black">Add to Cart</button>
                    </div>
                </div>

                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="assets/images/product-5.png">
                        </a>
                    </div>

                    <div class="prod-detail">
                        <h4>
                            <a href="#">Product Name </a>
                        </h4>
                    </div>

                    <div class="home-prod-price text-center">
                        <span class="strike-amount">SAR 250.00</span>
                        <span class="sale-amount">SAR 100.00</span>
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn btn-primary brand-btn-black">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- HOME PAGE SECTION TWO ENDS -->

<!-- HOME PAGE SECTION THREE STARTS -->

<section class="section-spacing">
    <div class="container">
        <div class="section-tagline text-center">
            <h6>Perfect shades</h6>
        </div>
        <div class="section-title text-center">
            <h4>Products on sale</h4>
        </div>

        <div class="carousel-wrapper mt-5">
            <div id="pos-products-carousel" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="assets/images/product-1.png">
                        </a>
                    </div>

                    <div class="prod-detail">
                        <h4>
                            <a href="#">Product Name </a>
                        </h4>
                    </div>

                    <div class="home-prod-price text-center">
                        <span class="strike-amount">SAR 250.00</span>
                        <span class="sale-amount">SAR 100.00</span>
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn btn-primary brand-btn-black">Add to Cart</button>
                    </div>
                </div>

                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="assets/images/product-2.png">
                        </a>
                    </div>

                    <div class="prod-detail">
                        <h4>
                            <a href="#">Product Name </a>
                        </h4>
                    </div>

                    <div class="home-prod-price text-center">
                        <span class="strike-amount">SAR 250.00</span>
                        <span class="sale-amount">SAR 100.00</span>
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn btn-primary brand-btn-black">Add to Cart</button>
                    </div>
                </div>

                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="assets/images/product-3.png">
                        </a>
                    </div>

                    <div class="prod-detail">
                        <h4>
                            <a href="#">Product Name </a>
                        </h4>
                    </div>

                    <div class="home-prod-price text-center">
                        <span class="strike-amount">SAR 250.00</span>
                        <span class="sale-amount">SAR 100.00</span>
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn btn-primary brand-btn-black">Add to Cart</button>
                    </div>
                </div>

                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="assets/images/product-4.png">
                        </a>
                    </div>

                    <div class="prod-detail">
                        <h4>
                            <a href="#">Product Name </a>
                        </h4>
                    </div>

                    <div class="home-prod-price text-center">
                        <span class="strike-amount">SAR 250.00</span>
                        <span class="sale-amount">SAR 100.00</span>
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn btn-primary brand-btn-black">Add to Cart</button>
                    </div>
                </div>

                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="assets/images/product-5.png">
                        </a>
                    </div>

                    <div class="prod-detail">
                        <h4>
                            <a href="#">Product Name </a>
                        </h4>
                    </div>

                    <div class="home-prod-price text-center">
                        <span class="strike-amount">SAR 250.00</span>
                        <span class="sale-amount">SAR 100.00</span>
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn btn-primary brand-btn-black">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- HOME PAGE SECTION THREE ENDS -->

<!-- HOME PAGE SECTION FOUR STARTS  -->

<section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about-banner">
                    <img class="img-fluid" src="https://biagiotti.qodeinteractive.com/elementor/wp-content/uploads/2020/04/m-h-single-img-1.jpg">
                </div>
            </div>
            <div class="col-md-6">
                <div class="section-tagline">
                    <h6>know us better</h6>
                </div>
                <div class="section-title">
                    <h4>who we are</h4>
                </div>

                <div class="section-subpara">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>

                <div class="section-para">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>

                <button class="btn btn-primary brand-btn-black">Know More</button>
            </div>
        </div>

        
    </div>
    </section>

    <!-- HOME PAGE SECTION FOUR ENDS -->

    <!-- HOME PAGE SECTION FIVE STARTS -->

    <section class="bg-pink section-spacing mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="shop-benefits">
                        <div class="benefits-content">
                            <img src="https://biagiotti.qodeinteractive.com/elementor/wp-content/uploads/2019/08/m-h-icon-number-1.png">
                            <div class="benefits-text">
                                <h4>Online purchase</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="shop-benefits">
                        <div class="benefits-content">
                            <img src="https://biagiotti.qodeinteractive.com/elementor/wp-content/uploads/2019/08/m-h-icon-number-2.png">
                            <div class="benefits-text">
                                <h4>Free Shipping</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="shop-benefits">
                        <div class="benefits-content">
                            <img src="https://biagiotti.qodeinteractive.com/elementor/wp-content/uploads/2019/08/m-h-icon-number-3.png">
                            <div class="benefits-text">
                                <h4>Money Back</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HOME PAGE SECTION FIVE ENDS -->

    <!-- HOME PAGE SECTION SIX STARTS -->

    <section class="bg-grey section-spacing">
        <div class="container">
            <div class="section-tagline text-center">
                <h6>Partners</h6>
            </div>
            <div class="section-title text-center">
                <h4>Partnered with best</h4>
            </div>

            <div class="carousel-wrapper mt-2">
                <div id="brand-partners-carousel" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="brand-wrapper">
                            <img src="https://logos-world.net/wp-content/uploads/2020/09/Lakme-Logo.png">
                        </div>
                    </div>

                    <div class="item">
                        <div class="brand-wrapper">
                            <img src="https://logos-download.com/wp-content/uploads/2016/02/Loreal_logo.png">
                        </div>
                    </div>

                    <div class="item">
                        <div class="brand-wrapper">
                            <img src="https://assets.website-files.com/5fa5853e90677c067085ec4c/609d426363329a94b08302e2_600f2fd6fcd2b50004308419.png">
                        </div>
                    </div>

                    <div class="item">
                        <div class="brand-wrapper">
                            <img src="https://logos-world.net/wp-content/uploads/2020/11/NYX-Logo.png">
                        </div>
                    </div>

                    <div class="item">
                        <div class="brand-wrapper">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/COVERGIRL_logo_2017.svg/1200px-COVERGIRL_logo_2017.svg.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HOME PAGE SECTION SIX ENDS -->

    <!-- HOME PAGE SECTION SEVEN STARTS -->
    
    <section class="section-spacing bg-pink">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="subs-text">
                        <h1>Subscribe</h1>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="subs-input">
                        <input class="form-control" placeholder="Email Address">
                        <button class="btn btn-primary brand-btn-black">Send</button> 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HOME PAGE SECTION SEVEN ENDS -->

    <!-- Footer section  -->
    <?php include("footer.php") ?>