<?php
include("functions.php");
include("header-ar.php")
// PHP goes here!
?>

<section>
    <div class="custom-container">
        <div class="contact-wrapper">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="contact-overview blue-bg">
                        <h3 class="wow fadeInDown">معلومات الاتصال</h3>
                        <p class="wow fadeInUp">هذا هو المكان المناسب لتبدأ، اعثر على الإجابات التي تحتاجها من فريق متجري.</p>

                        <div class="contact-details">
                            <h4 class="wow fadeInDown">اكتب لنا</h4>
                            <p class="wow fadeInUp"><i class="icofont-envelope"></i><a href="mailto:support@matjary.com">support@matjary.com</a></p>
                            <h4 class="wow fadeInDown">اتصل بنا</h4>
                            <p class="wow fadeInUp"><i class="icofont-ui-call"></i><a href="tel:+966114007960"> +966 11 4007960</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-8">
                    <div class="contact-form">
                        <div class="form-wrapper">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="mb-3 wow fadeIn" data-wow-delay="400ms">
                                        <input type="text" class="form-control" placeholder="اسمك">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 wow fadeIn" data-wow-delay="600ms">
                                        <input type="email" class="form-control" placeholder="عنوان البريد الإلكتروني">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="mb-3 wow fadeIn" data-wow-delay="800ms">
                                        <input type="tel" class="form-control" placeholder="رقم الهاتف">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 wow fadeIn" data-wow-delay="1000ms">
                                        <input type="text" class="form-control" placeholder="الموضوع">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row wow fadeInDown" data-wow-delay="1200ms">
                                <textarea type="text" class="form-control" placeholder="الرسالة" rows="5"></textarea>
                            </div>
                            <button type="button" class="btn btn-primary btn-lg brand-btn-pink float-left mt-4 wow fadeInLeft" data-wow-delay="1400ms">إرسال النموذج</button>
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
<?php include("footer-ar.php") ?>