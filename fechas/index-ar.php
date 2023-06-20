<?php
include("functions.php");
include("header-ar.php")
?>

<!-- HOME CAROUSEL STARTS -->

<div class="home-carousel">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/images/home-banner-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-content">
                    <h3>Creating Delightful Experiences</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <button class="db-brand-btn">Shop Now</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/home-banner-2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-content">
                    <h3>Avail the best offers</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <button class="db-brand-btn">Shop Now</button>
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
</div>

<!-- HOME CAROUSEL ENDS -->

<!-- LATEST PRODUCT SECTION STARTS -->

<section class="section-spacing">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="section-title text-right">
                    <h2>Latest Products</h2>
                </div>
            </div>
            <div class="col-6">
                <button class="db-brand-btn float-left">View All</button>
            </div>
        </div>

        <div class="carousel-wrapper mt-3">
            <div id="latest-products-carousel" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="assets/images/emirates-dates.jpg">
                        </a>
                        <div class="prod-detail text-center">
                            <a href="#">
                                <h4>Emirates Dates</h4>
                            </a>
                            <div class="home-prod-price mb-2">
                                <span class="strike-amount">SAR 250.00</span>
                                <span class="sale-amount">SAR 100.00</span>
                            </div>

                            <div class="wishlist">
                                <i class="icofont-heart"></i>
                            </div>
                        </div>
                        <div class="prod-btn">
                            <button class="g-brand-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="assets/images/alg-dates.jpg">
                        </a>
                        <div class="prod-detail text-center">
                            <a href="#">
                                <h4>Algerian Dates</h4>
                            </a>
                            <div class="home-prod-price mb-2">
                                <span class="strike-amount">SAR 250.00</span>
                                <span class="sale-amount">SAR 100.00</span>
                            </div>

                            <div class="wishlist">
                                <i class="icofont-heart"></i>
                            </div>
                        </div>
                        <div class="prod-btn">
                            <button class="g-brand-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="assets/images/saudi-dates.jpg">
                        </a>
                        <div class="prod-detail text-center">
                            <a href="#">
                                <h4>Saudi Dates</h4>
                            </a>
                            <div class="home-prod-price mb-2">
                                <span class="strike-amount">SAR 250.00</span>
                                <span class="sale-amount">SAR 100.00</span>
                            </div>

                            <div class="wishlist">
                                <i class="icofont-heart"></i>
                            </div>
                        </div>
                        <div class="prod-btn">
                            <button class="g-brand-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="assets/images/iraq-dates.jpg">
                        </a>
                        <div class="prod-detail text-center">
                            <a href="#">
                                <h4>Iraqi Dates</h4>
                            </a>
                            <div class="home-prod-price mb-2">
                                <span class="strike-amount">SAR 250.00</span>
                                <span class="sale-amount">SAR 100.00</span>
                            </div>

                            <div class="wishlist">
                                <i class="icofont-heart"></i>
                            </div>
                        </div>
                        <div class="prod-btn">
                            <button class="g-brand-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="assets/images/jor-dates.jpg">
                        </a>
                        <div class="prod-detail text-center">
                            <a href="#">
                                <h4>Jordanian Dates</h4>
                            </a>
                            <div class="home-prod-price mb-2">
                                <span class="strike-amount">SAR 250.00</span>
                                <span class="sale-amount">SAR 100.00</span>
                            </div>

                            <div class="wishlist">
                                <i class="icofont-heart"></i>
                            </div>
                        </div>
                        <div class="prod-btn">
                            <button class="g-brand-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="assets/images/tuni-dates.jpg">
                        </a>
                        <div class="prod-detail text-center">
                            <a href="#">
                                <h4>Tunisian Dates</h4>
                            </a>
                            <div class="home-prod-price mb-2">
                                <span class="strike-amount">SAR 250.00</span>
                                <span class="sale-amount">SAR 100.00</span>
                            </div>

                            <div class="wishlist">
                                <i class="icofont-heart"></i>
                            </div>
                        </div>
                        <div class="prod-btn">
                            <button class="g-brand-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- LATEST PRODUCTS SECTION ENDS -->

<!-- FEATURED PRODUCTS SECTION STARTS -->

<section class="section-spacing">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="section-title text-right">
                    <h2>Featured Products</h2>
                </div>
            </div>
            <div class="col-6">
                <button class="db-brand-btn float-left">View All</button>
            </div>
        </div>


        <div class="carousel-wrapper mt-3">
            <div id="featured-products-carousel" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="https://media.istockphoto.com/photos/ajwa-dates-in-al-madinah-saudi-arabia-picture-id177274946">
                        </a>
                        <div class="prod-detail text-center">
                            <a href="#">
                                <h4>Ajwa Dates</h4>
                            </a>
                            <div class="home-prod-price mb-2">
                                <span class="strike-amount">SAR 250.00</span>
                                <span class="sale-amount">SAR 100.00</span>
                            </div>

                            <div class="wishlist">
                                <i class="icofont-heart"></i>
                            </div>
                        </div>
                        <div class="prod-btn">
                            <button class="g-brand-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="https://cdn.shopify.com/s/files/1/1785/5627/products/safawi_dates_3_1400x.jpg?v=1615424299">
                        </a>
                        <div class="prod-detail text-center">
                            <a href="#">
                                <h4>Safawi Dates</h4>
                            </a>
                            <div class="home-prod-price mb-2">
                                <span class="strike-amount">SAR 250.00</span>
                                <span class="sale-amount">SAR 100.00</span>
                            </div>

                            <div class="wishlist">
                                <i class="icofont-heart"></i>
                            </div>
                        </div>
                        <div class="prod-btn">
                            <button class="g-brand-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="https://thottamfarmfresh.com/wp-content/uploads/2022/01/dates-6638822_1920.jpg">
                        </a>
                        <div class="prod-detail text-center">
                            <a href="#">
                                <h4>Mabroom Dates</h4>
                            </a>
                            <div class="home-prod-price mb-2">
                                <span class="strike-amount">SAR 250.00</span>
                                <span class="sale-amount">SAR 100.00</span>
                            </div>

                            <div class="wishlist">
                                <i class="icofont-heart"></i>
                            </div>
                        </div>
                        <div class="prod-btn">
                            <button class="g-brand-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="https://i0.wp.com/saharidates.com/wp-content/uploads/2020/03/5.4kg.png?fit=1040%2C720&ssl=1">
                        </a>
                        <div class="prod-detail text-center">
                            <a href="#">
                                <h4>Khudari Dates</h4>
                            </a>
                            <div class="home-prod-price mb-2">
                                <span class="strike-amount">SAR 250.00</span>
                                <span class="sale-amount">SAR 100.00</span>
                            </div>

                            <div class="wishlist">
                                <i class="icofont-heart"></i>
                            </div>
                        </div>
                        <div class="prod-btn">
                            <button class="g-brand-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="https://m.media-amazon.com/images/I/71eGAhXHqyL._SL1200_.jpg">
                        </a>
                        <div class="prod-detail text-center">
                            <a href="#">
                                <h4>Sukkary Dates</h4>
                            </a>
                            <div class="home-prod-price mb-2">
                                <span class="strike-amount">SAR 250.00</span>
                                <span class="sale-amount">SAR 100.00</span>
                            </div>

                            <div class="wishlist">
                                <i class="icofont-heart"></i>
                            </div>
                        </div>

                        <div class="prod-btn">
                            <button class="g-brand-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FEATURED PRODUCTS SECTION ENDS -->

<!-- SHOP BY CATEGORY SECTION STARTS -->

<section class="section-spacing">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="section-title text-right">
                    <h2>Shop by Category</h2>
                </div>
            </div>
            <div class="col-6">
                <button class="db-brand-btn float-left">View All</button>
            </div>
        </div>

        <div class="category-tab-wrapper mt-3">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item cat-tab-item" role="presentation">
                    <a class="nav-link cat-tab-link active" id="pills-dates-tab" data-toggle="pill" href="#pills-dates" role="tab" aria-controls="pills-dates" aria-selected="true">Dates</a>
                </li>
                <li class="nav-item cat-tab-item" role="presentation">
                    <a class="nav-link cat-tab-link" id="pills-organic-tab" data-toggle="pill" href="#pills-organic" role="tab" aria-controls="pills-organic" aria-selected="false">Organic</a>
                </li>
                <li class="nav-item cat-tab-item" role="presentation">
                    <a class="nav-link cat-tab-link" id="pills-ingredients-tab" data-toggle="pill" href="#pills-ingredients" role="tab" aria-controls="pills-ingredients" aria-selected="false">Ingredients</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-dates" role="tabpanel" aria-labelledby="pills-dates-tab">
                    <div class="carousel-wrapper mt-5">
                        <div id="category-carousel-one" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="prod-wrapper">
                                    <a href="#">
                                        <img src="assets/images/emirates-dates.jpg">
                                    </a>
                                    <div class="prod-detail text-center">
                                        <a href="#">
                                            <h4>Emirates Dates</h4>
                                        </a>
                                        <div class="home-prod-price mb-2">
                                            <span class="strike-amount">SAR 250.00</span>
                                            <span class="sale-amount">SAR 100.00</span>
                                        </div>

                                        <div class="wishlist">
                                            <i class="icofont-heart"></i>
                                        </div>
                                    </div>
                                    <div class="prod-btn">
                                        <button class="g-brand-btn">Add to Cart</button>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="prod-wrapper">
                                    <a href="#">
                                        <img src="assets/images/alg-dates.jpg">
                                    </a>
                                    <div class="prod-detail text-center">
                                        <a href="#">
                                            <h4>Algerian Dates</h4>
                                        </a>
                                        <div class="home-prod-price mb-2">
                                            <span class="strike-amount">SAR 250.00</span>
                                            <span class="sale-amount">SAR 100.00</span>
                                        </div>

                                        <div class="wishlist">
                                            <i class="icofont-heart"></i>
                                        </div>
                                    </div>
                                    <div class="prod-btn">
                                        <button class="g-brand-btn">Add to Cart</button>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="prod-wrapper">
                                    <a href="#">
                                        <img src="assets/images/saudi-dates.jpg">
                                    </a>
                                    <div class="prod-detail text-center">
                                        <a href="#">
                                            <h4>Saudi Dates</h4>
                                        </a>
                                        <div class="home-prod-price mb-2">
                                            <span class="strike-amount">SAR 250.00</span>
                                            <span class="sale-amount">SAR 100.00</span>
                                        </div>

                                        <div class="wishlist">
                                            <i class="icofont-heart"></i>
                                        </div>
                                    </div>
                                    <div class="prod-btn">
                                        <button class="g-brand-btn">Add to Cart</button>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="prod-wrapper">
                                    <a href="#">
                                        <img src="assets/images/iraq-dates.jpg">
                                    </a>
                                    <div class="prod-detail text-center">
                                        <a href="#">
                                            <h4>Iraqi Dates</h4>
                                        </a>
                                        <div class="home-prod-price mb-2">
                                            <span class="strike-amount">SAR 250.00</span>
                                            <span class="sale-amount">SAR 100.00</span>
                                        </div>

                                        <div class="wishlist">
                                            <i class="icofont-heart"></i>
                                        </div>
                                    </div>
                                    <div class="prod-btn">
                                        <button class="g-brand-btn">Add to Cart</button>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="prod-wrapper">
                                    <a href="#">
                                        <img src="assets/images/jor-dates.jpg">
                                    </a>
                                    <div class="prod-detail text-center">
                                        <a href="#">
                                            <h4>Jordanian Dates</h4>
                                        </a>
                                        <div class="home-prod-price mb-2">
                                            <span class="strike-amount">SAR 250.00</span>
                                            <span class="sale-amount">SAR 100.00</span>
                                        </div>

                                        <div class="wishlist">
                                            <i class="icofont-heart"></i>
                                        </div>
                                    </div>

                                    <div class="prod-btn">
                                        <button class="g-brand-btn">Add to Cart</button>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="prod-wrapper">
                                    <a href="#">
                                        <img src="assets/images/tuni-dates.jpg">
                                    </a>
                                    <div class="prod-detail text-center">
                                        <a href="#">
                                            <h4>Tunisian Dates</h4>
                                        </a>
                                        <div class="home-prod-price mb-2">
                                            <span class="strike-amount">SAR 250.00</span>
                                            <span class="sale-amount">SAR 100.00</span>
                                        </div>

                                        <div class="wishlist">
                                            <i class="icofont-heart"></i>
                                        </div>
                                    </div>

                                    <div class="prod-btn">
                                        <button class="g-brand-btn">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-organic" role="tabpanel" aria-labelledby="pills-organic-tab">
                    <div class="carousel-wrapper mt-5">
                        <div id="category-carousel-two" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="prod-wrapper">
                                    <a href="#">
                                        <img src="https://royalpalm-dates.com/wp-content/uploads/2021/06/pr3.jpg">
                                    </a>
                                    <div class="prod-detail text-center">
                                        <a href="#">
                                            <h4>Deglet Nour</h4>
                                        </a>
                                        <div class="home-prod-price mb-2">
                                            <span class="strike-amount">SAR 250.00</span>
                                            <span class="sale-amount">SAR 100.00</span>
                                        </div>

                                        <div class="wishlist">
                                            <i class="icofont-heart"></i>
                                        </div>
                                    </div>
                                    <div class="prod-btn">
                                        <button class="g-brand-btn">Add to Cart</button>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="prod-wrapper">
                                    <a href="#">
                                        <img src="https://www.healthbenefitstimes.com/9/uploads/2020/09/dates-702x400.jpg">
                                    </a>
                                    <div class="prod-detail text-center">
                                        <a href="#">
                                            <h4>Deglet Nour Pitted</h4>
                                        </a>
                                        <div class="home-prod-price mb-2">
                                            <span class="strike-amount">SAR 250.00</span>
                                            <span class="sale-amount">SAR 100.00</span>
                                        </div>

                                        <div class="wishlist">
                                            <i class="icofont-heart"></i>
                                        </div>
                                    </div>
                                    <div class="prod-btn">
                                        <button class="g-brand-btn">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-ingredients" role="tabpanel" aria-labelledby="pills-ingredients-tab">
                    <div class="carousel-wrapper mt-5">
                        <div id="category-carousel-three" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="prod-wrapper">
                                    <a href="#">
                                        <img src="http://bestversionvegan.com/wp-content/uploads/2018/04/Date-Paste-Swirl-vegan-dates.jpg">
                                    </a>
                                    <div class="prod-detail text-center">
                                        <a href="#">
                                            <h4>Dates Paste</h4>
                                        </a>
                                        <div class="home-prod-price mb-2">
                                            <span class="strike-amount">SAR 250.00</span>
                                            <span class="sale-amount">SAR 100.00</span>
                                        </div>

                                        <div class="wishlist">
                                            <i class="icofont-heart"></i>
                                        </div>
                                    </div>
                                    <div class="prod-btn">
                                        <button class="g-brand-btn">Add to Cart</button>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="prod-wrapper">
                                    <a href="#">
                                        <img src="https://149366112.v2.pressablecdn.com/wp-content/uploads/2021/07/shutterstock_1647836044-scaled.jpg">
                                    </a>
                                    <div class="prod-detail text-center">
                                        <a href="#">
                                            <h4>Date Syrup</h4>
                                        </a>
                                        <div class="home-prod-price mb-2">
                                            <span class="strike-amount">SAR 250.00</span>
                                            <span class="sale-amount">SAR 100.00</span>
                                        </div>

                                        <div class="wishlist">
                                            <i class="icofont-heart"></i>
                                        </div>
                                    </div>
                                    <div class="prod-btn">
                                        <button class="g-brand-btn">Add to Cart</button>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="prod-wrapper">
                                    <a href="#">
                                        <img src="https://www.goingnuts.in/wp-content/uploads/2021/02/IMG_20210205_185412-scaled.jpg">
                                    </a>
                                    <div class="prod-detail text-center">
                                        <a href="#">
                                            <h4>Chopped Dates</h4>
                                        </a>
                                        <div class="home-prod-price mb-2">
                                            <span class="strike-amount">SAR 250.00</span>
                                            <span class="sale-amount">SAR 100.00</span>
                                        </div>

                                        <div class="wishlist">
                                            <i class="icofont-heart"></i>
                                        </div>
                                    </div>
                                    <div class="prod-btn">
                                        <button class="g-brand-btn">Add to Cart</button>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="prod-wrapper">
                                    <a href="#">
                                        <img src="https://thatgirlcookshealthy.com/wp-content/uploads/2016/06/How-to-make-date-sugar3.jpg">
                                    </a>
                                    <div class="prod-detail text-center">
                                        <a href="#">
                                            <h4>Dates Sugar</h4>
                                        </a>
                                        <div class="home-prod-price mb-2">
                                            <span class="strike-amount">SAR 250.00</span>
                                            <span class="sale-amount">SAR 100.00</span>
                                        </div>

                                        <div class="wishlist">
                                            <i class="icofont-heart"></i>
                                        </div>
                                    </div>
                                    <div class="prod-btn">
                                        <button class="g-brand-btn">Add to Cart</button>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="prod-wrapper">
                                    <a href="#">
                                        <img src="https://cleanfoodcrush.com/wp-content/uploads/2021/02/Clean-Food-Crush-Snicker-Stuffed-Dates-Clean-Eating-Recipe-1200x1200.jpg">
                                    </a>
                                    <div class="prod-detail text-center">
                                        <a href="#">
                                            <h4>Stuffed Dates</h4>
                                        </a>
                                        <div class="home-prod-price mb-2">
                                            <span class="strike-amount">SAR 250.00</span>
                                            <span class="sale-amount">SAR 100.00</span>
                                        </div>

                                        <div class="wishlist">
                                            <i class="icofont-heart"></i>
                                        </div>
                                    </div>
                                    <div class="prod-btn">
                                        <button class="g-brand-btn">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- SHOP BY CATEGORY SECTION ENDS -->

<!-- PRODUCT ON SALE SECTION STARTS -->

<section class="section-spacing">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="section-title text-right">
                    <h2>Products on Sale</h2>
                </div>
            </div>
            <div class="col-6">
                <button class="db-brand-btn float-left">View All</button>
            </div>
        </div>


        <div class="carousel-wrapper mt-3">
            <div id="pos-products-carousel" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="https://media.istockphoto.com/photos/ajwa-dates-in-al-madinah-saudi-arabia-picture-id177274946">
                        </a>
                        <div class="prod-detail text-center">
                            <a href="#">
                                <h4>Ajwa Dates</h4>
                            </a>
                            <div class="home-prod-price mb-2">
                                <span class="strike-amount">SAR 250.00</span>
                                <span class="sale-amount">SAR 100.00</span>
                            </div>

                            <div class="offer-badge">
                                <span>50% Discount</span>
                            </div>
                            <div class="wishlist">
                                <i class="icofont-heart"></i>
                            </div>
                        </div>
                        <div class="prod-btn">
                            <button class="g-brand-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="https://cdn.shopify.com/s/files/1/1785/5627/products/safawi_dates_3_1400x.jpg?v=1615424299">
                        </a>
                        <div class="prod-detail text-center">
                            <a href="#">
                                <h4>Safawi Dates</h4>
                            </a>
                            <div class="home-prod-price mb-2">
                                <span class="strike-amount">SAR 250.00</span>
                                <span class="sale-amount">SAR 100.00</span>
                            </div>

                            <div class="offer-badge">
                                <span>30% Discount</span>
                            </div>

                            <div class="wishlist">
                                <i class="icofont-heart"></i>
                            </div>
                        </div>
                        <div class="prod-btn">
                            <button class="g-brand-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="https://thottamfarmfresh.com/wp-content/uploads/2022/01/dates-6638822_1920.jpg">
                        </a>
                        <div class="prod-detail text-center">
                            <a href="#">
                                <h4>Mabroom Dates</h4>
                            </a>
                            <div class="home-prod-price mb-2">
                                <span class="strike-amount">SAR 250.00</span>
                                <span class="sale-amount">SAR 100.00</span>
                            </div>

                            <div class="offer-badge">
                                <span>25% Discount</span>
                            </div>

                            <div class="wishlist">
                                <i class="icofont-heart"></i>
                            </div>
                        </div>
                        <div class="prod-btn">
                            <button class="g-brand-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="https://i0.wp.com/saharidates.com/wp-content/uploads/2020/03/5.4kg.png?fit=1040%2C720&ssl=1">
                        </a>
                        <div class="prod-detail text-center">
                            <a href="#">
                                <h4>Khudari Dates</h4>
                            </a>
                            <div class="home-prod-price mb-2">
                                <span class="strike-amount">SAR 250.00</span>
                                <span class="sale-amount">SAR 100.00</span>
                            </div>

                            <div class="offer-badge">
                                <span>20% Discount</span>
                            </div>

                            <div class="wishlist">
                                <i class="icofont-heart"></i>
                            </div>
                        </div>
                        <div class="prod-btn">
                            <button class="g-brand-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="prod-wrapper">
                        <a href="#">
                            <img src="https://m.media-amazon.com/images/I/71eGAhXHqyL._SL1200_.jpg">
                        </a>
                        <div class="prod-detail text-center">
                            <a href="#">
                                <h4>Sukkary Dates</h4>
                            </a>
                            <div class="home-prod-price mb-2">
                                <span class="strike-amount">SAR 250.00</span>
                                <span class="sale-amount">SAR 100.00</span>
                            </div>

                            <div class="offer-badge">
                                <span>30% Discount</span>
                            </div>

                            <div class="wishlist">
                                <i class="icofont-heart"></i>
                            </div>
                        </div>
                        <div class="prod-btn">
                            <button class="g-brand-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PRODUCT ON SALE SECTION ENDS -->

<!-- ADVERTISEMENT SECTION STARTS -->

<section class="section-spacing">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <div class="ad-banner">
                    <a href="#">
                        <img class="img-fluid" src="https://coreldrawdesign.com/resources/previews/preview-dates-ramadan-food-banner-social-media-post-template-premium-vector-1650041594.jpg">
                    </a>
                </div>
            </div>

            <div class="col-md-12 col-lg-4">
                <div class="ad-banner">
                    <a href="#">
                        <img class="img-fluid" src="https://img.freepik.com/premium-vector/todays-special-dates-ramadan-food-banner-social-media-post-template-design-square-flyer_188201-149.jpg">
                    </a>
                </div>
            </div>

            <div class="col-md-12 col-lg-4">
                <div class="ad-banner">
                    <a href="#">
                        <img class="img-fluid" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/ramadan-sale-dates-fruits-ads-design-template-b8a9eca8c0b5ba821694f797c8639efb_screen.jpg?ts=1647333186">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ADVERTISEMENT SECTION ENDS -->

<!-- GIFTCARD SECTION STARTS -->

<section class="section-spacing">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="section-title text-right">
                    <h2>Gift Cards</h2>
                </div>
            </div>
            <div class="col-6">
                <button class="db-brand-btn float-left">View All</button>
            </div>
        </div>

        <div class="carousel-wrapper mt-3">
            <div id="gift-card-carousel" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="gc-wrapper">
                        <a href="#">
                            <img src="assets/images/gift-card-1.png">
                        </a>
                        <div class="prod-detail text-center">
                            <a href="#">
                                <h4>Giftcard Name</h4>
                            </a>
                            <div class="home-prod-price mb-2">
                                <span class="strike-amount">SAR 250.00</span>
                                <span class="sale-amount">SAR 100.00</span>
                            </div>
                        </div>
                        <div class="prod-btn">
                            <button class="g-brand-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="gc-wrapper">
                        <a href="#">
                            <img src="assets/images/gift-card-1.png">
                        </a>
                        <div class="prod-detail text-center">
                            <a href="#">
                                <h4>Giftcard Name</h4>
                            </a>
                            <div class="home-prod-price mb-2">
                                <span class="strike-amount">SAR 250.00</span>
                                <span class="sale-amount">SAR 100.00</span>
                            </div>
                        </div>
                        <div class="prod-btn">
                            <button class="g-brand-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="gc-wrapper">
                        <a href="#">
                            <img src="assets/images/gift-card-1.png">
                        </a>
                        <div class="prod-detail text-center">
                            <a href="#">
                                <h4>Giftcard Name</h4>
                            </a>
                            <div class="home-prod-price mb-2">
                                <span class="strike-amount">SAR 250.00</span>
                                <span class="sale-amount">SAR 100.00</span>
                            </div>
                        </div>
                        <div class="prod-btn">
                            <button class="g-brand-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="gc-wrapper">
                        <a href="#">
                            <img src="assets/images/gift-card-1.png">
                        </a>
                        <div class="prod-detail text-center">
                            <a href="#">
                                <h4>Giftcard Name</h4>
                            </a>
                            <div class="home-prod-price mb-2">
                                <span class="strike-amount">SAR 250.00</span>
                                <span class="sale-amount">SAR 100.00</span>
                            </div>
                        </div>
                        <div class="prod-btn">
                            <button class="g-brand-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="gc-wrapper">
                        <a href="#">
                            <img src="assets/images/gift-card-1.png">
                        </a>
                        <div class="prod-detail text-center">
                            <a href="#">
                                <h4>Giftcard Name</h4>
                            </a>
                            <div class="home-prod-price mb-2">
                                <span class="strike-amount">SAR 250.00</span>
                                <span class="sale-amount">SAR 100.00</span>
                            </div>
                        </div>
                        <div class="prod-btn">
                            <button class="g-brand-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="gc-wrapper">
                        <a href="#">
                            <img src="assets/images/gift-card-1.png">
                        </a>
                        <div class="prod-detail text-center">
                            <a href="#">
                                <h4>Giftcard Name</h4>
                            </a>
                            <div class="home-prod-price mb-2">
                                <span class="strike-amount">SAR 250.00</span>
                                <span class="sale-amount">SAR 100.00</span>
                            </div>
                        </div>
                        <div class="prod-btn">
                            <button class="g-brand-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- GIFTCARD SECTION ENDS -->

<?php
include("footer-ar.php")
?>