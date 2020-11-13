function indexNightMode(){
  $('body').toggleClass('night');
  $('#logo').attr('src', function(index,attr) {
    return attr=='resource/index/black-logo.jpg' ?
    'resource/index/white-logo.jpg':'resource/index/black-logo.jpg';
  });

  $('.Header').toggleClass('night');
  $('.line').toggleClass('white');
  $('.lang').toggleClass('night');
  $('.more-lang').toggleClass('night-lang');
  $('#moon').toggleClass('white-moon');

  $('.poster-text').toggleClass('glow');
  $('#Poster').toggleClass("white");
  $('.Catalog').toggleClass("night");
  $('.Location').toggleClass("night");

  $('.Contact').toggleClass('white-contact');
  $('.Contact').toggleClass("white");

  $('.About').toggleClass("night");
  $('.Footer').toggleClass("white");
}
function productNightMode(){
  $('#logo').attr('src', function(index,attr) {return attr=='https://rb.gy/mkquhl' ?
    'https://www.wallpaperflare.com/static/948/854/435/mr-robot-e-corp-evil-corp-evil-wallpaper.jpg':'https://rb.gy/mkquhl';
  });
  $('.Header').toggleClass('night');
  $('.line').toggleClass('white');
  $('.lang').toggleClass('night');
  $('.more-lang').toggleClass('night-lang');
  $('#moon').toggleClass('white-moon');

  $('.search-product').children('input').toggleClass('night');
  $('.search-product').toggleClass('night');
  $('.gallery_img').toggleClass('night');
  $('body').toggleClass('night-product');
  $('.pagination').toggleClass('night');
}
