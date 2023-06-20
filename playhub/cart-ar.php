<?php
include("functions.php");
include("header-ar.php");
?>

<section>
    <div class="container-fluid">
        <div class="trans-page-title text-right">
            <h1>Cart</h1>
        </div>
    </div>
</section>

<section class="section-spacing">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="cart-wrap">
                    <div class="prod-cart">
                        <img src="https://d2d22nphq0yz8t.cloudfront.net/88e6cc4b-eaa1-4053-af65-563d88ba8b26/https://media.croma.com/image/upload/v1605155794/Croma%20Assets/Gaming/Gaming%20Consoles/Images/8923255242782.png/mxw_640,f_auto">
                        <div class="prod-cart-detail">
                            <h4>Play Station 4 with 1 Control</h4>
                            <div class="mb-2">
                                <input type="number" class="brand-input w-50" placeholder="Product Quantity" value="1">
                            </div>
                            <div class="cart-prod-price mb-2">
                                <h6 class="strike-amount">SAR 250.00</h6>
                                <h5 class="sale-amount">SAR 100.00</h5>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="cart-prod-cancel">
                            <i class="icofont-ui-delete"></i>
                        </div>
                    </a>
                </div>

                <div class="cart-wrap">
                    <div class="prod-cart">
                        <img src="https://m.media-amazon.com/images/I/81emBOJxExL._SX425_.jpg">
                        <div class="prod-cart-detail">
                            <h4>God of War Game for Play Station 4</h4>
                            <div class="mb-2">
                                <input type="number" class="brand-input w-50" placeholder="Product Quantity" value="1">
                            </div>
                            <div class="cart-prod-price mb-2">
                                <h6 class="strike-amount">SAR 250.00</h6>
                                <h5 class="sale-amount">SAR 100.00</h5>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="cart-prod-cancel">
                            <i class="icofont-ui-delete"></i>
                        </div>
                    </a>
                </div>

                <div class="text-left mb-3">
                    <a class="brand-btn-black" type="button" href="#">Empty Cart</a>
                    <a class="brand-btn-orange" type="button" href="#">Continue Shopping</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ui-title text-black text-right">
                    <h4>Cart Total</h4>
                </div>
                <div class="cart-total-wrap">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td class="cart-structure-name">Subtotal</td>
                                    <td>
                                        <div class="cart-price">
                                            <h6>SAR 200.00</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart-structure-name">Tax Amount</td>
                                    <td>
                                        <div class="cart-price">
                                            <h6>SAR 200.00</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart-structure-name">Shipping Charge</td>
                                    <td>
                                        <div class="cart-price">
                                            <h6>SAR 200.00</h6>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="cart-structure-name">Total Payable Amount</td>
                                    <td>
                                        <div class="cart-price">
                                            <h6>SAR 200.00</h6>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="cart-structure-name">Grand Total</td>
                                    <td>
                                        <div class="cart-price">
                                            <h6>SAR 200.00</h6>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="text-left">
                        <button class="brand-btn-orange">Proceed to Checkout</button>
                    </div>
                </div>

                <div class="orange-bg">
                    <div class="coupon-wrap mb-2">
                        <div class="ui-title text-white">
                            <h4>Coupon Code</h4>
                        </div>

                        <div class="mb-2">
                            <input class="brand-input" placeholder="Enter Coupon Code">
                        </div>
                        <div class="text-left">
                            <button class="brand-btn-black">Apply Coupon</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">

            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</section>

<section class="section-spacing">
    <div class="ui-title text-black text-center">
        <h4 class="mb-4">Your Cart is empty!</h4>
        <a href="#" class="brand-btn-orange">Continue Shipping</a>
    </div>
</section>

<?php
include("footer-ar.php");
?>