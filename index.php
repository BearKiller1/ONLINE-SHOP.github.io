<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="icon" href="https://seeklogo.com/images/E/e-corp-logo-DFE35F4CE4-seeklogo.com.png">
    <title>Web 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/fonts.css">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="Fonts/WOFFs/fonts.css">

    <script src='https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js'>  </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  </head>
  <body id="body">
    <div class="Header night-text">
      <img src="resource/index/black-logo.jpg" alt="Logo" id='logo'>
      <a href="index.php#mtavari"> მთავარი </a>
      <a href="product.php"> პროდუქტი </a>
      <a href="index.php#lokacia"> ლოკაცია </a>
      <a href="index.php#kontaqti"> კონტაქტი </a>
      <a href="index.php#shesaxeb"> შესახებ </a>

      <div class="dark-button" id="mode">
        <i class='fas fa-moon night-mode ' id="moon"  onclick="indexNightMode()"></i>
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

    <!-- MAIN -->
    <i id ="mtavari"></i>
    <div class="Poster">
      <h1 class='poster-text'>𝒸𝓁𝑜𝓉𝒽</h1>
      <button type="submit" name="button" id="poster_but" >შეძენა</button>
      <form class="Search" action="index.html" method="post">
        <input type="text" name="search" class='search' autocomplete="off" placeholder="ძიება"value="">
        <a href="#"class="fa fa-search search-butt " aria-hidden="true"></a>
      </form>
    </div>

    <div class="Catalog">
      <div class="gallery js-flickity"
        data-flickity-options='{ "wrapAround": true ,"pageDots": false,"autoPlay": 1500 }'>
        <?php
          for ($i=0; $i < 20; $i++) {
            echo "<div class='gallery-cell'></div>";  }
        ?>
      </div>
    </div>
    <div class="Catalog">
      <div class="gallery js-flickity"
        data-flickity-options='{ "wrapAround": true ,"pageDots": false,"autoPlay": 1500 }'>
        <?php
          for ($i=0; $i < 20; $i++) {
            echo "<div class='gallery-cell'></div>";  }
        ?>
      </div>
    </div>

    <!-- LOCATION -->
    <i id ="lokacia"></i>
    <div class="Location" >
      <li>სულხან კვერნაძის 33ა</li>
      <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d2978.3381357595163!2d44.78043026493833!3d41.71322183369588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e3!4m3!3m2!1d41.7130128!2d44.7826051!4m5!1s0x40440cd4dd1ef98d%3A0xbefb5bef42f2ce69!2z4YOS4YOb4YOY4YOg4YOX4YOQIOGDm-GDneGDlOGDk-GDkOGDnOGDmCwg4YOX4YOR4YOY4YOa4YOY4YOh4YOY!3m2!1d41.713245099999995!2d44.7826587!5e0!3m2!1ska!2sge!4v1598810784490!5m2!1ska!2sge"
        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
      </iframe>
    </div>

    <!-- CONTACT -->
    <i id ="kontaqti"></i>
    <div class="Contact"  id ="kontaqti">
      <form action="index.html" method="post"><br>
        <p>მოგვწერეთ</p>
        <input type="text" name="name" placeholder="სახელი" value=""><br>
        <input type="text" name="mail" placeholder="ელ. ფოსტა" value=""><br>
        <textarea type="text" name="description" placeholder="აღწერა" value=""></textarea>
        <br>
        <p><button class="w3-button w3-round-large ">შემდეგი</button>
      </form>
    </div>

    <!-- ABOUT -->
    <i id ="shesaxeb"></i>
    <div class="About"  id ="shesaxeb">
        <div class="Description">
          <img src="resource/index/desc2.jpg" alt="retail store">
          <div class="desc-text">
                <p>• სულხან კვერნაძის 33ა<br>
                  • საუკეთესო ხარისხის ტანისამოსი,<br>
                  ფეხსაცმელი  და აქსესუარები<br>
                </p>
          </div>
        </div>


        <div class="Description">
          <div class="desc-text">
          <p>  • ჩვენ ვართ საქართველოში <br>ოფიციალური
           წარმომადგენლები<br> უცხოური ბრენდების
           აირჩიე </p>
          </div>
        <img src="resource/index/desc1.jpg" alt="retail store">
    </div><br><br>

    <div class="Footer">
      <div class="fleft">
        <a class='fa fa-address-card-o'>555 555 555</a><br>
        <a class='fa fa-address-card-o'>UniqueDesigns@mail.com</a><br>
        <a class='fa fa-address-card-o'>სულხან კვერნაძის 33ა</a><br>
      </div>
      <div class="fcenter">
        <i class='fab fa-facebook fb'></i>
        <i class='fab fa-instagram inst'></i>
        <i class='fab fa-twitter twitter'></i><br>
        <h2>𝗣𝗼𝘄𝗲𝗿𝗲𝗱 𝗕𝘆 𝗨𝗗</h2>
      </div>
      <div class="fright">
        <p >©GROUP C &nbsp All rights reserved</p>
      </div>
    </div>

    <script>
      $(document).ready(function() {
        $('#poster_but').mouseover(function(event) {
            $('.Poster').css("opacity","0.7"); })
            .mouseout(function(event){$('.Poster')
            .css("opacity","0.9"); });
      });
    </script>
    <script src="js/nightmode.js"></script>
    <script src="js/langDropDown.js"></script>
  </body>
</html>
