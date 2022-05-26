
<?php
  include('db.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>已完成訂單</title>
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
      <a class="navbar-brand" href="manage.php">方禾食呂訂單管理系統</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
          
         
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
<br>
<br>
<br>
<div class="container">
<h1><b>候位狀況</b></h1>
<hr>

<br/>
<table class="table table-bordered data-table">
  <thead>
      <th>候位號碼</th>
      <th>候位人數</th>
      <th>使用者名稱</th>
      <th>日期</th>
      <th width="115px">操作</th>
  </thead>
  <tbody>
    <?php
      $item_count = 0;
      $sql = "SELECT * FROM `queue`  ";
      $rs = mysqli_query($con, $sql);
      while($row = mysqli_fetch_assoc($rs)){
        $item_count += 1;
        echo "<tr>
        <td>".$row['queue_id']."</td>
        <td>".$row['people']."</td>
       ";

    
        
        echo "
        </td>
        <td>".$row['user_id']."</td>
        <td>".$row['time']."</td>
        <td>
          <a href='' data-bs-toggle='modal' data-bs-target='#exampleModal".$row['queue_id']."' style='text-decoration: none; color: white;'>
            <button class='btn btn-info btn-xs btn-edit'>編輯候位</button>
          </a>
         
        </form>
        </td>
        </tr>";
        
        #Modal
        echo"
        <div class='modal fade' id='exampleModal".$row['queue_id']."' tabindex='-1' aria-labelledby='exampleModalLabel'
        aria-hidden='true'>
        <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
          <div class='modal-content' style='overflow:auto;'>
            <div class='modal-header'>
              <h5 class='modal-title' id='exampleModalLabel'>編輯｜候位號碼：".$row['queue_id']."</h5>
              
              <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='text-body'>
              <br>
              <form action='updatequeue.php' method = 'post'>
                <input type='hidden' name = 'queue_id' value = '".$row['queue_id']."'>
                    <div class='form-check'>更改人數&nbsp
                      <input type='number' class='formnumber' id='exampleFormControlInput' name = 'people' min='0' max='10' value = '".$row['people']."' required style='width: 90px;'>
                    </div><br>
                <br>
                <div class='modal-footer'>
                  <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>取消</button>
                  <input type='submit' class='btn btn-primary' value='更新訂單'>
                </div>
                
              </form>
            </div>
            
          </div>
        </div>
      </div>
      ";
        
      }
      if($item_count == 0){
        echo "<center><h1>目前沒有人候位</h1></center>";
      }
    ?>
    
   
  </tbody>
</table>


</div>
</div>
<footer class="bg-dark text-center text-white">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 方禾食呂管理系統
  </div>
</footer>

<!--<script type="text/javascript" src="單位年薪js.js"></script>-->
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
<?php
  mysqli_close($con);
?>