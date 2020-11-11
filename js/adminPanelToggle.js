$(document).ready(function() {
  $('.panelToggler').click(function(){
    if(! $(this).hasClass('change') ){
      $('.panelToggler').toggleClass("change");
      $('.Cpanel').css("width","5%");
      $('#Panel-head').children("h1").hide();
      $('#Panel-words').css("display","none");
      $('#Panel-icons').css("display","flex");
      $('.section').css("width","95%");
    }
    else{
      $('.panelToggler').toggleClass("change");
      $('.Cpanel').css("width","20%");
      $('#Panel-head').children("h1").fadeToggle("slow");
      $('#Panel-words').fadeToggle(1500);
      $('#Panel-icons').css("display","none");
      $('.section').css("width","80%");
    }
  });
});
