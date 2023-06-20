<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <title>
        Insurance Aggregator
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

    <!-- IA Stylesheet -->
    <link rel="stylesheet" href="assets/css/ia-styles.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <!-- Font Styles -->
    <link rel="stylesheet" href="assets/css/fonts.css" />


    <!-- Animate CSS & JS -->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="assets/js/wow.min.js"></script>

    <!-- GOOGLE TRANSLATE -->

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-light nav-spacing fixed-top">
            <a class="navbar-brand">ELAF INSURANCE</a>
            <form class="form-inline">
                <a href="login.php" class="nav-link navbar-link">Log In</a>
                <button href="signup.php" class="btn btn-outline-primary my-2 my-sm-0 nav-btn" type="">Sign up</button>
                    <div class="dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle nav-btn mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                           Sami Elbadawi
                        </button>
                        <div class="dropdown-menu mt-2" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="#">Logout</a>
                        </div>
                    </div>
                    <a class="nav-link navbar-link">EN</a>

            </form>
        </nav>
    </header>

    <!-- NATIONAL ID/IQAMA DETAILS MODAL -->

    <div class="modal fade" id="nationalDetailsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content popup-content">
                <div class="modal-header popup-header">
                    <h5 class="modal-title popup-title" id="exampleModalLabel">Enter Details</h5>
                    <button type="button" class="close popup-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body popup-body">
                    <div class="nid-popup">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="nid-popup-content">
                                        <h2>Insure your car and bike with</h2>
                                        <h2>Elaf Insurance</h2>
                                        <h5>Get Real Benefits</h5>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="nid-form">
                                        <form>
                                            <div class="mb-3">
                                                <input type="text" class="form-control" placeholder="National ID/Iqama Number/ Company MOI">
                                            </div>
                                            <div class="form-row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <input type="date" class="form-control" placeholder="Date of Policy to be effective">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control" placeholder="Enter Captcha">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-grid">
                                                <button class="btn btn-primary brand-btn-lb">Get Details</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- NATIONAL ID/IQAMA DETAILS MODAL -->
</body>

</html>