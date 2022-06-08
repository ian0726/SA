<?php
  session_start();
  include('db.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>菜單管理</title>
  <link rel="icon" href="">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="Mystyle.css">
  <link href="css/style.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  
</head>
<body>

<div class="wrapper">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark" style="position: fixed; width: 100%;z-index:10">
      <a class="navbar-brand" style="font-family: Arial, Helvetica, sans-serif;" href="manage.php">方禾食呂菜單管理系統</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="unfinished.php">  <span class="sr-only">(current)</span></a>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="manage.php">首頁</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="login.html">登出</a>
          </li>
        </ul>
      </div>
  </nav>

<section class="food_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Menu
        </h2>
      </div>

      <ul class="filters_menu">
        <li data-filter="*" class="active">全部餐點</li>
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
            $result = mysqli_query($con,"SELECT * FROM `item` ORDER BY category");
            while($row = mysqli_fetch_assoc($result)){
                echo "<div class='col-sm-6 col-lg-4 all mt-3 {$row['category']}' style='height: 420px'>
                
                <div class='box h-100'>
                    <a href='' data-bs-toggle='modal' data-bs-target='#exampleModal".$row['item_id']."' style='text-decoration: none; color: white;'>
                      <div class='img-box'>
                        <img src='".$row['img']."' alt='images/favicon.png'/>
                      </div>
                    </a>
                  <div class='detail-box'>
                    <a href='' data-bs-toggle='modal' data-bs-target='#exampleModal".$row['item_id']."' style='text-decoration: none; color: white;'>
                      <h5>".$row['name']." </h5>
                      <p>".$row['des']."</p>
                    </a>
                  <div class='options'>
                    <h6>$".$row['price']."
                    </h6>
                    <a href='' data-bs-toggle='modal' data-bs-target='#exampleModal".$row['item_id']."' style='text-decoration: none; color: white;'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-gear' viewBox='0 0 16 16'>
                    <path d='M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z'/>
                    <path d='M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z'/>
                  </svg>
                       
                    </a>
                  </div>
             
              </div>
            </div>
            </a>
          </div>
                    ";
              if($row['category'] == "經典餐盒"){
                  echo "
                  <div class='modal fade' id='exampleModal".$row['item_id']."' tabindex='-1' aria-labelledby='exampleModalLabel'
                      aria-hidden='true'>
                      <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
                        <div class='modal-content'>
                          <div class='modal-header'>
                            <h5 class='modal-title' id='exampleModalLabel'>".$row['name']."</h5>
                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                          </div>
                          <div class='text-body'>
                            <form action='menucheckfunc.php' method = 'post'>
                              <input type='hidden' name='id' value='".$row['item_id']."'>
                              <input type='hidden' name='iname' value='".$row['name']."'>
                              <input type='hidden' name='price' value='".$row['price']."'>
                              <br>            
                              <h5>&nbsp&nbsp可供應狀態</h5>
                              <h5><div>&nbsp&nbsp ";
                              if($row['av']==1){
                                echo "
                                <input type='radio' id='choice1' name='av' value=1 checked>
                                <label for='choice1'>供應中</label>&nbsp&nbsp
                                <input type='radio' id='choice2' name='av' value=0>
                                <label for='choice2'>停售</label>
                                </div></h5>
                                ";
                              }
                              elseif($row['av']==0){
                                echo "
                                <input type='radio' id='choice1' name='av' value=1>
                                <label for='choice1' >供應中</label>&nbsp&nbsp
                                <input type='radio' id='choice2' name='av' value=0 checked>
                                <label for='choice2'>停售</label>
                                </div></h5>
                                ";
                              }
                                echo "
                                <h5>&nbsp&nbsp餐點描述</h5>
                                &nbsp&nbsp&nbsp<input type='text' size='40' id='exampleFormControlInput' name = 'des' value = '".$row['des']."'>
                                <br><br>
                                <div class='modal-footer'>
                                  <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>取消</button>
                                  <input type='submit' class='btn btn-primary' value='確認修改'>
                              </div> 
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  ";
              }
              elseif($row['category'] == "飲料" && $row['customize'] == 1){
                echo "
                <div class='modal fade' id='exampleModal".$row['item_id']."' tabindex='-1' aria-labelledby='exampleModalLabel'
                  aria-hidden='true'>
                  <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
                    <div class='modal-content'>
                      <div class='modal-header'>S
                        <h5 class='modal-title' id='exampleModalLabel'>".$row['name']."</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                      </div>
                      <div class='text-body'>
                            <form action='menucheckfunc.php' method = 'post'>
                              <input type='hidden' name='id' value='".$row['item_id']."'>
                              <input type='hidden' name='iname' value='".$row['name']."'>
                              <input type='hidden' name='price' value='".$row['price']."'>
                              <br>            
                              <h5>&nbsp&nbsp可供應狀態</h5>
                              <h5><div>&nbsp&nbsp ";
                              if($row['av']==1){
                                echo "
                                <input type='radio' id='choice1' name='av' value=1 checked>
                                <label for='choice1'>供應中</label>&nbsp&nbsp
                                <input type='radio' id='choice2' name='av' value=0>
                                <label for='choice2'>停售</label>
                                </div></h5>
                                ";
                              }
                              elseif($row['av']==0){
                                echo "
                                <input type='radio' id='choice1' name='av' value=1>
                                <label for='choice1' >供應中</label>&nbsp&nbsp
                                <input type='radio' id='choice2' name='av' value=0 checked>
                                <label for='choice2'>停售</label>
                                </div></h5>
                                ";
                              }
                                echo "
                                <h5>&nbsp&nbsp餐點描述</h5>
                                &nbsp&nbsp&nbsp<input type='text' size='40' id='exampleFormControlInput' name = 'des' value = '".$row['des']."'>
                                <br><br>
                                <div class='modal-footer'>
                                  <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>取消</button>
                                  <input type='submit' class='btn btn-primary' value='確認修改'>
                              </div> 
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                ";
              }
              else{
                echo "
                <div class='modal fade' id='exampleModal".$row['item_id']."' tabindex='-1' aria-labelledby='exampleModalLabel'
                  aria-hidden='true'>
                  <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
                    <div class='modal-content'>
                      <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>".$row['name']."</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                      </div>
                      <div class='text-body'>
                            <form action='menucheckfunc.php' method = 'post'>
                              <input type='hidden' name='id' value='".$row['item_id']."'>
                              <input type='hidden' name='iname' value='".$row['name']."'>
                              <input type='hidden' name='price' value='".$row['price']."'>
                              <br>            
                              <h5>&nbsp&nbsp可供應狀態</h5>
                              <h5><div>&nbsp&nbsp ";
                              if($row['av']==1){
                                echo "
                                <input type='radio' id='choice1' name='av' value=1 checked>
                                <label for='choice1'>供應中</label>&nbsp&nbsp
                                <input type='radio' id='choice2' name='av' value=0>
                                <label for='choice2'>停售</label>
                                </div></h5>
                                ";
                              }
                              elseif($row['av']==0){
                                echo "
                                <input type='radio' id='choice1' name='av' value=1>
                                <label for='choice1' >供應中</label>&nbsp&nbsp
                                <input type='radio' id='choice2' name='av' value=0 checked>
                                <label for='choice2'>停售</label>
                                </div></h5>
                                ";
                              }
                                echo "
                                <h5>&nbsp&nbsp餐點描述</h5>
                                &nbsp&nbsp&nbsp<input type='text' size='40' id='exampleFormControlInput' name = 'des' value = '".$row['des']."'>
                                <br><br>
                                <div class='modal-footer'>
                                  <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>取消</button>
                                  <input type='submit' class='btn btn-primary' value='確認修改'>
                              </div> 
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                ";
              }
            }
            mysqli_close($con);
          ?>

        </div>
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
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"
    integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
    integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/"
    crossorigin="anonymous"></script>
    <?php
    include("notification.php");
    if(isset($_GET['message'])){
      if(isset($_SESSION['type'])){
        echo "<script>notify('".$_SESSION['type']."', '".$_GET['message']."')</script>";
      }
    }
    ?>
</body>

</html>