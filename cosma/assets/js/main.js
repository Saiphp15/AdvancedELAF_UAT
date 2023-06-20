$(document).ready(function () {
    $('#latest-products-carousel').owlCarousel({
        loop: false,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })

    $('#featured-products-carousel').owlCarousel({
        loop: false,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })

    $('#pos-products-carousel').owlCarousel({
        loop: false,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })

    $('#brand-partners-carousel').owlCarousel({
        loop: false,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })

    $('.category-carousel').owlCarousel({
        autoplay: true,
        loop: false,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })

    // GIFT CARD ON CLICK (PAYMENT PAGE)

    $("#giftCardOption").click(function () {
        $(".giftCardInput").css({"display":"block"});
    });

});


