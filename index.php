<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Web 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="resource/index/black-logo.jpg">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style/nightMode.css">
    <link rel="stylesheet" href="style/defaulta.css">
    <link rel="stylesheet" href="style/fo.css">
    <link rel="stylesheet" href="style/ind.css">

    <!-- FLICKITY FOR CAROUSEL -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js'>  </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="Header">
      <img src="resource/index/black-logo.jpg" id='logo'>

      <span>
        <a href="index.php#Poster"> მთავარი </a>
        <a href="product.php"> პროდუქტი </a>
        <a href="index.php#Location"> ლოკაცია </a>
        <a href="index.php#Contact"> კონტაქტი </a>
        <a href="index.php#About"> შესახებ </a>
      </span>

      <div class="night-mode" id="mode">
        <i class='fas fa-moon' id="moon"  onclick="indexNightMode()"></i>
      </div>

      <div class="line"></div>

      <div class="language">
        <a href='#'> KA </a>
        <div>
          <a href="#"> EN </a>
          <a href="#"> RU </a>
        </div>
      </div>

    </div>

    <!-- MAIN -->

    <div id="Poster">
      <h1>cloth</h1>
      <button type="submit" name="button" id="poster-but" >შეძენა</button>

      <form class="Search" action="index.html" method="post">
        <input type="text" name="search" autocomplete="off" placeholder="ძიება">
        <i class="fa fa-search"></i>
      </form>
    </div>

    <br><br>
    <div class="gallery js-flickity"
      data-flickity-options='{ "wrapAround": true ,"pageDots": false,"autoPlay": 1500 }'>
        <?php
          for ($i=0; $i < 20; $i++) {
            echo "<div class='gallery-cell'>
                    <img src='resource/admin/shouse.jpg'>
                  </div>";  }
        ?>
    </div>

    <br><br>
    <div class="gallery js-flickity"
      data-flickity-options='{ "wrapAround": true ,"pageDots": false,"autoPlay": 1500 }'>
        <?php
          for ($i=0; $i < 20; $i++) {
            echo "<div class='gallery-cell'>
                    <img src='resource/admin/shouse.jpg'>
                  </div>";  }
        ?>
    </div>


    <!-- LOCATION -->
    <div id="Location">
      <li>სულხან კვერნაძის 33ა</li> <br>

      <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d2978.3381357595163!2d44.78043026493833!3d41.71322183369588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e3!4m3!3m2!1d41.7130128!2d44.7826051!4m5!1s0x40440cd4dd1ef98d%3A0xbefb5bef42f2ce69!2z4YOS4YOb4YOY4YOg4YOX4YOQIOGDm-GDneGDlOGDk-GDkOGDnOGDmCwg4YOX4YOR4YOY4YOa4YOY4YOh4YOY!3m2!1d41.713245099999995!2d44.7826587!5e0!3m2!1ska!2sge!4v1598810784490!5m2!1ska!2sge"
              frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0">
      </iframe>
    </div>

    <!-- CONTACT -->
    <div id="Contact">
      <form action="index.html" method="post">
        <span>მოგვწერეთ</span>

        <input type="text" name="name" placeholder="სახელი">
        <input type="text" name="mail" placeholder="ელ. ფოსტა">
        <textarea type="text" name="desc" placeholder="აღწერა"></textarea>

        <button >შემდეგი</button>
      </form>
    </div>

    <!-- ABOUT -->
    <div id="About">
      <div class="Description">
        <img src="resource/index/desc2.jpg" alt="retail store">
        <div>
              <p>
                <li>სულხან კვერნაძის 33ა</li>
                <li>საუკეთესო ხარისხის ტანისამოსი,<br>
                ფეხსაცმელი  და აქსესუარები</li>
              </p>
        </div>
      </div>

      <div class="Description">
          <div>
            <p>
              <li> ჩვენ ვართ საქართველოში <br>ოფიციალური
                   წარმომადგენლები<br> უცხოური ბრენდების
                   აირჩიე
             </li>
           </p>
          </div>
          <img src="resource/index/desc1.jpg" alt="retail store">
        </div>

      <div class="Footer">
        <div class="info">
          <a>555 555 555</a>
          <a>სულხან კვერნაძის 33ა</a>
          <a>UniqueDesigns@mail.com</a>
        </div>

        <div class="soc-media">
          <i class='fab fa-facebook fb'></i>
          <i class='fab fa-instagram inst'></i>
          <i class='fab fa-twitter twitter'></i><br>
          <h2>𝗣𝗼𝘄𝗲𝗿𝗲𝗱 𝗕𝘆 𝗨𝗗</h2>
        </div>

        <div class="copy-right">
          <p >©GROUP C &nbsp All rights reserved</p>
        </div>
      </div>

    </div>

    <script>
      $(document).ready(function() {
        $('#poster-but').mouseover(function(event) {
            $('.Poster').css("opacity","0.7"); })
            .mouseout(function(event){$('.Poster')
            .css("opacity","0.9"); });
      });
    </script>
  </body>
  <script src="js/nightmode.js"></script>
  <script src="js/moreLanguage.js"></script>
</html>
