<?php
    include("db.php");
    if(isset($_SESSION['user_id'])){
      $user_id = $_SESSION['user_id'];
    }

function render_seat($con, $seat_id) {
    $sql = "SELECT * FROM seating WHERE seat_id = '$seat_id'";
    $rs = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($rs);
    $occupied = $row['occupied'] == 1;

    echo "<td> $seat_id <p class=\"fs-2\">";
    if ($occupied) {
    echo "<i class='bi bi-check-square-fill'></i>";
    echo "<br>";
    echo "<font size=\"3\" color=\"red\">&nbsp</font>";
    echo  "<button type='button' class='btn btn-info' data-bs-toggle='modal' data-bs-target='#exampleModal".$row['seat_id']."'>清空</button>
    
    <!-- Modal -->
    <div class='modal fade' id='exampleModal".$row['seat_id']."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header>
                <h5 class='modal-title' id='exampleModalLabel'>&nbsp;&nbsp;&nbsp;系統通知</h5>       
                </div>
                <div class='modal-body'>是否清空此座位</div>
                <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>否</button>
                <form action='seatfunc.php' method='post'>
                <input type='hidden' name='id'  value='".$row['seat_id']."'>
                <input type='hidden' name='func' value='confirm'>
                <input type='submit'   class='btn btn-primary' value = '是'>
                </form>
                </div>
            </div>
        </div>
    </div>";
    }
            
    else{
    echo "<i class='bi bi-square'></i>";
    echo "<br>";
    echo "<font size=\"3\" color=\"red\">有空位可入座</font>";
    }
    echo "</p>
    </td>";
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
        <br>
      
        <br>
        
  <h2 class="seatitle">
          目前座位狀況
        </h2>
        <br>
        <br>
</div>
    <table>
        <tr>
        <?php render_seat($con, '單人01桌') ?>
        </tr>
        <tr>
        <?php render_seat($con, '單人02桌') ?>
        <?php render_seat($con, '雙人13桌') ?>
        <?php render_seat($con, '雙人14桌') ?>
        <?php render_seat($con, '雙人15桌') ?>
        <?php render_seat($con, '雙人16桌') ?>
        </tr>
        <tr>
        <?php render_seat($con, '單人03桌') ?>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
        <?php render_seat($con, '單人04桌') ?>
        <?php render_seat($con, '雙人17桌') ?>
        <?php render_seat($con, '雙人18桌') ?>
        <?php render_seat($con, '雙人19桌') ?>
        <?php render_seat($con, '雙人20桌') ?>
        </tr>
        <tr>
        <?php render_seat($con, '單人05桌') ?>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
        <?php render_seat($con, '單人06桌') ?>
        <?php render_seat($con, '雙人21桌') ?>
        <?php render_seat($con, '雙人22桌') ?>
        <?php render_seat($con, '雙人23桌') ?>
        <?php render_seat($con, '雙人24桌') ?>
        </tr>
        <tr>
        <?php render_seat($con, '單人07桌') ?>
        </tr>
        <tr>
        <?php render_seat($con, '單人08桌') ?>
        <?php render_seat($con, '單人09桌') ?>
        <?php render_seat($con, '單人10桌') ?>
        <?php render_seat($con, '單人11桌') ?>
        <?php render_seat($con, '單人12桌') ?>
        </tr>
    </table>
</div>

<!--   
    <a href="queue.php"><button type="button" class="btn btn-chooseat">
    開始候位
    </button></a>
-->
<!--
     Button trigger modal 
    <button type="button" class="btn btn-showaiting" data-bs-toggle="modal" data-bs-target="#exampleModal">
    查看候位狀態
    </button>
-->
<!-- Modal 
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">候位組數顯示</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
-->
<?php
/*
    if(isset($user_id)){
    
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
*/          
          mysqli_close($con);          
          ?>

<!--
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">了解</button>
        </div>
        </div>
-->
    </div>
    </div>
</body>
</html>
    </form>