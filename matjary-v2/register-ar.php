<?php
include("functions.php");
include("header-ar.php")
// PHP goes here!
?>

<!-- REGISTER SECTION STARTS -->

<section>
    <div class="custom-container">
        <div class="register-wrapper wow fadeIn" data-wow-delay="200ms">
            <div class="register-box wow slideInDown" data-wow-delay="400ms">
                <img src="assets/images/logo-2.png">
                <h4>تسجيل حساب</h4>
                <div class="form-wrapper">
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="الاسم الأول*">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="الاسم الأخير">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="البريد الإلكتروني*">
                    </div>
                    <div class="mb-3">
                        <input type="tel" class="form-control" placeholder="رقم الهاتف*">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="كلمة السر*">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="أعد كتابة كلمة المرور*">
                    </div>
                    <button class="btn btn-primary brand-btn-pink w-100 mx-auto d-block">الاشتراك</button>
                    <div class="text-center mt-2">
                        <p>لديك حساب بالفعل؟ <a href="login-ar.php">تسجيل الدخول الآن</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- REGISTER SECTION ENDS -->

<!-- Footer section  -->
<?php include("footer-ar.php") ?>