<?php
    session_start();
    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
    }
    else{
        $_SESSION['type'] = "error";
        header("Location: seatcheck.php?message=請登入");
        #echo "<script>{window.alert('請先登入！'); location.href='seatcheck.php'}</script>";
    }
    include("db.php");
    if(isset($_POST["name"]) && isset($_POST["people"])){
        #check existing user
        $sql = "SELECT * FROM `queue` WHERE user_id = '".$user_id."'";
        $rs = mysqli_query($con, $sql);
        if(mysqli_num_rows($rs) == 0){
            $name = $_POST['name'];
            $people=$_POST["people"];
            #get date
            date_default_timezone_set('Asia/Taipei');
            $today=date('Y-m-d');
            $now=date('Y-m-d H:i:s');
            $nowsec=strtotime($now);

            $sql="insert into queue(user_id, time, people) values ('$name', '$now','$people')";
            if ($result=mysqli_query($con,$sql)){
                $_SESSION['type'] = "success";
                header("Location: seatcheck.php?message=新增成功");
                #echo "<script>{window.alert('新增成功！'); location.href='seatcheck.php'}</script>";
            }
        }
        else{
            $_SESSION['type'] = "error";
            header("Location: seatcheck.php?message=此帳號已候位，請查看候位狀態！");
            #echo "<script>{window.alert('此帳號已候位，請查看候位狀態！'); location.href='seatcheck.php'}</script>";
        }
        
    }

    mysqli_close($con);
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

<body style="background-color: 	#d6d6a5;">

 
    <div class="container-fluid">

        <!-- Page Heading -->
        <br><br>
        <center><h1 class="h3 mb-2 text-gray-800" style="font-family: Arial, Helvetica, sans-serif;font-weight:bold;color:white">登記候位</h1></center>
        <br>
        <!-- DataTales Example -->
        
        <div class="card shadow mb-4">
            <section class="ftco-section">
                <div class="container">
                    <div class="row justify-content-center">
                            <div class="m-4 text-center mb-4 ml-4 mr-4">
                            <form action="queue.php" method="post"  class="d-none d-sm-inline-block form-inline mr-auto">
                                <br>
                                <input type="hidden" name="filled" value="filled">
                                帳號：<input type="text" name="name" value="<?php echo"".$user_id.""?>" readonly required><br><br>
                                人數：<select name="people" style="width:205px" required><option value="" hidden selected disabled>請選擇人數</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select><br>
                                <br>
                                <input type="submit"  class="btn btn-light border-0" style="background-color:#ffd700;color:white;font-weight:bold"value="登記">
                            </form>
            </section>
        </div>
    </div>
  </div>

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
