<?php
    include("db.php");
    $user_id = "test";

    #get sum
    $sql = "SELECT SUM(totalp) AS `sum` FROM cart WHERE `user_id` = '".$user_id."'";
    $rs = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($rs);
    $sum = $row['sum'];
    
    #get date
    date_default_timezone_set('Asia/Taipei');
    $today = date('Y/m/d');
    $now = date('Y/m/d H:i:s');
    $nowsec = strtotime($now);

    #create rec_num
    $sql = "SELECT date, rec_num FROM `order` WHERE `user_id` = '".$user_id."' AND DATE(date) = DATE(now()) AND date = (SELECT MAX(date) from `order`);";
    $rs = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($rs);
    if(mysqli_num_rows($rs) == 0){
        $rec_num = 1;
    }
    else{
        $rec_num = $row['rec_num'] + 1;
    }
    
    #create order
    $sql = "INSERT INTO `order` (rec_num, total_price, `user_id`, complete, `date`) VALUES ('$rec_num', '$sum', '$user_id', '0', '$now');";
    if($rs = mysqli_query($con, $sql)){
        #header("Location: menu.php?message=成功送出訂單");
    }

    #get order id
    $sql = "SELECT order_id FROM `order` WHERE `user_id` = '".$user_id."' AND rec_num = '".$rec_num."'";
    $rs = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($rs);
    $order_id = $row['order_id'];
   

    #add from cart to order detail
    $sql = "SELECT * FROM cart WHERE `user_id` = '".$user_id."'";
    $rs = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($rs)){
        $sql = "INSERT INTO orderdetail (item_id, order_id, itemfullname, note, amount) VALUES ('".$row['item_id']."', '".$order_id."', '".$row['itemfullname']."', '".$row['note']."', '".$row['amount']."');";
        if(mysqli_query($con, $sql)){
            #header("Location: menu.php?message=成功加入訂單及訂單細項");
        }
    }

    
    #clear cart
    $sql = "DELETE FROM cart WHERE `user_id` = '".$user_id."'";
    $rs = mysqli_query($con, $sql);
    if(mysqli_query($con, $sql)){
        header("Location: menu.php?message=成功加入訂單及訂單細項和清除購物車");
    }
    

    mysqli_close($con);
?>