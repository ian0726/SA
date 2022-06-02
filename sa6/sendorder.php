<?php
    session_start();
    include("db.php");
    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
        $tablenum = $_POST['tablenum'];
        
        #update table
        $sql = "UPDATE seating SET occupied = 1 WHERE seat_id = '".$tablenum."'";
        if($rs = mysqli_query($con, $sql)){
            #echo "successfully updated table";
        }
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
        $sql = "SELECT date, rec_num FROM ordermain WHERE DATE(date) = DATE(now()) AND date = (SELECT MAX(date) from ordermain);";
        $rs = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($rs);
        if(mysqli_num_rows($rs) == 0){
            $rec_num = 1;
        }
        else{
            $rec_num = $row['rec_num'] + 1;
        }
        
        #create order
        $sql = "INSERT INTO ordermain (rec_num, total_price, `user_id`, complete, place, `date`) VALUES ('$rec_num', '$sum', '$user_id', '0', '$tablenum', '$now');";
        if($rs = mysqli_query($con, $sql)){
            #header("Location: menu.php?message=成功送出訂單");
        }

        #get order id
        $sql = "SELECT order_id FROM ordermain WHERE `user_id` = '".$user_id."' AND date = '".$now."'";
        $rs = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($rs);
        $order_id = $row['order_id'];
    

        #add from cart to order detail
        $sql = "SELECT * FROM cart WHERE `user_id` = '".$user_id."'";
        $rs = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($rs)){
            
            if($row['sauce'] != NULL){
                echo "yes sauce ";
                if($row['note'] == NULL){
                    $sql = "INSERT INTO orderdetail (item_id, order_id, item_name, sauce, side, amount) VALUES (".$row['item_id'].", ".$order_id.", '".$row['item_name']."', '".$row['sauce']."', '".$row['side']."', ".$row['amount'].");";
                }
                else{
                    $sql = "INSERT INTO orderdetail (item_id, order_id, item_name, sauce, side, note, amount) VALUES (".$row['item_id'].", ".$order_id.", '".$row['item_name']."', '".$row['sauce']."', '".$row['side']."', '".$row['note']."', ".$row['amount'].");";
                }
                
            }
            elseif($row['variant'] != NULL){
                echo "yes variant ";
                if($row['note'] == NULL){
                    $sql = "INSERT INTO orderdetail (item_id, order_id, item_name, variant, amount) VALUES (".$row['item_id'].", ".$order_id.", '".$row['item_name']."', '".$row['variant']."', ".$row['amount'].");";
                }
                else{
                    $sql = "INSERT INTO orderdetail (item_id, order_id, item_name, variant, note, amount) VALUES (".$row['item_id'].", ".$order_id.", '".$row['item_name']."', '".$row['variant']."', '".$row['note']."', ".$row['amount'].");";
                }
                
            }
            else{
                echo "nothing ";
                if($row['note'] == NULL){
                    $sql = "INSERT INTO orderdetail (item_id, order_id, item_name, amount) VALUES (".$row['item_id'].", ".$order_id.", '".$row['item_name']."', ".$row['amount'].");";
                }
                else{
                    $sql = "INSERT INTO orderdetail (item_id, order_id, item_name, note, amount) VALUES (".$row['item_id'].", ".$order_id.", '".$row['item_name']."', '".$row['note']."', ".$row['amount'].");";
                }
                
            }
            #$sql = "INSERT INTO orderdetail (item_id, order_id, item_name, sauce, side, variant, note, amount) VALUES ('".$row['item_id']."', '".$order_id."', '".$row['item_name']."', '".$row['sauce']."', '".$row['side']."', '".$row['variant']."', '".$row['note']."', '".$row['amount']."');";
            echo $sql;
            if(mysqli_query($con, $sql)){
                $_SESSION['type'] = "success";
                header("Location: menu.php?message=成功送出訂單");
            }
            else{
                echo "<--FAILED ";
            }
        }

        #clear cart
        $sql = "DELETE FROM cart WHERE `user_id` = '".$user_id."'";
        $rs = mysqli_query($con, $sql);
        if(mysqli_query($con, $sql)){
            #header("Location: menu.php?message=成功加入訂單及訂單細項和清除購物車");
        }
        session_start();
        $_SESSION['order_id'] = $order_id;
    }
    else{
        $_SESSION['type'] = "error";
        header("Location: menu.php?message=請登入");
        #echo "<script>{window.alert('請登入！'); location.href='menu.php'}</script>";
    }
    
    mysqli_close($con);
?>