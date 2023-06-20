<?php
include("functions.php");
include("header.php")
// PHP goes here!
?>

<section class="ot-banner">
    <div class="container">
        <div class="page-title">
            <h1>My Giftcards</h1>
        </div>
    </div>
</section>

<!-- GIFT CARD TABLE STARTS -->

<section class="section-spacing">
    <div class="container">
        <div class="giftcard-count">
            <div class="table-responsive">
                <table class="table table-striped">
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
                            <td class="gift-card-name"><h6>GFRDC2</h6></td>
                            <td class="gift-card-code"><h5>33134546523724</h5></td>
                            <td class="gift-card-price"><h5>20.00</h5></td>
                            <td class="gift-card-price"><h5>20.00</h5></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <button class="db-brand-btn mx-auto d-block">BACK</button>
    </div>
</section>

<!-- GIFT CARDS TABLE ENDS -->

<?php
include("footer.php")
?>