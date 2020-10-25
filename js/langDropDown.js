$(document).ready(function(){
  $(".lang").click(function(){
    $('.lang').hasClass('night') ?
      $('.lang').toggleClass('night-lang') :
      $(this).toggleClass('night');
      
    $('.more-lang').toggle("fast");
  }); });
