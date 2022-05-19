<?php
    session_start();
    include("db.php");
    if(isset($_SESSION['user_id'])){
      $user_id = $_SESSION['user_id'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>座位測試</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
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

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<style>
    body{
            background-color: rgb(241, 242, 243);
        }
    .title{
        text-align:center;
    }
    table{
        margin-left:200px;
        width:1000px;
        height:500px;
    }
    .seat_id1{
        font-size:2rem;
    }
    .seat_id2{
        font-size:2rem;
    }
    .seat_id3{
        font-size:2rem;
    }
    .seat_id4{
        font-size:2rem;
    }
    .seat_id5{
        font-size:2rem;
    }
    .seat_id6{
        font-size:2rem;
    }
    .seat_id7{
        font-size:2rem;
    }
    .seat_id8{
        font-size:2rem;
    }
    .seat_id9{
        font-size:2rem;
    }
    .seat_id10{
        font-size:2rem;
    }
    .seat_id11{
        font-size:2rem;
    }
    .seat_id12{
        font-size:2rem;  
    }
    .seat_id13{
        font-size:2rem;

    }
    .seat_id14{
        font-size:2rem;
    }
    .seat_id15{
        font-size:2rem;
    }
    .seat_id16{
        font-size:2rem;
    }
    .seat_id17{
        font-size:2rem;

    }
    .seat_id18{
        font-size:2rem;
    }
    .seat_id19{
        font-size:2rem;
    }
    .seat_id20{
        font-size:2rem;
    }
    .seat_id21{
        font-size:2rem;

    }
    .seat_id22{
        font-size:2rem;
    }
    .seat_id23{
        font-size:2rem;
    }
    .seat_id24{
        font-size:2rem;
    }
    .seat_id25{
        font-size:2rem;
    }
    .seat_id26{
        font-size:2rem;
    }
    .btn-chooseat{
    position: fixed;
    bottom: 70px;
    right: 5px;
    width: 150px;
    height: 40px;
    text-align: center;
    border-radius: 360px;
    cursor: pointer;
    line-height: 30px;
    color: #000;
    background-color: transparent;
    border: 1px solid #000;
    transition: all .3s linear;
    }
    .btn-chooseat:hover{
        background-color: #bdb76b;
        color: #fff;
    }
    .btn-showaiting{
    position: fixed;
    bottom: 20px;
    right: 5px;
    width: 150px;
    height: 40px;
    text-align: center;
    border-radius: 360px;
    cursor: pointer;
    line-height: 30px;
    color: #000;
    background-color: transparent;
    border: 1px solid #000;
    transition: all .3s linear;
    }
    .btn-showaiting:hover{
        background-color: #bdb76b;
        color: #fff;
    }
    .seatitle{
        margin-top:20px;
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
  <div class="heading_container heading_center">
        <h2 class="seatitle">
          SEAT
        </h2>
      </div>
    <table>
        <tr>
            <td>單人1桌<p class="seat_id1">
              <?php
                $sql = "SELECT * FROM seating WHERE seat_id = '單人1桌'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['occupied'] == 1) {
                    echo "<i class='bi bi-check-square-fill'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">&nbsp</font>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">有空位可入座</font>";
                  }
              ?>
            </p></td>
        </tr>
        <tr>
            <td>單人2桌<p class="seat_id2">
            <?php
                $sql = "SELECT * FROM seating WHERE seat_id = '".'單人2桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['occupied'] == 1) {
                    echo "<i class='bi bi-check-square-fill'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">&nbsp</font>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">有空位可入座</font>";
                  }
              ?>
            </p></td>
            <td>雙人13桌<p class="seat_id13">
            <?php
                $sql = "SELECT * FROM seating WHERE seat_id = '".'雙人13桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['occupied'] == 1) {
                    echo "<i class='bi bi-check-square-fill'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">&nbsp</font>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">有空位可入座</font>";
                  }
              ?>
            </p></td>
            <td>雙人14桌<p class="seat_id14"> <?php
                $sql = "SELECT * FROM seating WHERE seat_id = '".'雙人14桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['occupied'] == 1) {
                    echo "<i class='bi bi-check-square-fill'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">&nbsp</font>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">有空位可入座</font>";
                  }
              ?></p></td>
            <td>雙人15桌<p class="seat_id15"> <?php
                $sql = "SELECT * FROM seating WHERE seat_id = '".'雙人15桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['occupied'] == 1) {
                    echo "<i class='bi bi-check-square-fill'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">&nbsp</font>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">有空位可入座</font>";
                  }
              ?></p></td>
            <td>雙人16桌<p class="seat_id16"> <?php
                $sql = "SELECT * FROM seating WHERE seat_id = '".'雙人16桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['occupied'] == 1) {
                    echo "<i class='bi bi-check-square-fill'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">&nbsp</font>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">有空位可入座</font>";
                  }
              ?></p></td>
        </tr>
        <tr>
            <td>單人3桌<p class="seat_id3">
            <?php
                $sql = "SELECT * FROM seating WHERE seat_id = '".'單人3桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['occupied'] == 1) {
                    echo "<i class='bi bi-check-square-fill'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">&nbsp</font>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">有空位可入座</font>";
                  }
              ?>
            </p></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>沙發25桌<p class="seat_id25"> <?php
                $sql = "SELECT * FROM seating WHERE seat_id = '".'沙發25桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['occupied'] == 1) {
                    echo "<i class='bi bi-check-square-fill'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">&nbsp</font>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">有空位可入座</font>";
                  }
              ?></p></td>
        </tr>
        <tr>
            <td>單人4桌<p class="seat_id4">
            <?php
                $sql = "SELECT * FROM seating WHERE seat_id = '".'單人4桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['occupied'] == 1) {
                    echo "<i class='bi bi-check-square-fill'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">&nbsp</font>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">有空位可入座</font>";
                  }
              ?>
            </p></td>
            <td>雙人17桌<p class="seat_id17"> <?php
                $sql = "SELECT * FROM seating WHERE seat_id = '".'雙人17桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['occupied'] == 1) {
                    echo "<i class='bi bi-check-square-fill'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">&nbsp</font>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">有空位可入座</font>";
                  }
              ?></p></td>
            <td>雙人18桌<p class="seat_id18"> <?php
                $sql = "SELECT * FROM seating WHERE seat_id = '".'雙人18桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['occupied'] == 1) {
                    echo "<i class='bi bi-check-square-fill'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">&nbsp</font>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">有空位可入座</font>";
                  }
              ?></p></td>
            <td>雙人19桌<p class="seat_id19"> <?php
                $sql = "SELECT * FROM seating WHERE seat_id = '".'雙人19桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['occupied'] == 1) {
                    echo "<i class='bi bi-check-square-fill'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">&nbsp</font>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">有空位可入座</font>";
                  }
              ?></p></td>
            <td>雙人20桌<p class="seat_id20"> <?php
                $sql = "SELECT * FROM seating WHERE seat_id = '".'雙人20桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['occupied'] == 1) {
                    echo "<i class='bi bi-check-square-fill'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">&nbsp</font>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">有空位可入座</font>";
                  }
              ?></p></td>
        </tr>
        <tr>
            <td>單人5桌<p class="seat_id5">
            <?php
                $sql = "SELECT * FROM seating WHERE seat_id = '".'單人5桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['occupied'] == 1) {
                    echo "<i class='bi bi-check-square-fill'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">&nbsp</font>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">有空位可入座</font>";
                  }
              ?>
            </p></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>   
            <td>沙發26桌<p class="seat_id26">
            <?php
                $sql = "SELECT * FROM seating WHERE seat_id = '".'沙發26桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['occupied'] == 1) {
                    echo "<i class='bi bi-check-square-fill'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">&nbsp</font>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">有空位可入座</font>";
                  }
              ?>
            </p></td>
        </tr>
        <tr>
            <td>單人6桌<p class="seat_id6">
            <?php
                $sql = "SELECT * FROM seating WHERE seat_id = '".'單人6桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['occupied'] == 1) {
                    echo "<i class='bi bi-check-square-fill'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">&nbsp</font>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">有空位可入座</font>";
                  }
              ?>
            </p></td>
            <td>雙人21桌<p class="seat_id21"> <?php
                $sql = "SELECT * FROM seating WHERE seat_id = '".'雙人21桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['occupied'] == 1) {
                    echo "<i class='bi bi-check-square-fill'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">&nbsp</font>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">有空位可入座</font>";
                  }
              ?></p></td>
            <td>雙人22桌<p class="seat_id22"> <?php
                $sql = "SELECT * FROM seating WHERE seat_id = '".'雙人22桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['occupied'] == 1) {
                    echo "<i class='bi bi-check-square-fill'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">&nbsp</font>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">有空位可入座</font>";
                  }
              ?></p></td>
            <td>雙人23桌<p class="seat_id23"> <?php
                $sql = "SELECT * FROM seating WHERE seat_id = '".'雙人23桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['occupied'] == 1) {
                    echo "<i class='bi bi-check-square-fill'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">&nbsp</font>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">有空位可入座</font>";
                  }
              ?></p></td>
            <td>雙人24桌<p class="seat_id24"> <?php
                $sql = "SELECT * FROM seating WHERE seat_id = '".'雙人24桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['occupied'] == 1) {
                    echo "<i class='bi bi-check-square-fill'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">&nbsp</font>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">有空位可入座</font>";
                  }
              ?></p></td>
        </tr>
        <tr>
            <td>單人7桌<p class="seat_id7"><?php
                $sql = "SELECT * FROM seating WHERE seat_id = '".'單人7桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['occupied'] == 1) {
                    echo "<i class='bi bi-check-square-fill'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">&nbsp</font>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">有空位可入座</font>";
                  }
              ?></p></td>
        </tr>
        <tr>
            <td>單人8桌<p class="seat_id8"><?php
                $sql = "SELECT * FROM seating WHERE seat_id = '".'單人8桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['occupied'] == 1) {
                    echo "<i class='bi bi-check-square-fill'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">&nbsp</font>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">有空位可入座</font>";
                  }
              ?></p></td>
            <td>單人9桌<p class="seat_id9"><?php
                $sql = "SELECT * FROM seating WHERE seat_id = '".'單人9桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['occupied'] == 1) {
                    echo "<i class='bi bi-check-square-fill'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">&nbsp</font>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">有空位可入座</font>";
                  }
              ?></p></td>
            <td>單人10桌<p class="seat_id10"><?php
                $sql = "SELECT * FROM seating WHERE seat_id = '".'單人10桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['occupied'] == 1) {
                    echo "<i class='bi bi-check-square-fill'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">&nbsp</font>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">有空位可入座</font>";
                  }
              ?></p></td>
            <td>單人11桌<p class="seat_id11"><?php
                $sql = "SELECT * FROM seating WHERE seat_id = '".'單人11桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['occupied'] == 1) {
                    echo "<i class='bi bi-check-square-fill'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">&nbsp</font>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">有空位可入座</font>";
                  }
              ?></p></td>
            <td>單人12桌<p class="seat_id12"><?php
                $sql = "SELECT * FROM seating WHERE seat_id = '".'單人12桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['occupied'] == 1) {
                    echo "<i class='bi bi-check-square-fill'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">&nbsp</font>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                    echo "<br>";
                    echo "<font size=\"3\" color=\"red\">有空位可入座</font>";
                  }
              ?></p></td>
        </tr>
    </table>


    <a href="queue.php"><button type="button" class="btn btn-chooseat">
    開始候位
    </button></a>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-showaiting" data-bs-toggle="modal" data-bs-target="#exampleModal">
    查看候位狀態
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">候位組數顯示</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        <?php
          if(!isset($user_id)){
            echo "請先登入";
          }
          else{
            $sql = "SELECT queue_id FROM queue WHERE user_id = '".$user_id."'";
            $rs = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($rs);
            $queue_id = $row['queue_id'];
            echo "您的候位號碼為: ".$queue_id;
            echo "<br>";
            $sql = "SELECT COUNT('queue_id') AS C FROM queue WHERE queue_id < ".$queue_id."";
            $rs = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($rs);
            $count = $row['C'];
            echo "前方有" .$count. "組正在候位";
            echo "<br>";
            if($count == 0){
              echo "<font size=\"5\" color=\"red\">請準備入座</font>";
            }
            else{
              echo " ";
            }
          }
          
          mysqli_close($con);          
          ?>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">了解</button>
        </div>
        </div>
    </div>
    </div>
</body>
</html>