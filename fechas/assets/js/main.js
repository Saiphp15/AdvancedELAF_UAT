$(document).ready(function () {

    /* CATEGORY DROPDOWN STARTS */

    $(".all-category-nav").hover(function () {
        $(".all-category-list").toggleClass("d-block");
        $(".close-bar").toggleClass("d-block");
        $(".menu-arrow").toggleClass("d-none");
    });

    $(".close-bar").click(function () {
        $(".all-category-list").removeClass("d-block");
        $(".close-bar").removeClass("d-block");
        $(".menu-arrow").removeClass("d-none");
    });

    /* CATEGORY DROPDOWN ENDS */

    /* LOGIN DROPDOWN STARTS */

    $(".account-login").hover(function () {
        $(".login-list").toggleClass("d-block");
    });

    /* LOGIN DROPDOWN ENDS */


    /* SHORTLIST ICON STARTS*/
    $(".wishlist i").click(function () {
        $(".wishlist i,span").toggleClass("press", 1000);
    });
    /* SHORTLIST ICON ENDS */



    $('#latest-products-carousel').owlCarousel({
        autoplay: true,
        loop: false,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    })


    $('#featured-products-carousel').owlCarousel({
        autoplay: true,
        loop: false,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    })

    $('#category-carousel-one').owlCarousel({
        autoplay: true,
        loop: false,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    })

    $('#category-carousel-two').owlCarousel({
        autoplay: true,
        loop: false,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    })

    $('#category-carousel-three').owlCarousel({
        autoplay: true,
        loop: false,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    })

    $('#pos-products-carousel').owlCarousel({
        autoplay: true,
        loop: false,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    })

    $('#gift-card-carousel').owlCarousel({
        autoplay: true,
        loop: false,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    })

    // GIFT CARD ON CLICK (PAYMENT PAGE)

    $("#giftCardOption").click(function () {
        $(".giftCardInput").css({ "display": "block" });
    });

});

