<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta charset="utf-8">
    <title>Admin</title>
      <link rel="stylesheet" href="style/default.css">

      <link rel="stylesheet" href="style/admin.css">
      <link rel="stylesheet" href="style/admin/pro.css">
      <link rel="stylesheet" href="style/admin/category.css">
      <link rel="stylesheet" href="style/admin/modify.css">
      <link rel="stylesheet" href="style/admin/box.css">
      <link rel="stylesheet" href="style/admin/statistics.css">
      <link rel="stylesheet" href="style/admin/users.css">


      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <!-- FONTS -->
      <link rel="stylesheet" href="Fonts/TTfs/fonts.css">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!-- CHARTS FOR ANALYTICS -->
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <!-- FLICKITY FOR CAROUSEL -->
      <script src='https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js'>  </script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">

      <!-- ICONS -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  </head>
  <body>
    <!-- SIDE MENU -->
    <div class="Cpanel">
      <div id="Panel-head">
        <h1>Admin</h1>
        <div class="panelToggler">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
      </div>

      <div id='Panel-words'>
          <a href="#" onclick="slide('section', 0)">პროდუქტი</a>
          <a href="#" onclick="slide('section', 1)">კატეგორია</a>
          <a href="#" onclick="slide('section', 2)">მოდიფიცირება</a>
          <a href="#" onclick="slide('section', 3)">შეტყობინებები</a>
          <a href="#" onclick="slide('section', 4)">სტატისტიკები</a>
          <a href="#" onclick="slide('section', 5)">მომხმარებლები</a>
      </div>

      <div id='Panel-icons'>
          <i class='fas fa-box-open'    onclick="slide('section', 0)"></i>
          <i class='fas fa-layer-group' onclick="slide('section', 1)"></i>
          <i class='fas fa-sliders-h'   onclick="slide('section', 2)"></i>
          <i class='fas fa-envelope'    onclick="slide('section', 3)"></i>
          <i class="fa fa-pie-chart"    onclick="slide('section', 4)"></i>
          <i class='fas fa-user-circle' onclick="slide('section', 5)"></i>
      </div>
    </div>

    <!-- PRODUCT -->
    <div class="section">
      <div class="product-header">

        <div class='Search'> <!-- SEARCH -->
          <form action="index" method="post">
            <input type="text" placeholder="ძიება">
            <i class="fa fa-search"></i>
          </form>
        </div>

        <!-- CREATE BUTTON -->
        <button id='create-button'>
          <i class='fas fa-plus'></i>
        </button>

        <!-- TRASH BUTTON -->
        <button id='remove-button'>
          <i class="fa fa-trash"></i>
        </button>
      </div>

      <div class="create-product">
            <form action="admin.php" method="post">
              <input placeholder="სათაური" name="title" type="text">
              <input placeholder="ფასი" name="price" type="number" min="1" max="1000">

              <div class="choose-category">
                <div> <input type='radio' value='sharvali'>შარვალი </div>
                <div> <input type='radio' value='sharvali'>შარვალი </div>
                <div> <input type='radio' value='sharvali'>შარვალი </div>
                <div> <input type='radio' value='sharvali'>შარვალი </div>
                <div> <input type='radio' value='sharvali'>შარვალი </div>
                <div> <input type='radio' value='sharvali'>შარვალი </div>
                <div> <input type='radio' value='sharvali'>შარვალი </div>
                <div> <input type='radio' value='sharvali'>შარვალი </div>
                <div> <input type='radio' value='sharvali'>შარვალი </div>
                <div> <input type='radio' value='sharvali'>შარვალი </div>
                <div> <input type='radio' value='sharvali'>შარვალი </div>
                <div> <input type='radio' value='sharvali'>შარვალი </div>
              </div>

              <select id="section-select" name="section">
                <option value="კაცი">კაცი</option>
                <option value="ქალი">ქალი</option>
                <option value="ბავშვი">ბავშვი</option>
                <option value="უნისექსი">უნისექსი</option>
              </select>

              <select id="currency" name="currency">
                <option value="USD">USD</option>
                <option value="GEL">GEL</option>
                <option value="RUB">RUB</option>
              </select>

              <textarea name="description" placeholder="აღწერა"></textarea>

              <input id="upload-button" type="file">
              <label for="upload-but">
                <img src="resource/admin/upload.png">
              </label>

              <button class='w3-blue'>დამატება</button>
            </form>
      </div>

      <div class="gallery">
        <form action="index.html" method="post">
          <p> ყველას არჩევა <input type="checkbox"  name=""></p>

          <select  name="">
            <option value="" selected disabled>სექცია</option>
            <option value="">ბავშვი</option>
            <option value="">ქალი</option>
            <option value="">კაცი</option>
          </select>

          <select name="">
            <option value="" selected disabled>კატეგორია</option>
            <option value=''>ქუდი</option>
            <option value=''>ქუდი</option>
          </select>

          <input type="number" name="" min="0" max="9000" placeholder="დან">
          <input type="number" name="" min="0" max="9000" placeholder="მდე">
        </form>

        <!-- product list -->
        <?php
          for ($i=0; $i < 15; $i++) {
              echo "<div class='product-cell'>
                      <form>
                          <i class='fas fa-pencil-alt'></i>

                          <input type='checkbox'>

                          <i class='fa fa-remove'></i>
                      </form>

                      <img src='resource/product/hoodie.jpg'>
                      <button> მეტი </button>
                   </div>";
          }
        ?>
      </div>

    </div>

    <!-- CATEGORY -->
    <div class="section">
      <div class="category-header">
        <div class="create-category">
          <input type="text" name="" placeholder="ახალი კატეგორია">
          <button type="submit" class="w3-blue" name="button">+</button>
        </div>

        <div class="select-category">
          <select name="">
            <option disabled selected >სექცია</option>
            <option value="ქალი">ქალი</option>
            <option value="კაცი">კაცი</option>
            <option value="ბავშვი">ბავშვი</option>
          </select>

          <button name="button" class="w3-blue">
            <i class="fa fa-trash" ></i>
          </button>
        </div>

        <div class="search-category">
          <input type="text" name="search_category " value=""  placeholder="ძიება...">
          <button type="submit" name="button" class="w3-blue">
            <i style="font-size:1.4vw" class="fa fa-search "></i>
          </button>
        </div>

      </div>

      <div class="category-table">
        <table class="w3-table-all w3-white w3-hoverable">
          <?php
            for ($i=0; $i < 55; $i++) {
              echo "
                <tr>
                  <td class='w3-center'>
                    <input type='checkbox' id='xd[".$i."]'>
                    <label for='xd[".$i."]'>შარვალი</label>
                  </td>
                  <td> <div> სექცია </div> </td>
                  <td> <div> 80/124 </div> </td>
                </tr>";
            }
          ?>
        </table>
      </div>
    </div>

    <!-- MODIFY -->
    <div class="section">
      <div class="customize-header">
        <button type="submit" name="button" onclick="slide('modify', 0);">ბანერი</button>

        <button type="submit" name="button" onclick="slide('modify', 1);">კატალოგი</button>

        <button type="submit" name="button" onclick="slide('modify', 2);">ლოკაცია</button>

        <button type="submit" name="button" onclick="slide('modify', 3);">აღწერა</button>
      </div>

      <!-- Banner form -->
      <form class="modify" action="index.html" method="post">
        <h2>აირჩიე ახალი ბანერი</h2>

        <input type="text"  placeholder="ტექსტი"> <br>
        <button type="submit" name="button">ცვლილება</button> <br>

        <div class="poster">
          <input type="file" placeholder="ფოტო" id="banner-edit">
          <label for="banner-edit">
            <img src="resource/admin/upload.png">
          </label>
        </div>
      </form>

      <!-- catalog form -->
      <div class="modify">
        <br>
        <!-- carousel 1 -->
        <div class="carousel">
          <div class="Admin-gallery js-flickity"
            data-flickity-options='{"wrapAround": true ,"pageDots": false}'>
            <?php
              for ($i=0; $i < 12; $i++) {
              echo "<div class='Admin-gallery-cell'>
                       <img src='resource/admin/shouse.jpg'>
                    </div>";
              }
            ?>
          </div>

          <div class="New-cell addToCatalog"> + </div>
        </div>
        <br>
        <!-- carousel 2 -->
        <div class="carousel">
          <div class="Admin-gallery js-flickity"
            data-flickity-options='{"wrapAround": true ,"pageDots": false}'>
            <?php
              for ($i=0; $i < 12; $i++) {
              echo "<div class='Admin-gallery-cell'>
                       <img src='resource/admin/shouse.jpg'>
                    </div>";
              }
            ?>
          </div>

          <div class="New-cell addToCatalog"> + </div>
        </div>

        <div class='dark-bg'></div>
        <div class="prodGallery">

          <div class="prodGallery-header">
            <button> <i class='fas fa-plus'></i> </button>

            <input  type="text" name='' placeholder="ძიება">

            <button class="addToCatalog"> X </button>
          </div>

          <div class="gallery">
            <form action="index.html" method="post">
              <select  name="">
                <option value="" selected disabled>სექცია</option>
                <option value="">ბავშვი</option>
                <option value="">ქალი</option>
                <option value="">კაცი</option>
              </select>

              <select name="">
                <option value="" selected disabled>კატეგორია</option>
                <option value=''>ქუდი</option>
                <option value=''>ქუდი</option>
              </select>
            </form>

            <!-- product list -->
            <?php
              for ($i=0; $i < 15; $i++) {
                  echo "<div class='product-cell'>
                          <form> <input type='checkbox'> </form>
                          <img src='resource/product/hoodie.jpg'>
                          <button> დამატება </button>
                       </div>";
              }
            ?>
          </div>
        </div>

      </div>

      <!-- location form -->
      <div class="modify">
        <form action="index.html" method="post">
          <input type="text" name="" placeholder="HTML მისამართი"> <br>
          <input type="text" name="" placeholder="მისამართი"> <br>
          <button type="submit" name="button"> შეცვლა </button>
        </form>

        <li>სულხან კვერნაძის 33ა</li> <br>

        <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d2978.3381357595163!2d44.78043026493833!3d41.71322183369588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e3!4m3!3m2!1d41.7130128!2d44.7826051!4m5!1s0x40440cd4dd1ef98d%3A0xbefb5bef42f2ce69!2z4YOS4YOb4YOY4YOg4YOX4YOQIOGDm-GDneGDlOGDk-GDkOGDnOGDmCwg4YOX4YOR4YOY4YOa4YOY4YOh4YOY!3m2!1d41.713245099999995!2d44.7826587!5e0!3m2!1ska!2sge!4v1598810784490!5m2!1ska!2sge"
          frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0">
        </iframe>
      </div>

      <!-- description form -->
      <div class="modify">
        <form action="index.php" method="post">

          <div class="description">
            <div class="right description-image ">
              <input id="desc-upload-button" type="file">
              <label for="desc-upload-button">
                <img src="resource/admin/upload.png">
              </label>
            </div>

            <div>
              <textarea name="name" rows="8" cols="80" value="" placeholder="• სულხან კვერნაძის 33ა• საუკეთესო ხარისხის ტანისამოსი, ფეხსაცმელი  და აქსესუარები"></textarea><br>
              <button type="button" class="w3-button w3-blue"name="button">შენახვა</button>
            </div>
          </div>

          <div class="description">
            <div>
              <textarea name="name" rows="8" cols="80" value="" placeholder="• სულხან კვერნაძის 33ა• საუკეთესო ხარისხის ტანისამოსი, ფეხსაცმელი  და აქსესუარები"></textarea><br>
              <button type="button" class="w3-button w3-blue"name="button">შენახვა</button>
            </div>

            <div class="left description-image ">
              <input id="desc-upload-butt" type="file">
              <label for="desc-upload-butt">
                <img src="resource/admin/upload.png">
              </label>
            </div>
          </div>

        </form>
      </div>

    </div>

    <!-- INBOX -->
    <div class="section">
      <div class="chat-list">
        <?php
          for ($i=0; $i < 22; $i++) {
            echo "<div class='inbox'>
                    <p> elon musk </p>
                    <p> 11/12/2020 </p>
                  </div> ";
            }
        ?>
      </div>
      <div class="inbox-header">Elon Tusk</div>
      <div class="chat">
        <?php
          for ($i=0; $i < 2; $i++) {
            echo "  <div class='message-arrive'>
                          <p>გამარჯობა ტესტ ტესტ arive</p>
                    </div>
                    <br>
                    <div class='message-sent'>
                        <p>გამარჯობა ტესტ ტესტ sent</p>
                    </div>
                    <br>";
            }
        ?>
      </div>

      <form class="inbox_new_message" action="admin.php" method="post">
          <textarea name="name" rows="8" cols="80"placeholder=" წერილი"></textarea>
          <button type="button" name="button" class="w3-button w3-blue send-button">გაგზავნა</button>
      </form>
    </div>

    <!-- ANALYTICS -->
    <div class="section">
      <div class="analytic-diagram" >
        <div>
          <p>კატეგორია</p>
          <p>თვეში საშ</p>
          <p>წელში საშ</p>
          <p>დღიური საშ</p>
        </div>

        <div class="data">
          <table>
            <?php
              for ($i=0; $i < 15 ; $i++) {
                echo "<tr>
                        <td>qudi ".$i."</td>
                        <td>200</td>
                        <td>1600</td>
                        <td>50</td>
                      </tr>";
              }
            ?>
          </table>
        </div>

      </div>

      <div class="month-diagram">
        <div class="month">
          <div class='text' >იანვარი</div>
          <div class="fill">
            <div class="percent" style='width:50%;'>50%</div>
          </div>
        </div>
        <div class="month">
          <div class='text' >თებერვალი</div>
          <div class="fill">
            <div class="percent" style='width:50%;'>50%</div>
          </div>
        </div>
        <div class="month">
          <div class='text' >მარტი</div>
          <div class="fill">
            <div class="percent" style='width:39%;'>39%</div>
          </div>
        </div>
        <div class="month">
          <div class='text' >აპრილი</div>
          <div class="fill">
            <div class="percent" style='width:88%;'>88%</div>
          </div>
        </div>
        <div class="month">
          <div class='text' >მაისი</div>
          <div class="fill">
            <div class="percent" style='width:50%;'>50%</div>
          </div>
        </div>
        <div class="month">
          <div class='text' >ივნისი</div>
          <div class="fill">
            <div class="percent" style='width:55%;'>55%</div>
          </div>
        </div>
        <div class="month">
          <div class='text' >ივლისი</div>
          <div class="fill">
            <div class="percent" style='width:34%;'>34%</div>
          </div>
        </div>
        <div class="month">
          <div class='text' >აგვისტო</div>
          <div class="fill">
            <div class="percent" style='width:20%;'>20%</div>
          </div>
        </div>
        <div class="month">
          <div class='text' >სექტემბერი</div>
          <div class="fill">
            <div class="percent" style='width:90%;'>90%</div>
          </div>
        </div>
        <div class="month">
          <div class='text' >ოქტომბერი</div>
          <div class="fill">
            <div class="percent" style='width:49%;'>49%</div>
          </div>
        </div>
        <div class="month">
          <div class='text' >ნოემბერი</div>
          <div class="fill">
            <div class="percent" style='width:40%;'>40%</div>
          </div>
        </div>
        <div class="month">
          <div class='text' >დეკემბერი</div>
          <div class="fill">
            <div class="percent" style='width:30%;'>30%</div>
          </div>
        </div>
      </div>

      <div class="circle-diagram">
          <div id="piechart_3d"></div>
      </div>
    </div>

    <!-- ACCOUNTS -->
    <div class="section">
      <div class="modify-account">
        <h3>შექმენი ახალი მომხმარებელი</h3>
        <input type="text" placeholder="სახელი" name="" >
        <input type="text" placeholder="პაროლი" name="" >
        <input type="text" placeholder="გაიმეორე პაროლი" name="" >
        <input type="text" placeholder="ელ ფოსტა" name="" >
        <input type="text" placeholder="ახლანდელი პაროლით" name="" >
        <button  class="w3-button w3-blue w3-round" type="button" name="button">შექმნა</button>
      </div>
      <div class="account-list">
        <div class="w3-blue account-list-header"></p>მომხმარებლები</p></div>
          <?php
            for ($i=0; $i < 41; $i++) {
              echo "  <p>მომხმარებელი 0".$i."
                      <input type='checkbox' name=''></p><hr>";
            }
          ?>
      </div>
      <button type="button" class="w3-button w3-blue account-list-button">წაშლა</button>
    </div>

    <script>
      // Pre-Activators
      slide('section', 0);
      slide('modify', 0);

      $(document).ready(function() {
        // CREATE NEW PRODUCT
        $('#create-button').click(function(){
          $('.create-product').slideToggle("slow");
        });
        // ADD TO CATALOG NEW PRODUCT
        $('.addToCatalog').click(function(){
          $('.dark-bg').toggle();
          $('.prodGallery').toggle();
        });
      });

      function slide(element, n){
          var Elements = document.getElementsByClassName(element);
          for (var i = 0; i < Elements.length; i++) {
            Elements[i].style.display = "none";
          }
          Elements[n].style.display = "block";
          window.dispatchEvent(new Event('resize'));
        }
    </script>

  </body>
  <script src="js/googleCharts.js"></script>
  <script src="js/adminPanelToggle.js"></script>
</html>
