<!DOCTYPE html>

<html lang="en">

<head>
    <title>
        Elaf Insurance | Saudi Arabia's Best Insurance Platform
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <!-- Cosma Stylesheet -->
    <link rel="stylesheet" href="assets/css/elaf-insurance-styles.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <!-- Font Styles -->
    <link rel="stylesheet" href="assets/css/fonts.css" />



    <!-- Owl carousel -->
    <link rel="stylesheet" href="assets/owl-carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owl-carousel/dist/assets/owl.theme.default.min.css">
    <script src="assets/owl-carousel/dist/owl.carousel.min.js"></script>

    <!-- Local Script -->
    <script src="assets/js/main.js"></script>
</head>

<body>

    <!-- LOGIN MODAL STARTS -->

    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg brand-modal-dialog">
            <div class="modal-content brand-modal-content">
                <div class="modal-header brand-modal-header">
                    <h5 class="modal-title brand-modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body brand-modal-body">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="login-signup-form">
                                    <div class="floating-label mb-4">
                                        <input class="floating-input" type="email" placeholder=" ">
                                        <span class="highlight"></span>
                                        <label>Email Address</label>
                                    </div>

                                    <div class="floating-label mb-4">
                                        <input class="floating-input" type="password" placeholder=" ">
                                        <span class="highlight"></span>
                                        <label>Password</label>
                                    </div>

                                    <div class="text-center mb-3">
                                        <button class="brand-btn btn-block">Login</button>
                                    </div>

                                    <div class="ls-form-link text-center mb-2">
                                        <a href="#" class="mb-3">Forgot Password?</a>

                                    </div>
                                    <div class="ls-form-link text-center">
                                        <p>Don't have an account? <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signupModal">Sign Up Here</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="login-banner">
                                    <img class="img-fluid" src="assets/images/login-banner.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- LOGIN MODAL ENDS -->

    <!-- SIGNUP MODAL STARTS -->

    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg brand-modal-dialog">
            <div class="modal-content brand-modal-content">
                <div class="modal-header brand-modal-header">
                    <h5 class="modal-title brand-modal-title" id="exampleModalLabel">Sign up</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body brand-modal-body">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="login-signup-form">
                                    <div class="floating-label mb-4">
                                        <input class="floating-input" type="email" placeholder=" ">
                                        <span class="highlight"></span>
                                        <label>Phone Number</label>
                                    </div>
                                    <div class="floating-label mb-4">
                                        <input class="floating-input" type="email" placeholder=" ">
                                        <span class="highlight"></span>
                                        <label>Email Address</label>
                                    </div>

                                    <div class="floating-label mb-4">
                                        <input class="floating-input" type="password" placeholder=" ">
                                        <span class="highlight"></span>
                                        <label>Password</label>
                                    </div>

                                    <div class="text-center mb-3">
                                        <button class="brand-btn btn-block">Sign up</button>
                                    </div>

                                    <div class="ls-form-link text-center">
                                        <p>Already have an account? <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#loginModal">Login Now</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="login-banner">
                                    <img class="img-fluid" src="assets/images/signup-banner.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SIGNUP MODAL ENDS -->

    <header class="main-header fixed-top">
        <nav class="navbar navbar-expand-lg mt-3 brand-header container">
            <a class="navbar-brand" href="index.php">Elaf Insurance</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item header-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
                    </li>
                    <li class="nav-item">
                        <button class="brand-btn" data-toggle="modal" data-target="#signupModal">Sign Up</button>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</body>

</html>