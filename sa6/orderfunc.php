<?php
    session_start();
    include("db.php");
    $id = $_POST['id'];
    $func = $_POST['func'];
    if($func == "confirm"){
        $sql = "UPDATE ordermain SET complete = 1 WHERE order_id = ".$id."";
        if($rs = mysqli_query($con, $sql)){
            $_SESSION['type'] = "success";
            header("Location: unfinished.php?message=成功更新狀態");
        }
    }
    elseif($func == "notify"){
        $sql = "UPDATE ordermain SET complete = 2 WHERE order_id = ".$id."";
        if($rs = mysqli_query($con, $sql)){
            $_SESSION['type'] = "success";
            header("Location: unfinished.php?message=成功更新狀態");
        }
    }
    elseif($func == "done"){
        $sql = "UPDATE ordermain SET complete = 3 WHERE order_id = ".$id."";
        if($rs = mysqli_query($con, $sql)){
            $_SESSION['type'] = "success";
            header("Location: unfinished.php?message=成功更新狀態");
        }
    }
    elseif($func == "expire"){
        $user_id = $_POST['user'];
        echo $user_id;
        $sql = "UPDATE ordermain SET complete = 5 WHERE order_id = ".$id."";
        if($rs = mysqli_query($con, $sql)){
            #header("Location: unfinished.php?message=成功更新狀態");
        }
        $sql = "UPDATE account SET block = block + 1 WHERE user_id = '".$user_id."'";
        if($rs = mysqli_query($con, $sql)){
            $_SESSION['type'] = "success";
            header("Location: unfinished.php?message=成功更新狀態");
        }
    }


    mysqli_close($con);
?>

