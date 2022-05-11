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

  <title> 方禾食呂註冊 </title>

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
      <img src="images/storybox.png" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="方禾食呂首頁.php">
            <span style="font-family: Arial, Helvetica, sans-serif;">
              方禾食呂
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item active">
                <a class="nav-link" href="方禾食呂首頁.php" style="font-weight:bold">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu.php" style="font-weight:bold">Menu</a>
              </li>
            </ul>
           
    </header>


  <!-- book section -->
  <section class="book_section layout_padding">
  <div class=" card" style="width: 35rem;height: 35rem;margin-left:200px">  
    <div class="container">
      <div class="heading_container">
        <br></br>
        <h2 style="font-family: Arial, Helvetica, sans-serif;">
         歡迎光臨 方禾食呂
        </h2>
        <h5>
         輸入以下資訊開始您的絕佳用餐體驗吧!
         </h5>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form method="post" action="regacc.php">
              <div>
                <input name="user_id" type="text" class="form-control" placeholder="請輸入帳號" />
              </div>
              <div>
                <input name="password" type="text" class="form-control" placeholder="請輸入密碼" />
              </div>
              <div>
                <input name="name" type="text" class="form-control" placeholder="請輸入姓名" />
              </div>
              <div>
                <input name="phone" type="text" class="form-control" placeholder="請輸入電話號碼" />
              </div>
            
              <div class="btn_box">
                <input style="background-color:#ffd700;color:aliceblue;font-weight:bold;border:0;" type="submit" value="立即註冊" class="submitbutton">
              </div>
              </div>
            </form>
            <?php
            session_start();
        $link = mysqli_connect("localhost", "root","12345678","sa");
        if(isset($_POST["user_id"]) && isset($_POST["password"]) && isset($_POST["name"]) && isset($_POST["phone"])){
        $user_id = $_POST["user_id"];
        $password = $_POST["password"];
        $name = $_POST["name"];
        $phone = $_POST["phone"];

        $sql = "insert into account (user_id, password, name, phone, block) values ('$user_id', '$password', '$name', '$phone', 0)";
        $result=mysqli_query($link,$sql);
        if (isset($result)){
        echo "<script>{window.alert('註冊成功！'); location.href='login.php'}</script>";
         }
        }   
        ?>
          </div>
        </div>
     
      </div>
    </div>
  </section>
  <!-- end book section -->

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