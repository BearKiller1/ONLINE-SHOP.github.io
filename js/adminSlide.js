var panel_index = 0;
function Toggle_panel(button){
  button.classList.toggle("change");
  if(panel_index == 0){
    $('#panel').css("width","5%");
    $('#panel_words').hide();
    $('#panel_button').css("margin","1vh 1vw 0 0");
    $('#panel_icons').css("display","block");
    $('#panel_header').css("display","none");
    $('#logmeout').css("display","none");
    $('.section').css("width","95vw");
    $('.section').css("margin","0 0 0 5vw");
    panel_index = 1;
  }
  else{
    $('#panel').css("width","19%");
    $('#panel_words').fadeIn(1300);
    $('#panel_button').css("margin","2% 5% 0 0");
    $('#panel_icons').css("display","none");
    $('#panel_header').fadeIn(1300);
    $('#logmeout').show(500);
    $('.section').css("width","81vw");
    $('.section').css("margin","0 0 0 19vw");
    panel_index = 0;
  }
}
