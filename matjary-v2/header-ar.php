<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <title>
        Matjary - Ecommerce Store in Saudi Arabia
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/normalize.css">

    <!-- Iconfont Link -->
    <link rel="stylesheet" href="assets/icofont/icofont.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Matjary Stylesheet -->
    <link rel="stylesheet" href="assets/css/matjary-styles-ar.css" />
    <link rel="stylesheet" href="assets/css/responsive-ar.css" />

    <!-- Font Styles -->
    <link rel="stylesheet" href="assets/css/fonts.css" />

    <!-- Animate CSS & JS -->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="assets/js/wow.min.js"></script>
</head>

<body>
    <header>
        <nav class="custom-container navbar navbar-expand-lg navbar-light nav-spacing fixed-top">
            <a class="navbar-brand" href="index-ar.php"><img class="img-fluid" src="assets/images/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item nav-active">
                        <a class="nav-link" href="index-ar.php">ابدأ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about-us-ar.php">من نحن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services-ar.php">خدماتنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pricing-ar.php">الخطط المستقبلية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="themes-ar.php">الموضوعات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact-ar.php">تواصل معنا</a>
                    </li>
                </ul>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="header-btn-link" href="login-ar.php">دخول الأعضاء</a>
                    <a href="register-ar.php"><button class="btn btn-primary me-md-2 nav-reg-btn" type="button">الاشتراك</button></a>
                    <a class="header-btn-link" href="index.php">EN</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- FREE TRIAL MODAL STARTS -->
    <div class="modal fade" id="trialModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content trial-modal-content">
                <div class="modal-header trial-modal-header">
                    <img src="assets/images/logo-2.png">
                    <button type="button" class="close trial-modal-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body trial-modal-body">
                    <h4 class="trial-modal-title">ابدأ نسخة تجريبية مجانية لمدة 14 يومًا من <span class="matjary-font">MATJARY</span></h4>
                    <div class="trial-modal-form">
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="عنوان البريد الإلكتروني">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="تخزين كلمة المرور">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="اسم متجرك">
                        </div>

                        <button class="btn btn-primary brand-btn-pink-popup mx-auto d-block">إنشاء متجرك</button>
                    </div>
                </div>
                <div class="modal-footer trial-modal-footer">
                    <small>مدعوم من <a href="https://advancedelaf.com" target="_blank">Advanced Elaf</a></small>
                </div>
            </div>
        </div>
    </div>
    <!-- FREE TRIAL MODAL ENDS -->
</body>

</html>