<?php
  include('db.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>未完成訂單</title>
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
          <li class="nav-item active">
            <a class="nav-link" href="unfinished.php">未完成訂單<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="finished.php">已完成訂單</a>
          </li>
         
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
<h1><b>未完成訂單</b></h1>
<hr>

<br/>
<table class="table table-bordered data-table">
  <thead>
      <th>訂單編號</th>
      <th>取餐號碼</th>
      <th>餐點及細項｜餐點數量</th>
      <th>訂單金額</th>
      <th>使用者名稱</th>
      <th>日期</th>
      <th>用餐</th>
      <th>狀態</th>
      <th width="115px">狀態更新</th>
      <th width="115px">操作</th>
  </thead>
  <tbody>
    <?php
      $item_count = 0;
      $sql = "SELECT * FROM ordermain";
      $rs = mysqli_query($con, $sql);
      while($row = mysqli_fetch_assoc($rs)){
        if($row['complete'] != 3){
          $item_count += 1;
          echo "<tr>
          <td>".$row['order_id']."</td>
          <td>".$row['rec_num']."</td>
          <td>";

          $sqltemp = "SELECT * FROM `orderdetail` WHERE order_id ='".$row['order_id']."'";
          $rstemp = mysqli_query($con, $sqltemp);
          if($rstemp){
            while($rowtemp = mysqli_fetch_assoc($rstemp)){
              echo"。".$rowtemp['itemfullname']."  ".$rowtemp['amount']."份<br>
              ";
            }
          }
          if($row['place'] == 'here'){
            $place = "內用";
          }
          elseif($row['place'] == 'go'){
            $place = "外帶";
          }
          echo "
          </td>
          <td>$".$row['total_price']."</td>
          <td>".$row['user_id']."</td>
          <td>".$row['date']."</td>
          <td>".$place."</td>
          ";
          if($row['complete'] == 0){
            echo "
            <td>訂單未確認</td>
            <td>
              <form action='orderfunc.php' method='post'>
                <input type='hidden' name='id' value='".$row['order_id']."'>
                <input type='hidden' name='func' value='confirm'>
                <input type='submit'  class='btn btn-info btn-xs btn-checkorder' value = '確認訂單'>
              </form>
              <form action='orderfunc.php' method='post'>
                <input type='hidden' name='id' value='".$row['order_id']."'>
                <input type='hidden' name='func' value='notify'>
                <input type='submit'  class='btn btn-danger btn-xs btn-notice' value = '通知領取'>
              </form>
            </td>
            <td>
              <a href='' data-bs-toggle='modal' data-bs-target='#exampleModal".$row['order_id']."' style='text-decoration: none; color: white;'>
                <button class='btn btn-info btn-xs btn-edit'>編輯訂單</button>
              </a>
              <form action='orderfunc.php' method='post'>
                <input type='hidden' name='id' value='".$row['order_id']."'>
                <input type='hidden' name='func' value='done'>
                <input type='submit'  class='btn btn-danger btn-xs btn-delete' value = '完成訂單'>
              </form>
            </td>
            </tr>";
          }
          elseif($row['complete'] == 1){
            echo "
            <td>餐點準備中</td>
            <td>
              <form action='orderfunc.php' method='post'>
                <input type='hidden' name='id' value='".$row['order_id']."'>
                <input type='hidden' name='func' value='notify'>
                <input type='submit'  class='btn btn-danger btn-xs btn-notice' value = '通知領取'>
              </form>
            </td>
            <td>
              <a href='' data-bs-toggle='modal' data-bs-target='#exampleModal".$row['order_id']."' style='text-decoration: none; color: white;'>
                <button class='btn btn-info btn-xs btn-edit'>編輯訂單</button>
              </a>
              <form action='orderfunc.php' method='post'>
                <input type='hidden' name='id' value='".$row['order_id']."'>
                <input type='hidden' name='func' value='done'>
                <input type='submit'  class='btn btn-danger btn-xs btn-delete' value = '完成訂單'>
              </form>
            </td>
            </tr>";
          }
          elseif($row['complete'] == 2){
            echo "
            <td>已完成製作</td>
            <td>
              已通知取餐
            </td>
            <td>
              <a href='' data-bs-toggle='modal' data-bs-target='#exampleModal".$row['order_id']."' style='text-decoration: none; color: white;'>
                <button class='btn btn-info btn-xs btn-edit'>編輯訂單</button>
              </a>
              <form action='orderfunc.php' method='post'>
                <input type='hidden' name='id' value='".$row['order_id']."'>
                <input type='hidden' name='func' value='done'>
                <input type='submit'  class='btn btn-danger btn-xs btn-delete' value = '完成訂單'>
              </form>
            </td>
            </tr>";
          }
          #Modal
          echo"
          <div class='modal fade' id='exampleModal".$row['order_id']."' tabindex='-1' aria-labelledby='exampleModalLabel'
          aria-hidden='true'>
          <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
            <div class='modal-content' style='overflow:auto;'>
              <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel'>編輯｜訂單編號：".$row['order_id']."</h5>
                
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
              </div>
              <div class='text-body'>
                <br>
                <form action='updateorder.php' method = 'post'>
                  <input type='hidden' name = 'order_id' value = '".$row['order_id']."'>
            ";
                  $sqltemp = "SELECT * FROM `orderdetail` WHERE order_id ='".$row['order_id']."'";
                  if($rstemp = mysqli_query($con, $sqltemp)){
                    while($rowtemp = mysqli_fetch_assoc($rstemp)){
                      echo"
                      <input type='hidden' name = 'id[".$rowtemp['det_id']."]' value = '".$rowtemp['det_id']."'>
                      <h5>&nbsp&nbsp。".$rowtemp['itemfullname']."</h5>
                      <div class='form-check'>修改數量&nbsp
                        <input type='number' class='formnumber' id='exampleFormControlInput' name = 'amount[]' min='0' max='10' value = '".$rowtemp['amount']."' required style='width: 90px;'>
                      </div><br>
                      ";
                    }
                  }
                  echo"
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
      }
      if($item_count == 0){
        echo "<center><h1>所有訂單已完成</h1></center>";
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