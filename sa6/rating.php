<?php
  session_start();
  if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
  }
  else{
    $_SESSION['type'] = "error";
    header("Location: menu.php?message=請登入");
    #echo "<script>{window.alert('請登入！'); location.href='menu.php'}</script>";
  }
  include("db.php");

  $order_id = $_POST['order_id'];
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

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
    integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
    crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/cb9e3a4ed2.js" crossorigin="anonymous"></script>

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: "Poppins", sans-serif;
        }
        .step-wizard {
            background-color: #fffcf1;
            /* background-image: linear-gradient(19deg, #21d4fd 0%, #b721ff 100%); */
            height: 20vh;
            width: 100%;
            display: flex;
            justify-content: center;
        }
        .step-wizard2 {
            background-color: #fffcf1;
            height: auto;
            width: 100%;
            display: flex;
            justify-content: center;
            min-height: 35vh;
        }
        .step-wizard-list{
            top: 10%;
            background: #fff;
            box-shadow: 0 15px 25px rgba(0,0,0,0.1);
            color: #333;
            list-style-type: none;
            border-radius: 10px;
            display: flex;
            padding: 20px 10px;
            position: relative;
            z-index: 10;
            height: 110px;
            /* width: 50%; */
        }
        .item-list{
            background: #fff;
            box-shadow: 0 15px 25px rgba(0,0,0,0.1);
            color: #333;
            list-style-type: none;
            border-radius: 10px;
            padding: 20px 20px;
            position: relative;
            z-index: 10;
            width: 450px;
            font-size: 20px;
        }
        .boxed{
          width: 25px;
          height: 25px;
          text-align:center;
          line-height: 25px;
          background: #e1e1e1;
          color: black;
          display: inline-block;
          border-radius: 50%;
          margin-right: 10px;
          font-size: 14px;
          font-weight: 600;
        }
        .step-wizard-item{
            padding: 0 20px;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive:1;
            flex-grow: 1;
            max-width: 100%;
            display: flex;
            flex-direction: column;
            text-align: center;
            min-width: 170px;
            position: relative;
        }
        .step-wizard-item + .step-wizard-item:after{
            content: "";
            position: absolute;
            left: 0;
            top: 19px;
            background: #ffbd00;
            width: 100%;
            height: 2px;
            transform: translateX(-50%);
            z-index: -10;
        }
        .progress-count{
            height: 40px;
            width:40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-weight: 600;
            margin: 0 auto;
            position: relative;
            z-index:10;
            color: transparent;
        }
        .progress-count:after{
            content: "";
            height: 40px;
            width: 40px;
            background: #ffbd00;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            z-index: -10;
        }
        .progress-count:before{
            content: "";
            height: 10px;
            width: 20px;
            border-left: 3px solid #fff;
            border-bottom: 3px solid #fff;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -60%) rotate(-45deg);
            transform-origin: center center;
        }
        .progress-label{
            font-size: 14px;
            font-weight: 600;
            margin-top: 10px;
        }
        .current-item .progress-count:before,
        .current-item ~ .step-wizard-item .progress-count:before{
            display: none;
        }
        .current-item ~ .step-wizard-item .progress-count:after{
            height:10px;
            width:10px;
        }
        .current-item ~ .step-wizard-item .progress-label{
            opacity: 0.5;
        }
        .current-item .progress-count:after{
            background: #fff;
            border: 2px solid #ffbd00;
        }
        .current-item .progress-count{
            color: #ffbd00;
        }
        .list-bottom{
          bottom: 0px;
        }
        .table-outbox {
          margin: 50px; /* 添加外距 */
          box-shadow:1px 2px 2px 1px;
          /* box-shadow: 0px 35px 50px rgba(27, 31, 49, 0.1); 添加表格陰影 */
          background-color: white;
        }

        /*  table
        ------------------------------------- */
        table {
          border-collapse: collapse; /* 表格邊框合併 */
          width: 100%; /* 寬度 100% */
          /* background-color: white; 背景白色 */
        }

        table thead th {
          color: #ffffff; /* 表頭文字白色 */
          background: #2f4961; /* 表頭背景白色 */
        }

        table td,
        table th {
          text-align: center; /* 文字置中顯示 */
          padding: 10px; /* 添加內距 */
        }

        table td {
          border-right: 1px solid #f1f1f1; /* 表格 td 右邊框顏色 */
        }

        table tr:nth-child(even) {
          background: #f8f8f8; /* 表格偶數 tr 灰色背景 */
        }
        .btn-warning{
          margin-top:3px;
        }
    </style>
</head>

<body class="sub_page" style="background-color: #fffcf1;">

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
  <center style='padding-top: 20px;'><h1>本次評分餐點</h1></center>
  <div class='table-outbox'>
      <table>
          <thead>
            <tr>
              <th>訂單流水編號</th>
              <th>餐點及細項</th>
              <th>評分</th>
              <th>評價</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          <tr>
          <?php
            $order_id = $_POST['order_id'];
            $sqltemp = "SELECT * FROM `orderdetail` WHERE order_id =".$order_id."";
            $rstemp = mysqli_query($con, $sqltemp);
            if($rstemp){
              while($rowtemp = mysqli_fetch_assoc($rstemp)){
                $rating = $rowtemp['rating'];
                $feedback = $rowtemp['feedback'];
            ?>
              <form action='sendrating.php' method='post'>
            <tr>
              <td><?php echo $order_id ?></td>
              <td style="text-align: left;">
                。<?php echo $rowtemp['item_name'] ?>
                <?php
                if($rowtemp['sauce'] != NULL){
                  echo $rowtemp['sauce']." ".$rowtemp['side'];
                }
                elseif($rowtemp['variant'] != NULL){
                  echo $rowtemp['variant'];
                }
                ?>
                <br />
              </td>
              <td>
                <input type='hidden' name='det_id' value='<?php echo $rowtemp['det_id'] ?>' />
                <label>
                  <input type='radio' name='star' value='1' <?php echo $rating == 1 ? 'checked' : '' ?>> 1
                </label>
                <label>
                  <input type='radio' name='star' value='2' <?php echo $rating == 2 ? 'checked' : '' ?>> 2
                </label>
                <label>
                  <input type='radio' name='star' value='3' <?php echo $rating == 3 ? 'checked' : '' ?>> 3
                </label>
                <label>
                  <input type='radio' name='star' value='4' <?php echo $rating == 4 ? 'checked' : '' ?>> 4
                </label>
                <label>
                  <input type='radio' name='star' value='5' <?php echo $rating == 5 ? 'checked' : '' ?>> 5
                </label>     
              </td>
                <td>
                <textarea name='feedbacktext' rows='4' cols='25'><?php echo $feedback ?></textarea>
                </td>
                <td>
                  <input type='hidden' name='order_id' value='".$order_id."'>
                  <input type='submit'  class='btn btn-success btn-xs btn-edit' value = '確認送出'>
                </td>
              </tr>
            </form>
            <?php
              }
            }
            mysqli_close($con);
            ?>
          
          </tbody>
      </table>
  </div>
  <section class='step-wizard2'></section>

     
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!--  <script src="js/jquery-3.4.1.min.js"></script> -->
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
</body>

</html>