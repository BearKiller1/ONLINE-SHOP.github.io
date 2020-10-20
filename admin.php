<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" href="adami.css">
      <link rel="stylesheet" href="style/index.css">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <!-- FONTS -->
      <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!-- FLICKITY FOR CAROUSEL -->
      <script src='https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js'>  </script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">

      <!--  -->
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



      <!-- ICONS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  </head>
  <body class='w3-animate-opacity'>
    <!-- SIDE MENU -->
    <div class="Cpanel w3-blue " id='panel'>
      <div class="w3-white pannel_X">
        <button id="logout"><i class="fa fa-sign-out"></i></button>
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
          <!-- <a href="#" onclick="slide(7)">settings</a><br> -->
      </div>
      <div id='panel_icons'>
          <i onclick="slide(0)" class='fas fa-box-open' style='font-size:2vw'></i><br>
          <i onclick="slide(1)" class='fas fa-layer-group' style='font-size:2vw'></i><br>
          <i onclick="slide(2)" class='fas fa-sliders-h' style='font-size:2vw'></i><br>
          <i onclick="slide(3)" class="material-icons" style='font-size:2.5vw' >mail</i><br>
          <i onclick="slide(5)" class="fa fa-pie-chart" style="font-size:2vw"></i><br>
          <i onclick="slide(6)" class='fas fa-user-circle' style='font-size:2vw'></i><br>
          <!-- <i class="fa fa-gear" style="font-size:2.3vw;"></i> -->
      </div>
    </div>

    <!-- PRODUCT -->
    <div class="section">
      <div class="w3-container product_header w3-white">
        <!-- search -->
        <div class='Search'>
          <form action="index" method="post">
            <input type="text" class='w3-blue' placeholder="ძიება">
            <i class="fa fa-search"></i>
          </form>
        </div>

        <!-- add button -->
        <button class="w3-button add_butt  w3-blue" onclick="toggleshow('create_post');">
          <i class='fas fa-plus'></i>
        </button>

        <button class="w3-button add_butt  w3-blue" onclick="clear()" id='close_upload'>
          <i style="" class="fa fa-trash"></i>
        </button>
      </div>
        <!-- add posts -->
      <div class="product_space " id='create_post'>
            <form  class="w3-container add_post" id="upload" action="/action_page.php">
              <input class=" w3-border" placeholder="სათაური" name="title" type="text">
              <input class="w3-border price" placeholder="ფასი" name="price" type="number" min="1" max="1000">
              <br><br>
              <select class="section_select" name="სექცია">
                <option value="">კაცი</option>
                <option value="">ქალი</option>
                <option value="">ბავშვი</option>
                <option value="">უნისექსი</option>
              </select>
              <select class="currency" name="">
                <option value="">USD</option>
                <option value="">GEL</option>
                <option value="">RUB</option>
              </select>
              <br><br>
              <textarea type="text" name="description" placeholder="აღწერა" value=""></textarea>
              <div class="select_category">
                   <table class="w3-table-all w3-hoverable category_table w3-centered">
                       <thead>
                         <tr class="w3-light-grey">
                           <th>კატალოგი</th>
                         </tr>
                       </thead>
                         <?php
                           for ($i=0; $i < 15; $i++) {
                               echo "<tr>
                                       <td><input type='radio' value='sharvali'>შარვალი</td>
                                     </tr>";
                           }
                         ?>
                     </table>
                 </div>
              <div class='upload_product'>
                <input style='display:none;'id="upload-but" type="file">
                  <label for="upload-but">
                    <img src="source/upload.png">
                  </label>
              </div>
              <br>
              <button class="w3-btn w3-blue" >დამატება</button>
            </form>
      </div>

      <!-- gallery -->
      <div class="product_space" id='gallery'>
        <form class="prod-filter" action="index.html" method="post">
          <p class="selectall">ყველას არჩევა
            <input type="checkbox"  name="select-all" id="select-all" />
          </p>
          <select class="sect-filter w3-blue" name="">
            <option value="" selected disabled>სექცია</option>
            <option value="">ბავშვი</option>
            <option value="">ქალი</option>
            <option value="">კაცი</option>
          </select>
          <select class="category-filter w3-blue" name="">
            <option value="" selected disabled>კატეგორია</option>
            <?php
              for ($i=0; $i < 4; $i++) {
                echo "<option value=''>ქუდი</option>";
              }
            ?>
          </select>
          <input type="number"  class="w3-blue" name="" min="0" placeholder="დან">
          <input type="number"  class="w3-blue" name="" min="0" placeholder="მდე">
        </form>
        <div class="prod-list">
          <?php
            for ($i=0; $i < 15; $i++) {
                echo "<div class='gallery_img w3-blue'><form>
                  <input type='checkbox'>
                    <i style='font-size:1.5vw' class='fa'>&#xf014;</i>
                  </button>
                  </form>
                <img src='source/d1.jpg'>
                <div class='product_cost'>
                  <p>120$</p>
                </div>
                        </div>";
            }
          ?>
        </div>
      </div>

    </div>

    <!-- CATEGORY -->
    <div class="section">
        <table class="w3-table-all w3-white w3-hoverable category_table">
            <thead>
                <th class=" w3-white">
                  <input type="text" class="category_input w3-blue" name="" placeholder="ახალი კატეგორია">
                  <button type="submit" name="button" id="category_add">+</button>
                </th>
                <th class="  w3-white">
                  <select class="category_select w3-blue" name="">
                    <option disabled selected >სექცია</option>
                    <option value="ქალი">ქალი</option>
                    <option value="კაცი">კაცი</option>
                    <option value="ბავშვი">ბავშვი</option>
                  </select>
                  <button  id="trash" name="button">
                    <i class="fa fa-trash" ></i>
                  </button>
                </th>
                <th class="w3-white">
                  <input type="text" class="search_category w3-blue" name="search_category " value=""  placeholder="ძიება...">
                  <button type="submit" id='category-search-button' name="button">
                    <i style="font-size:1.4vw" class="fa fa-search "></i>
                  </button>
                </th>
              </thead>
              <?php
                for ($i=0; $i < 45; $i++) {
                  echo "
                    <tr>
                      <td class='w3-center '><input type='checkbox' name='category_selection[]' value=''> შარვალი</td>
                      <td class='w3-center'>სექცია</td>
                      <td class='w3-center'> <i>80/124</i> </td>
                    </tr>";
                }
              ?>
          </table>
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
        <div class="banner_class" id="0" style="display:block;">
          <form action="index.html" method="post">
            <input type="file" name="f" placeholder=" ფოტო" id="banner_photo">
            <h2>აირჩიე ახალი ბანერი</h2>
            <label for="banner_photo">
              <img src="source/upload.png" alt="upload">
            </label>

            <input type="text" name="" value="" placeholder=" ტექსტი" id="banner_text">
            <button type="submit" name="button" class='w3-button w3-round w3-blue'>ცვლილება</button>
          </form>
          <div class="Poster" id="poster">
            <h1 class=''>cloth</h1>
          </div>
        </div>

        <!-- catalog form -->
        <div class="catalog_class" id="1" style="display:none;">
          <div class="Admin-Catalog">
            <div class="Admin-gallery js-flickity"
            data-flickity-options='{ "wrapAround": true ,"pageDots": false,"autoPlay": 1500 }'>
              <?php
                for ($i=0; $i < 12; $i++) {
                echo "<div class='Admin-gallery-cell'>
                         <img src='https://picture-cdn.wheretoget.it/hvdipz-l-610x610-shoes-white+bordeaux-white-nikies-nikes-nike+s-nike+bordeaux-nike+white-trainers-bordeaux-bordeau-nike.jpg'>
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
                  <img src='https://micoedward.com/wp-content/uploads/2018/04/Love-your-product.png'>
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
        <div class="location_class" id='2' style="display:none;">

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
        <div class="description_class" id='3' style="display:none;">
          <form action="index.php" class="decription_form" method="post">
            <label class="switch">
              <input type="checkbox" id="description_check" style="display:none;">
              <span class="slider round"></span>
            </label>
            <div class='upload'>
              <input style='display:none;'id="upload-but" type="file">
                <label for="upload-but">
                  <img src="source/upload.png">
                </label>
            </div>
            <br>
            <input class="description1 description_input" type="text" name="" value="" placeholder=" მარჯვენა-ტექსტი">
            <input class="description2 description_input" type="text" name="" value="" placeholder=" მარცხენა-ტექსტი">
            <br><br>
            <button type="submit" name="button">შეცვლა</button>
          </form>

            <div class="Description_admin description1 descr_left">
              <img src="source/desc2.jpg" alt="retail store">
                  <p>• სულხან კვერნაძის 33ა<br>
                  • საუკეთესო ხარისხის ტანისამოსი,<br>
                    ფეხსაცმელი  და აქსესუარები</p>
            </div>

            <div class="Description_admin description2 descr_right">
              <img src="source/desc1.jpg" alt="retail store">
                <p>• ჩვენ ვართ საქართველოში <br>ოფიციალური
                 წარმომადგენლები<br> უცხოური ბრენდების
                 აირჩიე C</p>
            </div>

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
      slide(0);
      var panel_index = 0;
      function Toggle_panel(button){
        button.classList.toggle("change");
        if(panel_index == 0){
          $('#panel').css("width","5%");
          $('#panel_words').hide();
          $('#panel_button').css("margin","1vh 1vw 0 0");
          $('#panel_icons').css("display","block");
          $('#panel_header').css("display","none");
          $('#logmeout').css("display","none");
          $('.section').css("width","95vw");
          $('.section').css("margin","0 0 0 5vw");
          panel_index = 1;
        }
        else{
          $('#panel').css("width","19%");
          $('#panel_words').fadeIn(1300);
          $('#panel_button').css("margin","2% 5% 0 0");
          $('#panel_icons').css("display","none");
          $('#panel_header').fadeIn(1300);
          $('#logmeout').show(500);
          $('.section').css("width","81vw");
          $('.section').css("margin","0 0 0 19vw");
          panel_index = 0;
        }
      }

      function toggleshow(x){
        for (var i = 0; i < 5; i++) {
          $("#"+i).hide();
        }
        window.dispatchEvent(new Event('resize')); //fixes flickity resize error
        $('#'+x).slideToggle("slow");

      }

      function slide(n){
          var sections = document.getElementsByClassName("section");
          for (var i = 0; i < sections.length; i++) {
            sections[i].style.display = "none";
          }
          sections[n].style.display = "block";
        }

      // description checkbox jquery
      $(document).ready(function(){
          $('input[type="checkbox"]').click(function(){
                if($(this).prop("checked") == true){
                    $(".description1").show();
                    $(".description2").hide();
                }
                else if($(this).prop("checked") == false){
                    $(".description1").hide();
                    $(".description2").show();
                }
                });
            });


      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['ქუდი',     11],
          ['მაიკა',      2],
          ['შარვალი',  2],
          ['ფეხსაცმელი', 2],
          ['აქსესუარები',    7]
        ]);

        var options = {
          title: 'My Daily Activities',
          is3D: true,
          backgroundColor:'transparent',
          chartArea:{left:0,top:0,width:'100%',height:'100%'},
          legend: {alignment:'center',textStyle: {color: 'white', fontSize: 16}},
          hAxis: {showTextEvery: '1', textPosition: 'out'},
          vAxis: {textPosition: 'out'}
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
      // setTimeout(function(){
      //    window.location.reload(1);
      // }, 5000);
      //
      // es ari caruselshi damatebis scripti
      //
            // $("#open_image").click(function(){
            //     $(".admin_prod_list_to_add").show();
            //     jQuery('.admin_prod_list_to_add').css('opacity', '1');
            //     $(".admin_black_div").show();
            //   });
            //   $("#close_products").click(function(){
            //     $(".admin_prod_list_to_add").hide();
            //     $(".admin_black_div").hide();
            //   });
    </script>

  </body>
</html>
