$(document).ready(function(){

  if ($(window).width() < 800) {

    $("#menu-button").click(function(){

      $(this).toggleClass("open");
      $("#mobile-menu").slideToggle('200ms');

      if ($("#mobile-menu").is(":visible")){
        $(".menu-item-has-children .sub-menu").hide();
      }

    });

    $(".menu-item-has-children").click(function(){
      $(this).find(".sub-menu").slideToggle("200ms");
    });

  }

  $(".sub-menu").filter(function () {
      return $(this).find('li').length < 4
  }).addClass("small-menu");

});
