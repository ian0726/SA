<?php
session_start();
include("db.php");
if(isset($_POST["user_id"]) && isset($_POST["password"]) && isset($_POST["name"]) && isset($_POST["phone"])){
  $user_id = $_POST["user_id"];
  $password = $_POST["password"];
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  
  $sql = "SELECT * FROM account";
  $result=mysqli_query($con,$sql);
  while($row = mysqli_fetch_assoc($result)){
    if($row['user_id']==$user_id){
      $exist = 1;
    }
  }
  if($exist == 1){
    $_SESSION['type'] = "error";
    header("Location: regacc.php?message=此帳號已被註冊！");
    #echo "<script>{window.alert('此帳號已被註冊！'); location.href='regacc.php'}</script>";
  }
  else{
    $sql = "insert into account (user_id, password, name, phone, block) values ('$user_id', '$password', '$name', '$phone', 0)";
    if ($result=mysqli_query($con,$sql)){
      $_SESSION['type'] = "success";
      header("Location: login.php?message=註冊成功！");
      #echo "<script>{window.alert('註冊成功！'); location.href='login.php'}</script>";
    }
  }
}
?>
