<?php include_once 'include/auto_class_loader.php' ?>

<!DOCTYPE html>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js'>  </script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<html lang="en" dir="ltr">
  <head>
    <title>Web 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <link rel="stylesheet" href="style/test_style.css">
      <link rel="stylesheet" href="nightmode.js">
    <!-- <link rel="stylesheet" href="Js/nightmode.js"> -->
  </head>
  <body>
      <div class="Catalog">
        <div class="gallery js-flickity"
          data-flickity-options='{ "wrapAround": true ,"pageDots": false,"autoPlay": 1500 }'>
          <?php
            $x = 15;
            for ($i=0; $i < $x; $i++) {
              echo "<div class='gallery-cell'></div>";
              if($i == $x-1){
                echo "<div class='add_prod_to_catalog'>
                  <button id='open_image'>+</button>
                </div>";
              }
            }
          ?>
        </div>
      </div>

      <div class="prod_list_to_add">
        <div class="tmp_image">
          <img src="source/d1.jpg" alt="bad">
        </div>
      </div>

      <script>

      $("#open_image").click(function(){
        $(".prod_list_to_add").show();
      });

      </script>
  </body>
</html>
