<?php
    session_start();
    include("db.php");
    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
    }
    else{
        $_SESSION['type'] = "error";
        header("Location: menu.php?message=請登入");
        #echo "<script>{window.alert('請登入！'); location.href='menu.php'}</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
 
 <!--owl slider stylesheet -->
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
 <!-- nice select -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
 <!-- font awesome style -->
 <link href="css/font-awesome.min.css" rel="stylesheet" />
 <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 
 <!-- Custom styles for this template -->
 <link href="css/style.css" rel="stylesheet" />
 <!-- responsive style -->
 <link href="css/responsive.css" rel="stylesheet" />
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>購物車</title>
    <style>
        body{
            background-color: rgba(241, 242, 243);
        }
        .item_header{
            display: flex;
            width: 1000px;
            margin: 0 auto;
            height: 30px;
            background-color: #C6B56F;
            border-radius: 3px;
            padding-left: 10px;
            box-shadow:1px 2px 2px 1px;
        }
        .item_header div{
            width: 200px;
            color: #2e2e2e;
            line-height: 30px;
  
        }
        .item_body{
            margin-top: 20px;
            height: 100px;
            align-items: center; 
            background-color: #fff;   
        }
        .item_detail img{
   
            height: 80px;
            border-radius: 3px;
            /* margin-top: 10px; */
            float: left;
        }
        .item_detail .name{
            margin-left: 100px;
            margin-top: 20px;
        }
        .title{
            text-align:center;
            font-size:30px;
        }
        .btn-cancel{
            background-color:#C6B56F;
            color:white;width:125px;
            height:50px;
            text-align: center;
            cursor: pointer;
            line-height: 20px;
            color: white;
            position: relative;
            transition: all .3s linear;
        }
        .btn-cancel > p{
            position: relative;
            z-index: 1;
        }
        .btn-cancel::before{
            content: "";
            width: 0%;
            height: 100%;
            display: block;
            background-color: #ffbe33;
            position: absolute;
            top: 0;
            left: 0;
            transition: all .3s ease;
        }
        .btn-cancel:hover{
            color: #ffbe33;
        }
        .btn-cancel:hover::before{
            width: 100%;
        }
        
        .btn-orderagain{
            width:125px;
            color:white;width:125px;
            height:50px;
            background-color:#C6B56F;
            display: white;
            text-align: center;
            cursor: pointer;
            line-height: 20px;
            position: relative;
            transition: all .3s linear;
        }
        .btn-orderagain > p{
            position: relative;
            z-index: 1;
        }
        .btn-orderagain::before{
            content: "";
            width: 0%;
            height: 100%;
            display: block;
            background-color: #ffbe33;
            position: absolute;
            top: 0;
            right: 0;
            transition: all .3s ease;
        }
        .btn-orderagain:hover{
            color: #fff;
        }
        .btn-orderagain:hover::before{
            width: 100%;
        }
        .btn-finish{
            background-color:#C6B56F;
            color:white;width:125px;
            height:50px;
            text-align: center;
            cursor: pointer;
            line-height: 20px;
            color: white;
            position: relative;
            transition: all .3s linear;
        }
        .btn-finish > p{
            position: relative;
            z-index: 1;
        }
        .btn-finish::before{
            content: "";
            width: 0%;
            height: 100%;
            display: block;
            background-color: #ffbe33;
            position: absolute;
            top: 0;
            left: 0;
            transition: all .3s ease;
        }
        .btn-finish:hover{
            color: #ffbe33;
        }
        .btn-finish:hover::before{
            width: 100%;
        }
        .chooseatnum{
            margin-bottom:10px;
            font-size:20px;
        }
        .choosebtn{
            margin-bottom:10px;
            font-size:20px;
        }
    </style>
</head>
<body style='font-family:NSimSun;background-color:#fffcf1'>
<br>
<div class="cart">
    <div class = "title" style="margin-bottom: 20px">購物車</div>
    <div id="app">
        
        <div class="container">
            <div class="item_header">
                <div class="name" style="color:white">餐點名稱</div>
                <div class="sauce" style="color:white">醬料</div>
                <div class="side" style="color:white">副餐</div>
                <div class="variant" style="color:white">特殊類別</div>
                <div class="note" style="color:white">備註</div>
                <div class="count" style="color:white;">數量</div> 
                <div class="amount" style="color:white">小計</div>
                <div class="operate" style="color:white">操作</div>
            </div>
            <?php
                $sum = 0;
                $sql = "SELECT * FROM cart WHERE user_id = '".$user_id."'";
                $rs = mysqli_query($con, $sql);
                while($row = mysqli_fetch_assoc($rs)){
                    $sqlitem = "SELECT `name` FROM item WHERE item_id = ".$row['item_id']."";
                    $rsitem = mysqli_query($con, $sqlitem);
                    $rowitem = mysqli_fetch_assoc($rsitem);
                    $item_name = $rowitem['name'];
                    $sum += $row['totalp'];
                    if($row['sauce'] == NULL){
                        $sauce = "無";
                    }
                    else{
                        $sauce = $row['sauce'];
                    }
                    if($row['side'] == NULL){
                        $side = "無";
                    }
                    else{
                        $side = $row['side'];
                    }
                    if($row['variant'] == NULL){
                        $variant = "無";
                    }
                    else{
                        $variant = $row['variant'];
                    }
                    if($row['note'] == NULL){
                        $note = "無";
                    }
                    else{
                        $note = $row['note'];
                    }
                    echo "
                    <div class='item_header item_body'>           
                            <div class='name'><span></span> <td>".$item_name."<br /></div>
                            <div class='sauce'><span></span> <td>".$sauce."<br /></div>
                            <div class='side'><span></span> <td>".$side."<br /></div>
                            <div class='variant'><span></span> <td>".$variant."<br /></div>
                            <div class='note'><span></span> <td>".$note."<br /></div>
                            <div class='count'>".$row['amount']."</div> 
                            <div class='amount'><strong> $".$row['totalp']."</strong></div>
                            <div class='operate'>
                                <form action='cartdel.php' method = 'post'>
                                    <input type='hidden' name = 'user_id' value = '".$user_id."'>
                                    <input type='hidden' name = 'item_id' value='".$row['item_id']."'>
                                    <input type='hidden' name = 'sauce' value='".$row['sauce']."'>
                                    <input type='hidden' name = 'side' value='".$row['side']."'>
                                    <input type='hidden' name = 'variant' value='".$row['variant']."'>
                                    <input type='submit'  class='btn btn-info btn-xs btn-edit' style='background-color:#ffbe33;border:none;color:white;font-weight:bold;margin-bottom: 5px;' value = '刪除'>
                                 </form>";
                    echo"  
                                
                                 <a href='' data-bs-toggle='modal' data-bs-target='#exampleModal".$row['item_id']."'><button class='btn btn-info btn-xs btn-edit' style='background:#BAC451;border:none;color:white;font-weight:bold'>修改數量</button></a>
                               
                                
                            </div>
                    </div>    
                    ";
                    #Modal
                    echo"
                    <div class='modal fade' id='exampleModal".$row['item_id']."' tabindex='-1' aria-labelledby='exampleModalLabel'
                    aria-hidden='true'>
                    <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
                      <div class='modal-content' style='overflow:auto;'>
                        <div class='modal-header'>
                          <h5 class='modal-title' id='exampleModalLabel'>修改數量</h5>
                          <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                        </div>
                        <div class='text-body'>
                          <br>
                          <form action='updatecart.php' method = 'post'>
                            <input type='hidden' name = 'item_id' value = '".$row['item_id']."'>
                                <div class='form-check'>修改數量&nbsp
                                  <input type='number' class='formnumber' id='exampleFormControlInput' name = 'amount' min='0' max='10' value = '".$row['amount']."' required style='width: 90px;'>
                                </div><br>
                            <br>
                            <div class='modal-footer'>
                              <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>取消</button>
                              <input type='submit' class='btn btn-primary' style='background-color:#C6B56F;border:0' value='更新購物車'>
                            </div>
                            
                          </form>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  ";
                }
                mysqli_close($con);
            ?>
        </div>
    </div>
    <br>
    
    <form action="sendorder.php" method="post">
    
    <center>
    <div>
        <h2 style='font-family:NSimSun'>總金額：$<?php echo $sum?></h2>
    </div>
    <div>
    <h5 class="chooseatnum" style='font-family:NSimSun'>桌號(必選)</h5>
        <div class='form-check-table overflow-auto'>
            <select class="choosebtn" name='tablenum' required style='font-family:NSimSun'>
            <option value='' hidden selected disabled>請選擇桌號</option>
            <option value='外帶'>外帶</option>
            <option value='單人01桌'>單人01桌</option>
            <option value='單人02桌'>單人02桌</option>
            <option value='單人03桌'>單人03桌</option>
            <option value='單人04桌'>單人04桌</option>
            <option value='單人05桌'>單人05桌</option>
            <option value='單人06桌'>單人06桌</option>
            <option value='單人07桌'>單人07桌</option>
            <option value='單人08桌'>單人08桌</option>
            <option value='單人09桌'>單人09桌</option>
            <option value='單人10桌'>單人10桌</option>
            <option value='單人11桌'>單人11桌</option>
            <option value='單人12桌'>單人12桌</option>
            <option value='雙人13桌'>雙人13桌</option>
            <option value='雙人14桌'>雙人14桌</option>
            <option value='雙人15桌'>雙人15桌</option>
            <option value='雙人16桌'>雙人16桌</option>
            <option value='雙人17桌'>雙人17桌</option>
            <option value='雙人18桌'>雙人18桌</option>
            <option value='雙人19桌'>雙人19桌</option>
            <option value='雙人20桌'>雙人20桌</option>
            <option value='雙人21桌'>雙人21桌</option>
            <option value='雙人22桌'>雙人22桌</option>
            <option value='雙人23桌'>雙人23桌</option>
            <option value='雙人24桌'>雙人24桌</option>
            </select>
        </div>
    </div>
    <br>
    <div>
        <input type ="button" class="btn-cancel" onclick="history.back()" style="font-family:NSimSun;font-weight:bold;border:none;vertical-align: middle;border-radius:10px;" value="回上頁">
        <a href="menu.php" ><input type="button" class="btn-finish" style='font-family:NSimSun;font-weight:bold;border:none;vertical-align: middle;border-radius:10px;' value ="繼續加點"></a>
        <input type="submit" class="btn-finish" value="送出訂單" style='font-family:NSimSun;font-weight:bold;border:none;vertical-align: middle;border-radius:10px;'>
    </div>
    </center>
    </form>
    <?php
    include("notification.php");
    if(isset($_GET['message'])){
        if(isset($_SESSION['type'])){
            echo "<script>notify('".$_SESSION['type']."', '".$_GET['message']."')</script>";
        }
    }
    ?>
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
</body>

</html>