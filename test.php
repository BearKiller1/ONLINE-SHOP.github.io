<?php include_once 'include/auto_class_loader.php' ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <title>Web 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src='https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js'>  </script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="style/testig.css">
  </head>
  <body>
      <div class="admin_Catalog">
        <div class="admin_gallery js-flickity"
          data-flickity-options='{ "wrapAround": true ,"pageDots": false,"autoPlay": 1500 }'>
          <?php
            $x = 5;
            for ($i=0; $i < $x; $i++) {
              echo "<div class='admin_gallery-cell'>
                <img src='source/d".$i.".jpg'>
              </div>";
              if($i == $x-1){
                echo "<div class='admin_add_prod_to_catalog'>
                <div class='static-banner '>
                        <button id='open_image'>+</button>
                      </div>";
              }
            }
          ?>
        </div>
      </div>
      <div class='admin_black_div'>
      </div>
      <div class="admin_prod_list_to_add">
        <button class="w3-button" id="add_prod_butt">add</button>
        <button class="w3-button" id="close_products">X</button>
        <?php
        for ($i=1; $i < 8; $i++) {
          echo "
          <div class='admin_gallery_img' id='open_image'>
            <input type='checkbox' name=new_prod_int_catalog>
            <img src='source/d".$i.".jpg'>
            <h4>Red Dress</h4>
            <p>$124.99</p>
          </div>";
        }
        ?>
        </div>
      <script>
        $("#open_image").click(function(){
          $(".admin_prod_list_to_add").show();
          jQuery('.admin_prod_list_to_add').css('opacity', '1');
          $(".admin_black_div").show();
        });
        $("#close_products").click(function(){
          $(".admin_prod_list_to_add").hide();
          $(".admin_black_div").hide();
        });
      </script>
  </body>
</html>
