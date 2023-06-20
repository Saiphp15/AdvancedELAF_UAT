<?php
include("functions.php");
include("header-ar.php")
// PHP goes here!
?>

<!-- LOGIN SECTION STARTS -->

<section>
    <div class="custom-container">
        <div class="login-wrapper wow fadeIn" data-wow-delay="200ms">
            <div class="login-box wow slideInDown" data-wow-delay="400ms">
                <img src="assets/images/logo-2.png">
                <h4>تسجيل الدخول إلى حسابك</h4>
                <div class="form-wrapper">
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="البريد الإلكتروني*">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="كلمة السر*">
                    </div>
                    <div class="text-right">
                        <p><a href="forgot-password-ar.php">نسيت كلمة المرور؟</a></p>
                    </div>
                    <button class="btn btn-primary brand-btn-pink w-100 mx-auto d-block">تسجيل الدخول</button>
                    <div class="text-center mt-2">
                        <p>ليس لديك حساب؟ <a href="register-ar.php">قم بالتسجيل </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer section  -->
<?php include("footer-ar.php") ?>