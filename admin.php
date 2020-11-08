<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta charset="utf-8">
    <title>Admin</title>
      <link rel="stylesheet" href="style/admin.css">
      <link rel="stylesheet" href="style/admin/pro.css">
      <link rel="stylesheet" href="style/admin/category.css">
      <link rel="stylesheet" href="style/admin/mm.css">
      <link rel="stylesheet" href="style/admin/inbox.css">
      <link rel="stylesheet" href="style/admin/analytics.css">
      <link rel="stylesheet" href="style/admin/users.css">

      <link rel="stylesheet" href="style/index.css">

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
    <div class="Cpanel w3-blue " id='panel'>
      <div class="w3-white pannel_X">
        <div id="panel_header">ადმინი</div>
        <div class="panel_butt w3-animate-opacity" id="panel_button" onclick="Toggle_panel(this);">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
      </div>

      <div id='panel_words'>
          <a href="#" onclick="slide(0)">პროდუქტი</a><br>
          <a href="#" onclick="slide(1)">კატეგორია</a><br>
          <a href="#" onclick="slide(2)">მოდიფიცირება</a><br>
          <a href="#" onclick="slide(3)">შეტყობინებები</a><br>
          <a href="#" onclick="slide(5)">სტატისტიკები</a><br>
          <a href="#" onclick="slide(6)">მომხმარებლები</a><br>
      </div>
      <div id='panel_icons'>
          <i onclick="slide(0)" class='fas fa-box-open' style='font-size:2vw'></i><br>
          <i onclick="slide(1)" class='fas fa-layer-group' style='font-size:2vw'></i><br>
          <i onclick="slide(2)" class='fas fa-sliders-h' style='font-size:2vw'></i><br>
          <i onclick="slide(3)" class="material-icons" style='font-size:2.5vw' >mail</i><br>
          <i onclick="slide(5)" class="fa fa-pie-chart" style="font-size:2vw"></i><br>
          <i onclick="slide(6)" class='fas fa-user-circle' style='font-size:2vw'></i><br>
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

    <!-- CUSTOMIZE -->
    <div class="section">
      <div class="customize_header">
        <button class="customize" type="submit" name="button" onclick="toggleshow('0')">ბანერი</button>

        <button class="customize"type="submit" name="button" onclick="toggleshow('1')">კატალოგი</button>

        <button class="customize" type="submit" name="button" onclick="toggleshow('2')">ლოკაცია</button>

        <button class="customize" type="submit" name="button" onclick="toggleshow('3')">აღწერა</button>
      </div>

        <!-- Banner form -->
          <form action="index.html" method="post" class="banner_class" id="0">
            <h2>აირჩიე ახალი ბანერი</h2>
            <label for="banner_photo">
              <img src="resource/admin/upload.png" alt="upload">
            </label>
            <input type="file" placeholder=" ფოტო" id="banner_photo" style="display:none;">

            <input type="text" name="" value="" placeholder=" ტექსტი">
            <button type="submit" name="button" class='w3-button w3-round w3-blue'>ცვლილება</button>
            <div class="Poster">

            </div>
          </form>
          <!-- CHASAMATEBELIA BANERI -->

        <!-- catalog form -->
        <div id="1" style="display:none;">
          <div class="Admin-Catalog">
            <div class="Admin-gallery js-flickity"
            data-flickity-options='{ "wrapAround": true ,"pageDots": false,"autoPlay": 1500 }'>
              <?php
                for ($i=0; $i < 12; $i++) {
                echo "<div class='Admin-gallery-cell'>
                         <img src='resource/admin/shouse.jpg'>
                      </div>";
                }
              ?>
            </div>
          </div>
          <div class="w3-blue New-catalog">
            <button type="submit" name="button" onclick="addToCatalog()">+</button>
          </div>

          <div class='dark-bg'></div>
          <div class="prodGallery">
            <div class="prodGallery-sticky">
              <button class="w3-button w3-blue" onclick="toggleshow('create_post');" id='add_prod_butt'>
                <i class='fas fa-plus'></i>
              </button>
              <input type="text" name='' placeholder="ძიება">
              <button class="w3-button w3-blue" id='close_products' onclick="addToCatalog()">
                <i class='fas fa-times'></i>
              </button>
              <!-- <button class="w3-button" id='close_products' >X</button> -->
            </div>
            <?php
              for ($i=1; $i < 18; $i++) {
              echo "
                <div class='prodGallery-cell' >
                  <input type='checkbox' name=''>
                  <img src='resource/admin/shoppingcart.png'>
                  <h4>Red Dress</h4>
                  <p>$124.99</p>
                </div>";
              }
            ?>
          </div>
          <script>
            function addToCatalog(){
              $(".dark-bg").toggle();
              $(".prodGallery").toggle();
            }
          </script>
        </div>

        <!-- location form -->
        <div class="location_class" id='2'>

          <form action="index.html" method="post">
            <input type="text" name="" value="" placeholder="HTML მისამართი">
            <br>
            <br>
            <input type="text" name="" value="" placeholder="მისამართი">
            <br><br>
            <button type="submit" class="w3-button w3-blue" name="button">შეცვლა</button>
          </form>

          <div class="location_iframe">
            <li>სულხან კვერნაძის 33ა</li>
            <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d2978.3381357595163!2d44.78043026493833!3d41.71322183369588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e3!4m3!3m2!1d41.7130128!2d44.7826051!4m5!1s0x40440cd4dd1ef98d%3A0xbefb5bef42f2ce69!2z4YOS4YOb4YOY4YOg4YOX4YOQIOGDm-GDneGDlOGDk-GDkOGDnOGDmCwg4YOX4YOR4YOY4YOa4YOY4YOh4YOY!3m2!1d41.713245099999995!2d44.7826587!5e0!3m2!1ska!2sge!4v1598810784490!5m2!1ska!2sge"
              width="100%" height="500vh" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
            </iframe>
          </div>

        </div>

        <!-- description form -->
        <div id='3' style="display:none;">
          <form action="index.php" method="post" class="dascription_form">

            <div class="description">

              <div class="right description-image ">
                <input style='display:none;'id="upload-but" type="file">
                <label for="upload-but">
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
                <input style='display:none;'id="upload-but" type="file">
                <label for="upload-but">
                  <img src="resource/admin/upload.png">
                </label>
              </div>
            </div>




            <!-- <div class="test1">
            </div>



            <div class="test2">

            </div>
            <div class="test3">

                <textarea name="name" rows="8" cols="80" placeholder="Text here"></textarea>
              <input style='display:none;'id="upload-but" type="file">
                <label for="upload-but">
                  <img src="resource/admin/upload.png">
                </label>
                <button type="button" class="w3-button w3-blue"name="button">შენახვა</button>
            </div> -->


            <!-- <div class="description_down">
              <img src="resource/index/desc1.jpg" alt="retail store">
                <p>• ჩვენ ვართ საქართველოში <br>ოფიციალური
                 წარმომადგენლები<br> უცხოური ბრენდების
                 აირჩიე C</p>

              <input style='display:none;'id="upload-but" type="file">
                <label for="upload-but">
                  <img src="resource/admin/upload.png">
                </label>
                <input type="text" name="" value="" placeholder="Text">
            </div> -->

          </form>





        </div>

    </div>

    <!-- INBOX -->
    <div class="section">
      <div class="chat_list">
        <?php
          for ($i=0; $i < 22; $i++) {
            echo "  <div class='inbox'>
                      <p> elon musk </p>
                      <h6 class='time'>9/10/2020</h6>
                    </div> ";
            }
        ?>
      </div>

      <div class="chat">
        <div class="w3-container inbox-header">ilon task</div>
        <?php
          for ($i=0; $i < 22; $i++) {
            echo "  <div class='message_arrive'>
                      <div class='message_arrive_text w3-blue'>
                          <p>გამარჯობა ტესტ ტესტ</p>
                      </div>
                    </div>
                    <br>
                    <div class='message_sent'>
                      <div class='message_send_text  w3-white'>
                        <p>გამარჯობა ტესტ ტესტ</p>
                      </div>
                    </div>
                    <br>";
            }
        ?>
      </div>

      <form class="inbox_new_message" action="admin.php" method="post">
        <div class="sent_meesage_input">
          <textarea name="name" rows="8" cols="80"placeholder=" წერილი"></textarea>
          <button type="button" name="button" class="w3-button w3-blue send_button">გაგზავნა</button>
        </div>

      </form>
    </div>

    <!-- ADS -->
    <div class="section">
        e
    </div>

    <!-- ANALYTICS -->
    <div class="section">
      <div class="analytic_table" >

        <div class="analytic_table_header" >
          <table class="w3-table-all  w3-hoverable ">
                    <thead>
                      <tr class="category_header " style='background-color:#333;color:white;'>
                        <th>კატეგორია</th>
                        <th>თვეში საშ</th>
                        <th>წელში საშ</th>
                        <th>დღიური საშ</th>
                      </tr>
                    </thead>
          </table>
        </div>
        <div class="analytic_table_rows" >
          <table class="w3-table-all w3-hoverable " >
            <?php
              for ($i=0; $i < 15 ; $i++) {
                echo "<tr style='background-color:#333;color:white;'>
                        <td>qudi</td>
                        <td>200</td>
                        <td>1600</td>
                        <td>50</td>
                      </tr>";
              }
            ?>
          </table>
        </div>

      </div>

      <div class="analytic_diagram">
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

      <div class="analytic_total">
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
      slide(2);

      // Product-create new product Toggle
      $(document).ready(function() {
        $('#create-button').click(function(){
          $('.create-product').slideToggle("slow");
        });
      });

      // CUSTMOIZE-modify navigation
      function toggleshow(x){
        for (var i = 0; i < 5; i++) { $("#"+i).hide(); }
        window.dispatchEvent(new Event('resize'));
        $('#'+x).slideToggle("slow");
      }

      function slide(n){
          var sections = document.getElementsByClassName("section");
          for (var i = 0; i < sections.length; i++) {
            sections[i].style.display = "none";
          }
          sections[n].style.display = "block";
        }
    </script>

  </body>
  <script src="js/googleCharts.js"></script>
  <script src="js/adminSlide.js"></script>
</html>
