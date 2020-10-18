<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Product</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <link rel="icon" href="https://seeklogo.com/images/E/e-corp-logo-DFE35F4CE4-seeklogo.com.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="style/product.css">
    <link rel="stylesheet" href="style/index.css">
  </head>
  <body>
    <div class="Header night-text">
      <img src="https://rb.gy/mkquhl" alt="Logo" id='logo'>
      <a href="index.php#mtavari"> მთავარი </a>
      <a href="product.php"> პროდუქტი </a>
      <a href="index.php#lokacia"> ლოკაცია </a>
      <a href="index.php#kontaqti"> კონტაქტი </a>
      <a href="index.php#shesaxeb"> შესახებ </a>

      <div class="dark-button" id="mode">
        <i class='fas fa-moon night-mode ' id="moon"  onclick="nightMode()"></i>
      </div>

      <div class="line"></div>
      <div class="lang">
        <a href='#'> KA </a>
        <div class="more-lang">
          <a href="#"> EN </a>
          <a href="#"> RU </a>
        </div>
      </div>
    </div>

    <div id="side_menu">
      <select  name="sections">
        <option disabled selected>სექცია</option>
        <option value="man">კაცის</option>
        <option value="women">ქალის</option>
        <option value="child">ბავშვის</option>
      </select>

      <select name="">
        <option disabled selected>კატეგორია</option>
        <option value="sharvali">შარვალი</option>
        <option value="sharvali">შარვალი</option>
        <option value="sharvali">შარვალი</option>
        <option value="sharvali">შარვალი</option>
        <option value="sharvali">შარვალი</option>
        <option value="sharvali">შარვალი</option>
      </select>

      <select  name="">
        <option disabled selected>კოლექცია</option>
        <option value="sharvali">ზაფხული</option>
        <option value="sharvali">შემოდგომა</option>
        <option value="sharvali">ზამთარი</option>
        <option value="sharvali">გაზაფხული</option>
      </select>

      <select  name="sort_by">
        <option disabled selected>დახარისება</option>
        <option value="low">ფასის ზრდით</option>
        <option value="high">ფასის კლებადობით</option>
      </select>

      <br>
      <input type="number" name="min" min="0" placeholder="დან">
      <input type="number" name="max" min="0" placeholder="მდე">
      <br>

      <button type="submit" class="" name="button">გაფილტვრა</button>
    </div>

    <form class="search-product " >
      <input type="text" name="search" autocomplete="off" placeholder="ძიება">
      <i class="fa fa-search"></i>
    </form>
    <div id="basket">
      <i class='fas fa-shopping-cart'></i><p></p>
    </div>
    <div class="cart">
      <?php
        for ($i=0; $i < 111; $i++) {
          echo "a<br>";
        }
      ?>
    </div>

    <div class="product_gallery">
      <?php
        for ($i=1; $i < 17; $i++) {
          echo "<div class='gallery_img' id='open_image'>
                  <img src='https://ae01.alicdn.com/kf/HTB1PDJ3XyzxK1Rjy1zkq6yHrVXaa/Xxxtentacion-Hoodie-Sad-Men-Sweatshirts-Rapper-Hip-Hop-Hooded-Pullover-Sweatershirts-Swag-Hoody-Cotton-Revenge-Kill.jpg_640x640.jpg'>
                    <h4>Hoodie</h4>
                    <p>$12</p>
                    <button class='w3-button'>დამატება</button>
                </div>";
        }
        echo "<div class='big_black_div' id='opacity_back'>
              </div>
              <div class='product_solo'id='image_id'>
                <button id='hide_prod'>X</button>
                <img src='https://ae01.alicdn.com/kf/HTB1PDJ3XyzxK1Rjy1zkq6yHrVXaa/Xxxtentacion-Hoodie-Sad-Men-Sweatshirts-Rapper-Hip-Hop-Hooded-Pullover-Sweatershirts-Swag-Hoody-Cotton-Revenge-Kill.jpg_640x640.jpg'>
                <h4>Red Dress</h4>
                <p>$12</p>
              </div>";
      ?>


      <div class="pagination">
        <a href="#">&laquo;</a>
        <a class="active" href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
        <a href="#">&raquo;</a>
      </div>

    </div>
    <script>
      // Onclick image opens and closes 1 Product
      $(".gallery_img").click(function(){
        jQuery('#footer_text').css('opacity', '0.3');
        $("#image_id").show();
        $("#opacity_back").show();
      });

      $("#hide_prod").click(function(){
        jQuery('#footer_text').css('opacity', '1');
        $("#image_id").hide();
        $("#opacity_back").hide();
      });
      // NIGHT MODE
      function nightMode(){
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

      // HOVER POSTER BANNER
      $('#poster_but').mouseover(function(event) {
          $('.Poster').css("opacity","0.7");
        }).mouseout(function(event) {
          $('.Poster').css("opacity","0.9");
      });

      // language toggle down
      $(document).ready(function(){
        $(".lang").click(function(){
          $('.lang').hasClass('night') ? $('.lang').toggleClass('night-lang') :   $(this).toggleClass('night');
          $('.more-lang').toggle("fast");
        }); });

      $(document).ready(function() {
        $("#basket").click(function(){$(".cart").slideToggle(300);})
      });
    </script>
  </body>
</html>
