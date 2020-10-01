<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Product</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js'>  </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="style/products.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <link rel="stylesheet" href="style/css.css">
      <link rel="stylesheet" href="nightmode.js">
  </head>
  <body>

    <div class="Header w3-light-gray">
      <img src="https://rb.gy/mkquhl" alt="Logo">
      <a href="index.php"> მთავარი </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <a href="index.php#product"> პროდუქტი </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <a href="index.php#lokacia"> ლოკაცია </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <a href="index.php#kontaqti"> კონტაქტი </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <a href="index.php#shesaxeb"> შესახებ </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <div class="dark-button" id="mode">
        <i class='fas fa-moon night-mode ' id="moon"></i>
      </div>
      <div class="lang"><a href='#'> KA </a></div>
    </div>

    <div id="side_menu">
      <div class="select_section">
        <h3>სექცია</h3>
        <select class="" name="sectiins">
          <option value="man">კაცის</option>
          <option value="women">ქალის</option>
          <option value="child">ბავშვის</option>
        </select>
      </div>

      <div class="category">
        <h3>კატეგორია</h3>
        <select class="" name="">
          <option value="sharvali">შარვალი</option>
          <option value="sharvali">შარვალი</option>
          <option value="sharvali">შარვალი</option>
          <option value="sharvali">შარვალი</option>
          <option value="sharvali">შარვალი</option>
          <option value="sharvali">შარვალი</option>
        </select>
      </div>

      <div class="select_sorting">
        <h4>დახარისება</h4>
        <select class="" name="sort_by">
          <option value="low">ფასის ზრდით</option>
          <option value="high">ფასის კლებადობით</option>
        </select>
      </div>

      <div class="price">
        <input type="number" name="min" min="0" value="" placeholder="დან">
        <input type="number" name="max" min="0" value="" placeholder="მდე">
      </div>
    </div>

    <form class="search_prod" action="index.html" method="post">
      <input type="text" name="search" autocomplete="off" placeholder="ძიება"value="">
      <i class="fa fa-search"></i>
    </form>

    <div class="product_gallery">
      <?php
        for ($i=1; $i < 5; $i++) {
          echo "<div class='gallery_img' id='open_image'>
                  <img src='source/d".$i.".jpg'>
                    <h4>Red Dress</h4>
                    <p>$124.99</p>
                </div>";
        }
        echo "<div class='big_black_div' id='opacity_back'>
              </div>
              <div class='product_solo'id='image_id'>
                <button id='hide_prod'>X</button>
                <img src='source/d1.jpg'>
                <h4>Red Dress</h4>
                <p>$124.99</p>
              </div>";
      ?>
    </div>

    <div class="Footer_prod">
      <h5 id="footer_text"><br><br><br>
        <a class='fa fa-address-card-o'>სულხან კვერნაძის 33ა</a></i> <br><br><br>
        <a class='fa fa-address-card-o'>555 555 555</a><br><br><br>
        <a class='fa fa-address-card-o'>GroupC@mail.com</a><br><br><br>
      </h5><br><br>
      <i class='fab fa-facebook fb'></i>
      <i class='fab fa-instagram inst'></i>
      <i class='fab fa-twitter twitter'></i><br>
      <h2>𝗣𝗼𝘄𝗲𝗿𝗲𝗱 𝗕𝘆 𝗨𝗗</h2><br>
      <p>©GROUP C &nbsp All rights reserved</p>
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

    </script>
  </body>
</html>
