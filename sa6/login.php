<?php
   session_start();
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

  <title> Feane </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

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

</head>
<body>

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/eat.jpg" alt="">
    </div>
    <!-- header section strats -->
    <?php
      include("header.php");
    ?>

  <!-- book section -->
  <section class="book_section layout_padding">
  <div class=" card" style="width: 35rem;height: 25rem;margin-left:200px; border-radius:20px; background-color: rgba(255,255,255,0.6);">  
  <div class="container">
    <div class="heading_container">
      <br> &nbsp;</br>
      <h2>
        歡迎光臨 方禾食呂
      </h2>
      <h5>
        如還未有帳號，點擊畫面右上角註冊立即加入我們!
        </h5>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="logincheck.php" method="post">
              <div>
                <input name="user_id" type="text" class="form-control" placeholder="請輸入帳號" style="width:100%;" require/>
              </div>
              <div>
                <input name="password" type="text" class="form-control" placeholder="請輸入密碼" style="width:100%;" require/>
              </div>
            
              <div class="btn_box">
                <input type="submit" value ="立即登入!" class="submitbutton">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  <!-- end book section -->

  <!-- footer section -->
  
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

</body>

</html>