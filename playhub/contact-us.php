<?php
include("functions.php");
include("header.php");
?>

<section class="section-spacing contact-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-lg-8">
                <div class="contact-wrap">
                    <div class="ui-title text-white">
                        <h4>Contact Us</h4>
                    </div>

                    <div class="mb-2">
                        <label class="brand-label text-orange">Full Name <span class="required-mark">*</span></label>
                        <input type="text" class="brand-input">
                    </div>

                    <div class="mb-2">
                        <label class="brand-label text-orange">Email Address <span class="required-mark">*</span></label>
                        <input type="email" class="brand-input">
                    </div>

                    <div class="mb-2">
                        <label class="brand-label text-orange">Message <span class="required-mark">*</span></label>
                        <textarea class="brand-input" rows="3"></textarea>
                    </div>

                    <button class="brand-btn-orange btn-block">Send Message</button>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="contact-wrap">
                    <div class="contact-detail">
                        <div class="ui-title text-white">
                            <h4>Email Address</h4>
                        </div>
                        <p><a href="mailto:support@matjary.in">support@playhub.com</a></p>
                    </div>
                </div>

                <div class="contact-wrap">
                    <div class="contact-detail">
                        <div class="ui-title text-white">
                            <h4>Contact Number</h4>
                        </div>
                        <p><a href="tel:+966 12345 67890">+966 12345 67890</a></p>
                    </div>
                </div>

                <div class="contact-wrap">
                    <div class="contact-detail">
                        <div class="ui-title text-white">
                            <h4>Address</h4>
                        </div>
                        <p>Al-Thumamah Road, Riyadh, Kingdom of Saudi Arabia, 12211</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14488.79129944644!2d46.6470515!3d24.7886787!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbded2a4e661fcbde!2z2LTYsdmD2Kkg2KXZitmE2KfZgSDYp9mE2YXYqtmC2K_ZhdipINmE2KrZgtmG2YrYqSDYp9mE2YXYudmE2YjZhdin2KogQWR2YW5jZWQgRWxhZg!5e0!3m2!1sen!2sin!4v1675168606592!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php
include("footer.php");
?>