$(document).ready(function(){
  $("#menu-button").click(function(){
    $("#mobile-menu").slideToggle('200ms');
  });

  $(".menu-item-has-children").click(function(){
    $(this).find(".sub-menu").slideToggle('200ms');
  });
});
