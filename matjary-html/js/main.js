/* this initiate dom event of jquery */
$(document).ready(function () {
  /* header scoll code */
  $(window).scroll(function () {
    var sticky = $(".navbar"),
      scroll = $(window).scrollTop();
    if (scroll >= 50) {
      sticky.addClass("fixed-top");
  } else {
      sticky.removeClass("fixed-top");
  }
  });

  // On Click Popupform appearance

  $(".storepopup").click(function () {
    $("#store-popup-form").css("display", "block");
  });

  $(".close-popup").click(function () {
    $("#store-popup-form").css("display", "none");
  });

  $(".authorize-image").click(function () {
    $("#authorize-payment").css("display", "block");
  });

  $(".back-pay-btn").click(function () {
    $("#authorize-payment").css("display", "none");
  });

  var clicked = false;
  $(".switcher").click(function () {

    if (!clicked) {
      clicked = true;
      $("switcher").addClass("input:checked + .slider:before");
      $(".amount-duration").text("/ yr");
      $("#basic-matjary-plan").text('1999');
      $("#moderate-matjary-plan").text('2999');
      $("#ad-matjary-plan").text('4500');
    }

    else {
      clicked = false;
      $("switcher").removeClass("input:checked + .slider:before");
      $(".amount-duration").text("/ mo");
      $("#basic-matjary-plan").text('29');
      $("#moderate-matjary-plan").text('79');
      $("#ad-matjary-plan").text('299');
    }

  });

  // On Click Accordion

  $(".btn-nav-accordion").click(function () {
    // alert("Accrodian Rotate");
    $(".icofont-rounded-right").ToggleClass("icofont-rounded-down");
  });

});

/* javascript function here */
function test() {
  alert("javascript function!");
}
