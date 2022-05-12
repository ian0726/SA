<?php
    session_start();
    include("db.php");
    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
        $amount=$_POST['amount'];
        $sauce=$_POST['sauce'];
        $side=$_POST['side'];
        $id=$_POST['id'];
        $temperature=$_POST['temperature'];
        $note=$_POST['note'];
        $name=$_POST['iname'];
        $price=$_POST['price'];
        $total = $price * $amount;
        
        if(isset($sauce) && isset($side)){
            $full = $name." ".$side." ".$sauce;
        }
        elseif(isset($temperature)){
            $full = $name." ".$temperature;
        }
        else{
            $full = $name;
        }

        #check exisiting user
        $sql = "SELECT * FROM cart WHERE `user_id` = '".$user_id."'";
        $rs = mysqli_query($con, $sql);
        #if not exist
        if(mysqli_num_rows($rs) == 0){
            $sql = "INSERT INTO cart (`user_id`, item_id, itemfullname, amount, note, totalp) VALUES ('$user_id', '$id', '$full', '$amount', '$note', '$total');";
            if(mysqli_query($con, $sql)){
                header("Location: menu.php?message=成功加入購物車");
            }
        }
        #if exist
        else{
            $same = 0;
            while($row = mysqli_fetch_assoc($rs)){
                #check if same full
                if($row['itemfullname'] == $full && $row['amount'] != $amount){
                    $same = 1;
                    $sql = "UPDATE cart SET amount = $amount, totalp = $total
                    WHERE `user_id` = '".$user_id."' AND itemfullname = '".$full."';";
                    if(mysqli_query($con, $sql)){
                        header("Location: menu.php?message=成功更新購物車");
                    }
                    
                }
                elseif($row['itemfullname'] == $full && $row['amount'] == $amount){
                    $same = 1;
                    header("Location: menu.php?message=餐點已存在於購物車中");
                }
            }
            if($same == 0){
                $sql = "INSERT INTO cart (`user_id`, item_id, itemfullname, amount, note, totalp) VALUES ('$user_id', '$id', '$full', '$amount', '$note', '$total');";
                if(mysqli_query($con, $sql)){
                    header("Location: menu.php?message=成功加入購物車");
                }
            }
            
        }
    }
    else{
        echo "<script>{window.alert('請登入！'); location.href='menu.php'}</script>";
    }


    mysqli_close($con);
    
    
?>