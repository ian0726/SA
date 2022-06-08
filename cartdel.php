<?php
    include("db.php");
    $user_id = $_POST['user_id'];
    $item_id = $_POST['item_id'];
    $sauce = $_POST['sauce'];
    $side = $_POST['side'];
    $variant = $_POST['variant'];
    if($sauce != '' && $side != ''){
        $sql = "DELETE FROM cart WHERE `user_id` = '".$user_id."' AND item_id = '".$item_id."' AND sauce = '".$sauce."' AND side = '".$side."'";
    }
    elseif($variant != ''){
        $sql = "DELETE FROM cart WHERE `user_id` = '".$user_id."' AND item_id = '".$item_id."' AND variant = '".$variant."'";
    }
    else{
        $sql = "DELETE FROM cart WHERE `user_id` = '".$user_id."' AND item_id = '".$item_id."'";
    }
   echo $sql;
    $rs = mysqli_query($con, $sql);
    if(mysqli_query($con, $sql)){
        echo "successfully deleted";
        $_SESSION['type'] = "success";
        header("Location: cart.php?message=成功刪除");
    }

    mysqli_close($con);
?>