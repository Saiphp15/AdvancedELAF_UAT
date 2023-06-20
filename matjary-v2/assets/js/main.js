$(document).ready(function () {
    /* header scoll code */
    $(window).scroll(function () {
        var sticky = $(".navbar"),
            scroll = $(window).scrollTop();
        if (scroll >= 10) {
            sticky.addClass("nav-scroll-spacing");
        } else {
            sticky.removeClass("nav-scroll-spacing");
        }
    });

    /* PLAN SWITCHER */
    var clicked = false;
    $(".switcher").click(function () {

        if (!clicked) {
            clicked = true;
            $("switcher").addClass("input:checked + .slider:before");
            $(".amount-duration").text("/yr");
            $("#basic-matjary-plan").text('1999.00');
            $("#moderate-matjary-plan").text('2999.00');
            $("#ad-matjary-plan").text('4500.00');
        } else {
            clicked = false;
            $("switcher").removeClass("input:checked + .slider:before");
            $(".amount-duration").text("/mo");
            $("#basic-matjary-plan").text('29.00');
            $("#moderate-matjary-plan").text('79.00');
            $("#ad-matjary-plan").text('299.00');
        }

    });
});