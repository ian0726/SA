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

$av = $_POST['av'];
$des=$_POST["des"];
$item_id=$_POST["id"];

echo $av." ".$des." ".$item_id;
if(isset($av) && isset($des) && isset($item_id)){
    $sql="Update `item` set `av`=".$av." , `des`='".$des."' WHERE `item_id`= ".$item_id."";
    if ($result=mysqli_query($con,$sql)){
        $_SESSION['type'] = "success";
        header("Location: menucheck.php?message=修改成功！");
        #echo "<script>{window.alert('修改成功！'); location.href='menucheck.php'}</script>";
    }
}
else{
    $_SESSION['type'] = "error";
    header("Location: menucheck.php?message=失敗！");
}

    
?>