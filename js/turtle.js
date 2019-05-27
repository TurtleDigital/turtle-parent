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

});

if( $('.sub-menu').length >= 3 ) {
  $(".sub-menu").html("This box has more than 3");
  }else{
  $('.sub-menu').html("This has less than 3")
  }
