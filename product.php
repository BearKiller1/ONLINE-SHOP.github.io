<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Product</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <link rel="icon" href="https://seeklogo.com/images/E/e-corp-logo-DFE35F4CE4-seeklogo.com.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/fonts.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="style/test_prod.css">
    <link rel="stylesheet" href="style/index.css">
  </head>
  <body>
    <div class="Header night-text">
      <img src="resource/index/black-logo.jpg" alt="Logo" id='logo'>
      <a href="index.php#mtavari"> მთავარი </a>
      <a href="product.php"> პროდუქტი </a>
      <a href="index.php#lokacia"> ლოკაცია </a>
      <a href="index.php#kontaqti"> კონტაქტი </a>
      <a href="index.php#shesaxeb"> შესახებ </a>

      <div class="dark-button" id="mode">
        <i class='fas fa-moon night-mode ' id="moon"  onclick="productNightMode()"></i>
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

      <select name="cateogry_select">
        <option disabled selected>კატეგორია</option>
        <option value="sharvali">შარვალი</option>
        <option value="sharvali">შარვალი</option>
        <option value="sharvali">შარვალი</option>
        <option value="sharvali">შარვალი</option>
        <option value="sharvali">შარვალი</option>
        <option value="sharvali">შარვალი</option>
      </select>

      <select  name="collection">
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

      <select  name="sort_by">
        <option disabled selected>ფერი</option>
        <option value="low">წითელი</option>
        <option value="high">ყვითელი</option>
        <option value="high">მწვანე</option>
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
      <i class='fas fa-shopping-cart'></i>
    </div>
    <div class="cart">
      <div class="cart-title">ჯამური ფასი 120$</div><hr>
      <?php
        for ($i=0; $i < 10; $i++) {
          echo "<div class='cart-items'>
                <a href='#'>X hoodie 12$</a>
                <img src='resource/product/hoodie.jpg'>
                <i class='material-icons'>close</i>
               </div>";
        }
      ?>
    </div>
    <div class="more"><a href='#'>კალათა</a></div>

    <div class="product_gallery">
      <?php
        for ($i=1; $i < 17; $i++) {
          echo "<div class='gallery_img' id='".$i."'>
                <img src='resource/product/hoodie.jpg'>
                    <h4>Hoodie</h4>
                    <p>$12</p>
                    <i class='fas fa-cart-plus' onclick='addToCart(".$i.")'></i>
                    <button class='w3-button' onclick='buy(".$i.")'>შეძენა</button>
                </div>";
        }
        echo "<div class='big_black_div' id='opacity_back'>
              </div>
              <div class='product_solo'id='image_id'>
                <button id='hide_prod'>X</button>
                <img src='resource/product/hoodie.jpg'>
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
      $(document).ready(function() {
        $(".gallery_img").click(openProduct() ;);
        $("#hide_prod").click(openProduct(); );

        $("#basket").click(function(){
          $(".cart").slideToggle(300);
          $('.more').toggle("slow"); });
        });
        function openProduct(){
          $("#image_id").toggle();
          $("#opacity_back").toggle();
        }

      function addToCart(id){alert(id);}//add item to cart by id
      function buy(id){alert(id);}//pass to php id
    </script>
    <script src="js/nightmode.js"></script>
    <script src="js/langDropDown.js"></script>
  </body>
</html>
