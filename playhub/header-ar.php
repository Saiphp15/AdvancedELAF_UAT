<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayHUB - A Matjary Template</title>
    <link rel="stylesheet" href="assets/css/normalize.css">

    <!-- Iconfont Link -->
    <link rel="stylesheet" href="assets/icofont/icofont.min.css" />
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Bootstrap JS -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Playhub Stylesheet -->
    <link rel="stylesheet" href="assets/css/playhub-styles-ar.css" />
    <link rel="stylesheet" href="assets/css/responsive-ar.css" />

    <!-- Font Styles -->
    <link rel="stylesheet" href="assets/css/fonts.css" />

    <!-- BOOTNAV STYLESHEET -->
    <link rel="stylesheet" href="assets/css/bootnavbar-ar.css">

    <!-- Owl carousel -->
    <link rel="stylesheet" href="assets/owl-carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owl-carousel/dist/assets/owl.theme.default.min.css">
    <script src="assets/owl-carousel/dist/owl.carousel.min.js"></script>

    <!-- Local Script -->
    <script src="assets/js/main-ar.js"></script>
</head>

<body>
    <header>
        <div class="topbar ml-auto">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-9">
                        <div class="d-flex search-btn">
                            <input type="search" class="brand-input" placeholder="عن ماذا تبحث ؟">
                            <button class="brand-btn-black mr-2"><i class="icofont-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dropdown text-left mt-sm-2 mt-md-0 mt-0">
                            <a class="dropdown-toggle mb-0 login-dropdown" data-toggle="dropdown" aria-expanded="false">
                                Hello, Sultan Siddiqui
                            </a>
                            <div class="login-menu dropdown-menu">
                                <a class="dropdown-item" href="my-account-ar.php">My Account</a>
                                <a class="dropdown-item" href="change-password-ar.php">Change Password</a>
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <!-- HEADER STARTS -->
        <nav class="navbar navbar-expand-lg navbar-light header-nav" id="main_navbar">
            <a class="navbar-brand" href="index-ar.php">
                <div class="store-logo">
                    <img src="assets/images/logo.png">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0 mob-ar-align">
                    <li class="nav-item header-item">
                        <a class="nav-link active" aria-current="page" href="index-ar.php">Home</a>
                    </li>
                    <li class="nav-item header-item">
                        <a class="nav-link" href="about-us-ar.php">About Us</a>
                    </li>
                    <li class="nav-item dropdown header-item">
                        <a class="nav-link dropdown-toggle" href="products-ar.php" role="button" data-bs-toggle="dropdown">
                            Products
                        </a>
                        <ul class="dropdown-menu header-dropdown-menu">
                            <li class="nav-item dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                    Dropdown 1
                                </a>
                                <ul class="dropdown-menu header-dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li>
                                        <a class="dropdown-item" href="#">Another action</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                            Dropdown
                                        </a>
                                        <ul class="dropdown-menu header-dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li>
                                                <a class="dropdown-item" href="#">Another action</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider" />
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item header-item">
                        <a class="nav-link" href="gift-cards-ar.php">Gift Cards</a>
                    </li>
                    <li class="nav-item header-item">
                        <a class="nav-link" href="contact-us-ar.php">Contact Us</a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0">
                    <div class="header-icon">
                        <a href="wishlist-ar.php">
                            <i class="icofont-heart"></i>
                        </a>
                        <a href="cart-ar.php">
                            <i class="icofont-cart"></i>
                        </a>
                    </div>

                    <div class="language-link">
                        <a href="index.php">EN</a>
                    </div>
                </form>
            </div>
        </nav>
        <!-- HEADE ENDS -->
    </header>
</body>

</html>