<?php
include("functions.php");
include("header-ar.php")
// PHP goes here!
?>

<!-- PAGE BAR STARTS -->
<div class="page-bar">
    <div class="container">
        <div class="section-title">
            <h4>My Giftcards</h4>
        </div>
    </div>
</div>
<!-- PAGE BAR ENDS -->

<!-- GIFT CARD TABLE SECTION STARTS -->

<section class="section-spacing">
    <div class="container">
        <div class="giftcard-count text-right">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="giftcard-table-title" scope="col">#</th>
                            <th class="giftcard-table-title" scope="col">Giftcard Name</th>
                            <th class="giftcard-table-title" scope="col">Giftcard Code</th>
                            <th class="giftcard-table-title" scope="col">Giftcard Amount</th>
                            <th class="giftcard-table-title" scope="col">Balance Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><h6>GFRDC2</h6></td>
                            <td class="gift-card-code"><h5>33134546523724</h5></td>
                            <td class="gift-card-price"><h5>20.00</h5></td>
                            <td class="gift-card-price"><h5>20.00</h5></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <button class="btn btn-primary brand-btn-black-outline mx-auto d-block">BACK</button>
    </div>
</section>

<!-- GIFT CARD TABLE SECTION ENDS -->

<!-- Footer section  -->
<?php include("footer-ar.php") ?>