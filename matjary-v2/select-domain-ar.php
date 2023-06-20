<?php
include("functions.php");
include("header-ar.php")
// PHP goes here!
?>

<section class="">
    <div class="custom-container">
        <div class="domain-section-wrapper blue-bg">
            <div class="domain-sec-title">
                <h4>اختر المجال الخاص بك</h4>
            </div>
            <div class="domain-plan-name">
                <h4>الخطة المحددة: <span class="pink-highlighter font-weight-bold">SAR 459</span></h4>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="chooseDomain">
                        <div class="form-check mb-2 float-right">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="domain-checkbox-one" value="option1" checked="">
                            <label class="form-check-label" for="domain-checkbox-one">أريد استخدام مجال فرعي</label>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text domain-group-text">http://</span>
                            </div>
                            <input type="text" class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text domain-group-text">.sa-matjary.com</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="chck-domain-btn">
                        <button class="btn btn-primary brand-btn-pink">تحقق من التوفر</button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="chooseDomain">
                        <div class="form-check mb-2 float-right">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="domain-checkbox-two" value="option1" checked="">
                            <label class="form-check-label" for="domain-checkbox-two">أريد استخدام مجال جديد</label>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text domain-group-text">http://www.</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary dropdown-toggle domain-group-text" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">.com</button>
                                <div class="dropdown-menu" style="will-change: transform;">
                                    <a class="dropdown-item" href="#">.info</a>
                                    <a class="dropdown-item" href="#">.org</a>
                                    <a class="dropdown-item" href="#">.biz</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="chck-domain-btn">
                        <button class="btn btn-primary brand-btn-pink">تحقق من التوفر</button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="chooseDomain">
                        <div class="form-check mb-2 float-right">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="domain-checkbox-two" value="option1" checked="">
                            <label class="form-check-label" for="domain-checkbox-two">أريد استخدام المجال الحالي</label>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text domain-group-text">http://www.</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary dropdown-toggle domain-group-text" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">.com</button>
                                <div class="dropdown-menu" style="will-change: transform;">
                                    <a class="dropdown-item" href="#">.info</a>
                                    <a class="dropdown-item" href="#">.org</a>
                                    <a class="dropdown-item" href="#">.biz</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="row">
            <button class="btn btn-primary brand-btn-purple mx-auto d-block">الاستمرار</button>
            </div>
        </div>
    </div>
</section>

<!-- Footer section  -->
<?php include("footer-ar.php") ?>