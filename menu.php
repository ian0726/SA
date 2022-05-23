<?php
session_start();
if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
}
include("db.php");
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> 方禾食呂 </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <style>
    .bi-star-fill {
      color: yellow;
    }

    .bi-star-half {
      color: yellow;
    }
  </style>
</head>

<body class="sub_page">

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <?php
    include("header.php");
    ?>
    <!-- end header section -->
  </div>

  <!-- food section -->

  <section class="food_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Menu
        </h2>
      </div>

      <ul class="filters_menu">
        <li data-filter="*" class="active">全部餐點</li>
        <li data-filter=".推薦餐點">推薦餐點</li>
        <li data-filter=".經典餐盒">經典餐盒</li>
        <li data-filter=".輕食捲捲">輕食捲捲</li>
        <li data-filter=".沙拉水果盒">沙拉水果盒</li>
        <li data-filter=".主食單品">主食單品</li>
        <li data-filter=".其他單品">其他單品</li>
        <li data-filter=".飲料">飲料</li>
      </ul>

      <div class="filters-content">
        <div class="row grid">
          <?php
          $result = mysqli_query($con, "SELECT * FROM `item` WHERE av = 1 ORDER BY category");
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <div class='col-sm-6 col-lg-4 all mt-3 <?php echo $row['category'] ?>' style='height: 420px'>
              <div class='box h-100'>
                <a href='' data-bs-toggle='modal' data-bs-target='#exampleModal<?php echo $row['item_id'] ?>' style='text-decoration: none; color: white;'>
                  <div class='img-box'>
                    <img src='<?php echo $row['img'] ?>' alt='images/favicon.png' />
                  </div>
                </a>
                <div class='detail-box'>
                  <a href='' data-bs-toggle='modal' data-bs-target='#exampleModal<?php echo $row['item_id'] ?>' style='text-decoration: none; color: white;'>
                    <h5><?php echo $row['name'] ?></h5>
                    <p><?php echo $row['des'] ?></p>
                  </a>
                  <div class='options'>
                    <h6>$<?php echo $row['price'] ?></h6>
                    <a href='' data-bs-toggle='modal' data-bs-target='#exampleModal<?php echo $row['item_id'] ?>' style='text-decoration: none; color: white;'>
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029"
                  style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                  <g>
                    <g>
                      <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                   c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                   C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                   c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                   C457.728,97.71,450.56,86.958,439.296,84.91z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                   c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                    </g>
                  </g>
                </svg>
                    </a>
                  </div>
                  <div>
                    <?php 
                    $sql = "SELECT round(AVG(rating),2) AS average FROM orderdetail WHERE item_id = ".$row['item_id']."";
                    $rs = mysqli_query($con, $sql);
                    while ($rating_row = mysqli_fetch_assoc($rs)) {
                      $average = $rating_row['average'] == 0 ? '暫無評分' : $rating_row['average'];
                      echo $average;
                      echo "<br>";
                      $fill = floor($average);
                      for ($i = 0; $i < $fill; $i++) {
                        echo "<i class='bi bi-star-fill'></i>";
                      }

                      $half = fmod($average, 1);
                      if ($half) {
                        echo "<i class='bi bi-star-half'></i>";
                      }

                      for ($j = 0; $j < 5 - $fill; $j++) {
                        echo "<i class='bi bi-star'></i>";
                      }
                    };

                    ?>
                  </div>
                </div>
              </div>
            </div>
          <?php
            if ($row['category'] == "經典餐盒") {
              echo "
                  <div class='modal fade' id='exampleModal" . $row['item_id'] . "' tabindex='-1' aria-labelledby='exampleModalLabel'
                      aria-hidden='true'>
                      <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
                        <div class='modal-content'>
                          <div class='modal-header'>
                            <h5 class='modal-title' id='exampleModalLabel'>" . $row['name'] . "</h5>
                            
                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                          </div>
                          <div class='text-body'>
                            <form action='cartfunc.php' method = 'post'>
                              <input type='hidden' name='id' value='" . $row['item_id'] . "'>
                              <input type='hidden' name='iname' value='" . $row['name'] . "'>
                              <input type='hidden' name='price' value='" . $row['price'] . "'>
                              <input type='hidden' name='user_id' value='" . $user_id . "'>
                              <h5>&nbsp&nbsp數量</h5>
                              <div class='form-check'>
                                <input type='number' class='formnumber' id='exampleFormControlInput' name = 'amount' min='1' max='10' value = '1' required>
                              </div>
                              <h5>&nbsp副餐(必選)</h5>
                              <div class='form-check'>
                                <select name='side' required>
                                  <option value='' hidden selected disabled>請選擇副餐</option>
                                  <option value='紅藜白飯'>274kcal紅藜白飯</option>
                                  <option value='食蔬半飯'>157kcal食蔬半飯</option>
                                  <option value='地瓜食蔬'>109kcal地瓜食蔬</option>
                                </select>
                              </div>
                             <br>
                              <h5>&nbsp醬料(必選)</h5>
                              <div class='form-check'>
                                <select name='sauce' required>
                                  <option value='' hidden selected disabled>請選擇醬料</option>
                                  <option value='焙煎胡麻醬'>287kcal焙煎胡麻醬</option>
                                  <option value='義式油醋醬'>44kcal義式油醋醬</option>
                                  <option value='奇亞芥末醬'>43kcal奇亞芥末醬</option>
                                  <option value='水果塔塔醬'>36kcal水果塔塔醬</option>
                                </select>
                              </div>
                              <br><br><br>
                              <h5>&nbsp餐點備註</h5>
                              <input type='text' class='form-control' id='exampleFormControlInput1' name='note'
                                placeholder='餐點若有特殊需求，請備註在此。'>
                              <div class='modal-footer'>
                                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>取消</button>
                                <input type='submit' class='btn btn-primary' value='加入購物車'>
                              </div>
                              
                            </form>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  ";
            } elseif ($row['category'] == "飲料" && $row['customize'] == 1) {
              echo "
                <div class='modal fade' id='exampleModal" . $row['item_id'] . "' tabindex='-1' aria-labelledby='exampleModalLabel'
                  aria-hidden='true'>
                  <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
                    <div class='modal-content'>
                      <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>" . $row['name'] . "</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                      </div>
                      <div class='text-body'>
                        <form action='cartfunc.php' method = 'post'>
                        <input type='hidden' name='id' value='" . $row['item_id'] . "'>
                        <input type='hidden' name='iname' value='" . $row['name'] . "'>
                        <input type='hidden' name='price' value='" . $row['price'] . "'>
                        <input type='hidden' name='user_id' value='" . $user_id . "'>
                          <h5>&nbsp&nbsp數量</h5>
                          <div class='form-check'>
                            <input type='number' class='formnumber' id='exampleFormControlInput' name = 'amount' min='1' max='10' value = '1' required>
                          </div>
                          <h5>&nbsp溫度(必選)</h5>
                          <div class='form-check'>
                            <select name='temperature' required>
                              <option value='' hidden selected disabled>請選擇溫度</option>
                              <option value='溫'>溫</option>
                              <option value='冷'>冷</option>
                          
                            </select>
                          </div>
                          <br>
                          <h5>&nbsp&nbsp餐點備註</h5>
                          <input type='text' class='form-control' id='exampleFormControlInput1' name ='note'
                            placeholder='餐點若有特殊需求，請備註在此。'>
                        
                      </div>
                      <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>取消</button>
                        <input type='submit' class='btn btn-primary' value='加入購物車'>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
                ";
            } else {
              echo "
                <div class='modal fade' id='exampleModal" . $row['item_id'] . "' tabindex='-1' aria-labelledby='exampleModalLabel'
                  aria-hidden='true'>
                  <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
                    <div class='modal-content'>
                      <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>" . $row['name'] . "</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                      </div>
                      <div class='text-body'>
                        <form action='cartfunc.php' method = 'post'>
                        <input type='hidden' name='id' value='" . $row['item_id'] . "'>
                        <input type='hidden' name='iname' value='" . $row['name'] . "'>
                        <input type='hidden' name='price' value='" . $row['price'] . "'>
                        <input type='hidden' name='user_id' value='" . $user_id . "'>
                          <h5>&nbsp&nbsp數量</h5>
                          <div class='form-check'>
                            <input type='number' class='formnumber' id='exampleFormControlInput' name = 'amount' min='1' max='10' value = '1' required>
                          </div>
                          <h5>&nbsp&nbsp餐點備註</h5>
                          <input type='text' class='form-control' id='exampleFormControlInput1' name ='note'
                            placeholder='餐點若有特殊需求，請備註在此。'>
                        
                      </div>
                      <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>取消</button>
                        <input type='submit' class='btn btn-primary' value='加入購物車'>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
                ";
            }
          }
          mysqli_close($con);
          ?>
        </div>
      <div class="btn-box">
        <a href="">
          View More
        </a>
      </div>
    </div>
  </section>

  <!-- end food section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Feane
            </a>
            <p>
              Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin
              words, combined with
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            10.00 Am -10.00 Pm
          </p>
          <span id="displayYear"></span>
        </div>
      </div>

    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>

</html>