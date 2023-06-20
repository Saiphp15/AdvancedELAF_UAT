<?php
include("functions.php");
include("header.php")
// PHP goes here!
?>

<!-- Header section  -->
<div class="error-page">
    <div class="container">
        <div class="error-title">
            <h1>Oops! Page Not Found</h1>
            <h2>404</h2>
        </div>

        <div class="error-image">
            <img class="img-fluid" src="image/faq-banner-mascot.png" />
        </div>

        <div class="error-content">
            <p><span>Sorry,</span> the page you have been looking for appears to have been moved, deleted or simply does not exist.</p>
            <p class="error-next-line">Click on the link below to go back to the previous page.</p>
            <a href="#"><button type="button" class="btn btn-primary error-page-btn">Back</button></a>
        </div>
    </div>
</div>


<!-- Footer section  -->
<?php include("footer.php") ?>