<?php
include("functions.php");
include("header.php")
// PHP goes here!
?>

<section>
    <div class="custom-container">
        <div class="contact-wrapper">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="contact-overview blue-bg">
                        <h3 class="wow fadeInDown">Contact Information</h3>
                        <p class="wow fadeInUp">This is the place to start. Find answers you need
                            from <span class="matjary-font">MATJARY</span> Team.</p>

                        <div class="contact-details">
                            <h4 class="wow fadeInDown">Write to us</h4>
                            <p class="wow fadeInUp"><i class="icofont-envelope"></i><a href="mailto:support@matjary.com">support@matjary.com</a></p>
                            <h4 class="wow fadeInDown">Call Us</h4>
                            <p class="wow fadeInUp"><i class="icofont-ui-call"></i><a href="tel:+966114007960">+966 11 4007960</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-8">
                    <div class="contact-form">
                        <div class="form-wrapper">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="mb-3 wow fadeIn" data-wow-delay="400ms">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 wow fadeIn" data-wow-delay="600ms">
                                        <input type="email" class="form-control" placeholder="Email Address">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="mb-3 wow fadeIn" data-wow-delay="800ms">
                                        <input type="tel" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 wow fadeIn" data-wow-delay="1000ms">
                                        <input type="text" class="form-control" placeholder="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row wow fadeInDown" data-wow-delay="1200ms">
                                <textarea type="text" class="form-control" placeholder="Message" rows="5"></textarea>
                            </div>
                            <button type="button" class="btn btn-primary btn-lg brand-btn-pink float-right mt-4 wow fadeInRight" data-wow-delay="1400ms">Submit form</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-map">
                    <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=+(Advanced%20Elaf)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
            </div>
        </div>
    </div>
</section>

<!-- Footer section  -->
<?php include("footer.php") ?>