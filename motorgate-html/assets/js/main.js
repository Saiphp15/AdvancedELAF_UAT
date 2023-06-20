$(document).ready(function () {
  /* header scoll code */
  $(window).scroll(function () {
    var sticky = $(".navbar"),
      scroll = $(window).scrollTop();
    if (scroll >= 50) {
      sticky.addClass("fixed-top");
      $(".navbar-brand img").css({"background-color":"#ffffff"});
    } else {
      sticky.removeClass("fixed-top");
      $(".navbar-light .navbar-nav .nav-link, .nav-right-link").css({ "color": "#ffffff" });
      $(".navbar-brand img").css({"background-color":"transparent"});
    }
  });

  /* SHORTLIST ICON STARTS*/
  $(".shortlist i").click(function () {
    $(".shortlist i,span").toggleClass("press", 1000);
});
/* SHORTLIST ICON ENDS */
});