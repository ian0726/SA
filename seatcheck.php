<?php
    include("db.php");
    $user_id = "test";
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
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
            方禾食呂
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item">
                <a class="nav-link" href="index.html">首頁 </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu.php">菜單</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="seatcheck.php">候位 <span class="sr-only"></span> </a>
              </li>
            </ul>
            <div class="user_option">
              <a href="" class="user_link">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              <a class="cart_link" href="cart.php">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029"
                  style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                  <g>
                    <g>
                      <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                   c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                   C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                   c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                   C457.728,97.71,450.56,86.958,439.296,84.91z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                   c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                    </g>
                  </g>
                </svg>
              </a>
              <!--
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
              <a href="" class="order_online">
                Order Online
              </a>
              -->
            </div>
          </div>
        </nav>
      </div>
    </header>
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
                $con = mysqli_connect("localhost", "root", "12345678", "sa");
                $sql = "SELECT seat_id FROM `order` WHERE seat_id = '".'單人1桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['seat_id'] == '單人1桌') {
                    echo "<i class='bi bi-check-square-fill'></i>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                  }
              ?>
            </p></td>
        </tr>
        <tr>
            <td>單人2桌<p class="seat_id2">
            <?php
                $con = mysqli_connect("localhost", "root", "12345678", "sa");
                $sql = "SELECT seat_id FROM `order` WHERE seat_id = '".'單人2桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['seat_id'] == '單人2桌') {
                    echo "<i class='bi bi-check-square-fill'></i>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                  }
              ?>
            </p></td>
            <td>雙人13桌<p class="seat_id13">
            <?php
                $con = mysqli_connect("localhost", "root", "12345678", "sa");
                $sql = "SELECT seat_id FROM `order` WHERE seat_id = '".'雙人13桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['seat_id'] == '雙人13桌') {
                    echo "<i class='bi bi-check-square-fill'></i>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                  }
              ?>
            </p></td>
            <td>雙人14桌<p class="seat_id14"> <?php
                $con = mysqli_connect("localhost", "root", "12345678", "sa");
                $sql = "SELECT seat_id FROM `order` WHERE seat_id = '".'雙人14桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['seat_id'] == '雙人14桌') {
                    echo "<i class='bi bi-check-square-fill'></i>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                  }
              ?></p></td>
            <td>雙人15桌<p class="seat_id15"> <?php
                $con = mysqli_connect("localhost", "root", "12345678", "sa");
                $sql = "SELECT seat_id FROM `order` WHERE seat_id = '".'雙人15桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['seat_id'] == '雙人15桌') {
                    echo "<i class='bi bi-check-square-fill'></i>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                  }
              ?></p></td>
            <td>雙人16桌<p class="seat_id16"> <?php
                $con = mysqli_connect("localhost", "root", "12345678", "sa");
                $sql = "SELECT seat_id FROM `order` WHERE seat_id = '".'雙人16桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['seat_id'] == '雙人16桌') {
                    echo "<i class='bi bi-check-square-fill'></i>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                  }
              ?></p></td>
        </tr>
        <tr>
            <td>單人3桌<p class="seat_id3">
            <?php
                $con = mysqli_connect("localhost", "root", "12345678", "sa");
                $sql = "SELECT seat_id FROM `order` WHERE seat_id = '".'單人3桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['seat_id'] == '單人3桌') {
                    echo "<i class='bi bi-check-square-fill'></i>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                  }
              ?>
            </p></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>沙發25桌<p class="seat_id25"> <?php
                $con = mysqli_connect("localhost", "root", "12345678", "sa");
                $sql = "SELECT seat_id FROM `order` WHERE seat_id = '".'沙發25桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['seat_id'] == '沙發25桌') {
                    echo "<i class='bi bi-check-square-fill'></i>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                  }
              ?></p></td>
        </tr>
        <tr>
            <td>單人4桌<p class="seat_id4">
            <?php
                $con = mysqli_connect("localhost", "root", "12345678", "sa");
                $sql = "SELECT seat_id FROM `order` WHERE seat_id = '".'單人4桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['seat_id'] == '單人4桌') {
                    echo "<i class='bi bi-check-square-fill'></i>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                  }
              ?>
            </p></td>
            <td>雙人17桌<p class="seat_id17"> <?php
                $con = mysqli_connect("localhost", "root", "12345678", "sa");
                $sql = "SELECT seat_id FROM `order` WHERE seat_id = '".'雙人17桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['seat_id'] == '雙人17桌') {
                    echo "<i class='bi bi-check-square-fill'></i>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                  }
              ?></p></td>
            <td>雙人18桌<p class="seat_id18"> <?php
                $con = mysqli_connect("localhost", "root", "12345678", "sa");
                $sql = "SELECT seat_id FROM `order` WHERE seat_id = '".'雙人18桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['seat_id'] == '雙人18桌') {
                    echo "<i class='bi bi-check-square-fill'></i>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                  }
              ?></p></td>
            <td>雙人19桌<p class="seat_id19"> <?php
                $con = mysqli_connect("localhost", "root", "12345678", "sa");
                $sql = "SELECT seat_id FROM `order` WHERE seat_id = '".'雙人19桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['seat_id'] == '雙人19桌') {
                    echo "<i class='bi bi-check-square-fill'></i>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                  }
              ?></p></td>
            <td>雙人20桌<p class="seat_id20"> <?php
                $con = mysqli_connect("localhost", "root", "12345678", "sa");
                $sql = "SELECT seat_id FROM `order` WHERE seat_id = '".'雙人20桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['seat_id'] == '雙人20桌') {
                    echo "<i class='bi bi-check-square-fill'></i>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                  }
              ?></p></td>
        </tr>
        <tr>
            <td>單人5桌<p class="seat_id5">
            <?php
                $con = mysqli_connect("localhost", "root", "12345678", "sa");
                $sql = "SELECT seat_id FROM `order` WHERE seat_id = '".'單人5桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['seat_id'] == '單人5桌') {
                    echo "<i class='bi bi-check-square-fill'></i>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                  }
              ?>
            </p></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>   
            <td>沙發26桌<p class="seat_id26">
            <?php
                $con = mysqli_connect("localhost", "root", "12345678", "sa");
                $sql = "SELECT seat_id FROM `order` WHERE seat_id = '".'沙發26桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['seat_id'] == '沙發26桌') {
                    echo "<i class='bi bi-check-square-fill'></i>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                  }
              ?>
            </p></td>
        </tr>
        <tr>
            <td>單人6桌<p class="seat_id6">
            <?php
                $con = mysqli_connect("localhost", "root", "12345678", "sa");
                $sql = "SELECT seat_id FROM `order` WHERE seat_id = '".'單人6桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['seat_id'] == '單人6桌') {
                    echo "<i class='bi bi-check-square-fill'></i>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                  }
              ?>
            </p></td>
            <td>雙人21桌<p class="seat_id21"> <?php
                $con = mysqli_connect("localhost", "root", "12345678", "sa");
                $sql = "SELECT seat_id FROM `order` WHERE seat_id = '".'雙人21桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['seat_id'] == '雙人21桌') {
                    echo "<i class='bi bi-check-square-fill'></i>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                  }
              ?></p></td>
            <td>雙人22桌<p class="seat_id22"> <?php
                $con = mysqli_connect("localhost", "root", "12345678", "sa");
                $sql = "SELECT seat_id FROM `order` WHERE seat_id = '".'雙人22桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['seat_id'] == '雙人22桌') {
                    echo "<i class='bi bi-check-square-fill'></i>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                  }
              ?></p></td>
            <td>雙人23桌<p class="seat_id23"> <?php
                $con = mysqli_connect("localhost", "root", "12345678", "sa");
                $sql = "SELECT seat_id FROM `order` WHERE seat_id = '".'雙人23桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['seat_id'] == '雙人23桌') {
                    echo "<i class='bi bi-check-square-fill'></i>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                  }
              ?></p></td>
            <td>雙人24桌<p class="seat_id24"> <?php
                $con = mysqli_connect("localhost", "root", "12345678", "sa");
                $sql = "SELECT seat_id FROM `order` WHERE seat_id = '".'雙人24桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['seat_id'] == '雙人24桌') {
                    echo "<i class='bi bi-check-square-fill'></i>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                  }
              ?></p></td>
        </tr>
        <tr>
            <td>單人7桌<p class="seat_id7"><?php
                $con = mysqli_connect("localhost", "root", "12345678", "sa");
                $sql = "SELECT seat_id FROM `order` WHERE seat_id = '".'單人7桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['seat_id'] == '單人7桌') {
                    echo "<i class='bi bi-check-square-fill'></i>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                  }
              ?></p></td>
        </tr>
        <tr>
            <td>單人8桌<p class="seat_id8"><?php
                $con = mysqli_connect("localhost", "root", "12345678", "sa");
                $sql = "SELECT seat_id FROM `order` WHERE seat_id = '".'單人8桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['seat_id'] == '單人8桌') {
                    echo "<i class='bi bi-check-square-fill'></i>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                  }
              ?></p></td>
            <td>單人9桌<p class="seat_id9"><?php
                $con = mysqli_connect("localhost", "root", "12345678", "sa");
                $sql = "SELECT seat_id FROM `order` WHERE seat_id = '".'單人9桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['seat_id'] == '單人9桌') {
                    echo "<i class='bi bi-check-square-fill'></i>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                  }
              ?></p></td>
            <td>單人10桌<p class="seat_id10"><?php
                $con = mysqli_connect("localhost", "root", "12345678", "sa");
                $sql = "SELECT seat_id FROM `order` WHERE seat_id = '".'單人10桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['seat_id'] == '單人10桌') {
                    echo "<i class='bi bi-check-square-fill'></i>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                  }
              ?></p></td>
            <td>單人11桌<p class="seat_id11"><?php
                $con = mysqli_connect("localhost", "root", "12345678", "sa");
                $sql = "SELECT seat_id FROM `order` WHERE seat_id = '".'單人11桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['seat_id'] == '單人11桌') {
                    echo "<i class='bi bi-check-square-fill'></i>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                  }
              ?></p></td>
            <td>單人12桌<p class="seat_id12"><?php
                $con = mysqli_connect("localhost", "root", "12345678", "sa");
                $sql = "SELECT seat_id FROM `order` WHERE seat_id = '".'單人12桌'."'";
                $rs = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($rs);
                  if ($row['seat_id'] == '單人12桌') {
                    echo "<i class='bi bi-check-square-fill'></i>";
                  }
                  else {
                    echo "<i class='bi bi-square'></i>";
                  }
              ?></p></td>
        </tr>
    </table>


    <a href="register.php"><button type="button" class="btn btn-chooseat">
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

        $user = "test";
          $con = mysqli_connect("localhost", "root", "12345678", "sa");
          $sql = "SELECT MAX(reg_id) FROM register";
          $rs = mysqli_query($con, $sql);
          $row = mysqli_fetch_assoc($rs);
          $reg_id = $row['MAX(reg_id)'];
          echo "您的候位號碼為: ".$reg_id;
          echo "<br>";
          $sql = "SELECT COUNT('reg_id') AS C FROM register";
          $rs = mysqli_query($con, $sql);
          $row = mysqli_fetch_assoc($rs);
          $count = $row['C']-1;
          echo "前方有" .$count. "組正在候位";
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