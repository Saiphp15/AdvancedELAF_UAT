<?php
include("functions.php");
include("header.php")
// PHP goes here!
?>

<!-- PAYMENT ERROR SECTION STARTS -->
<section>
    <div class="custom-container">
        <div class="p-error-wrapper text-center">
            <img src="assets/images/payment-error.png">
            <h2>Payment Failed!</h2>
            <h4>We aren't able to process your payment.</h4>
            <h4>Please Try Again!</h4>
            <div class="d-flex justify-content-center mt-3">
                <button class="btn btn-primary brand-btn-pink">Try again</button>
            </div>
        </div>
    </div>
</section>

<!-- Footer section  -->
<?php include("footer.php") ?>