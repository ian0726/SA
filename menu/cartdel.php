<?php
    include("db.php");
    $user_id = $_POST['user_id'];
    $full = $_POST['full'];
    
    $sql = "DELETE FROM cart WHERE `user_id` = '".$user_id."' AND itemfullname = '".$full."'";
    $rs = mysqli_query($con, $sql);
    if(mysqli_query($con, $sql)){
        echo "successfully deleted";
        header("Location: cart.php?message=成功刪除");
    }

    mysqli_close($con);
?>