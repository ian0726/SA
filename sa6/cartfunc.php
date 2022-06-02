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
            $mode = 1;
            if($note != ''){
                $sql = "INSERT INTO cart (`user_id`, item_id, item_name, sauce, side, amount, note, totalp) VALUES ('$user_id', '$id', '$name', '$sauce', '$side', '$amount', '$note', '$total');";
            }
            else{
                $sql = "INSERT INTO cart (`user_id`, item_id, item_name, sauce, side, amount, totalp) VALUES ('$user_id', '$id', '$name', '$sauce', '$side', '$amount', '$total');";
            }
        }
        elseif(isset($temperature)){
            $mode = 2;
            if($note != ''){
                $sql = "INSERT INTO cart (`user_id`, item_id, item_name, variant, amount, note, totalp) VALUES ('$user_id', '$id', '$name', '$temperature', '$amount', '$note', '$total');";
            }
            else{
                $sql = "INSERT INTO cart (`user_id`, item_id, item_name, variant, amount, totalp) VALUES ('$user_id', '$id', '$name', '$temperature', '$amount', '$total');";
            }
        }
        else{
            $mode = 3;
            if($note != ''){
                $sql = "INSERT INTO cart (`user_id`, item_id, item_name, amount, note, totalp) VALUES ('$user_id', '$id', '$name', '$amount', '$note', '$total');";

            }
            else{
                $sql = "INSERT INTO cart (`user_id`, item_id, item_name, amount, totalp) VALUES ('$user_id', '$id', '$name', '$amount', '$total');";
            }
        }

        #check exisiting user
        $sqltemp = "SELECT * FROM cart WHERE `user_id` = '".$user_id."'";
        $rs = mysqli_query($con, $sqltemp);
        #if not exist
        if(mysqli_num_rows($rs) == 0){
            #$sql = "INSERT INTO cart (`user_id`, item_id, itemfullname, amount, note, totalp) VALUES ('$user_id', '$id', '$full', '$amount', '$note', '$total');";
            if(mysqli_query($con, $sql)){
                $_SESSION['type'] = "success";
                header("Location: menu.php?message=成功加入購物車");
            }
        }
        #if exist
        else{
            $same = 0;
            while($row = mysqli_fetch_assoc($rs)){
                #check if same full
                if($mode == 1){
                    echo "mode 1 ";
                    if($row['item_name'] == $name && $row['sauce'] == $sauce && $row['side'] == $side && $row['amount'] != $amount){
                    #if($row['itemfullname'] == $full && $row['amount'] != $amount){
                        $same = 1;
                        #$sql = "UPDATE cart SET amount = $amount, totalp = $total WHERE `user_id` = '".$user_id."' AND itemfullname = '".$full."';";
                        $sqltemp = "UPDATE cart SET amount = $amount, totalp = $total WHERE `user_id` = '".$user_id."' AND item_name = '".$name."' AND sauce = '".$sauce."' AND side = '".$side."';";
                        if(mysqli_query($con, $sqltemp)){
                            $_SESSION['type'] = "success";
                            header("Location: menu.php?message=成功更新購物車");
                        }
                        else{
                            echo "1 ";
                        }
                        
                    }
                    #elseif($row['itemfullname'] == $full && $row['amount'] == $amount){
                    elseif($row['item_name'] == $name && $row['sauce'] == $sauce && $row['side'] == $side && $row['amount'] == $amount){
                        $same = 1;
                        $_SESSION['type'] = "info";
                        header("Location: menu.php?message=餐點已存在於購物車中");
                    }
                    else{
                        echo "2 ";
                    }
                }
                elseif($mode == 2){
                    echo "mode 2 ";
                    if($row['item_name'] == $name && $row['variant'] == $variant && $row['amount'] != $amount){
                    #if($row['itemfullname'] == $full && $row['amount'] != $amount){
                        $same = 1;
                        #$sql = "UPDATE cart SET amount = $amount, totalp = $total WHERE `user_id` = '".$user_id."' AND itemfullname = '".$full."';";
                        $sqltemp = "UPDATE cart SET amount = $amount, totalp = $total WHERE `user_id` = '".$user_id."' AND item_name = '".$name."' AND variant = '".$variant."';";
                        if(mysqli_query($con, $sqltemp)){
                            $_SESSION['type'] = "success";
                            header("Location: menu.php?message=成功更新購物車");
                        }
                        else{
                            echo "1 ";
                        }
                        
                    }
                    #elseif($row['itemfullname'] == $full && $row['amount'] == $amount){
                    elseif($row['item_name'] == $name && $row['variant'] == $variant && $row['amount'] == $amount){
                        $same = 1;
                        $_SESSION['type'] = "info";
                        header("Location: menu.php?message=餐點已存在於購物車中");
                    }
                    else{
                        echo "2 ";
                    }
                }
                elseif($mode == 3){
                    echo "mode 3 ";
                    if($row['item_name'] == $name && $row['amount'] != $amount){
                    #if($row['itemfullname'] == $full && $row['amount'] != $amount){
                        $same = 1;
                        #$sql = "UPDATE cart SET amount = $amount, totalp = $total WHERE `user_id` = '".$user_id."' AND itemfullname = '".$full."';";
                        $sqltemp = "UPDATE cart SET amount = $amount, totalp = $total WHERE `user_id` = '".$user_id."' AND item_name = '".$name."';";
                        if(mysqli_query($con, $sqltemp)){
                            $_SESSION['type'] = "success";
                            header("Location: menu.php?message=成功更新購物車");
                        }
                        else{
                            echo "1 ";
                        }
                        
                    }
                    #elseif($row['itemfullname'] == $full && $row['amount'] == $amount){
                    elseif($row['item_name'] == $name && $row['amount'] == $amount){
                        $same = 1;
                        $_SESSION['type'] = "info";
                        header("Location: menu.php?message=餐點已存在於購物車中");
                    }
                    else{
                        echo "2 ";
                    }
                }
            }
            if($same == 0){
                echo "not same ";
                #$sql = "INSERT INTO cart (`user_id`, item_id, itemfullname, amount, note, totalp) VALUES ('$user_id', '$id', '$full', '$amount', '$note', '$total');";
                if(mysqli_query($con, $sql)){
                    $_SESSION['type'] = "success";
                    header("Location: menu.php?message=成功加入購物車");
                }
                else{
                    echo "3 ";
                }
            }
            
        }
    }
    else{
        $_SESSION['type'] = "error";
        header("Location: menu.php?message=請登入");
        #echo "<script>{window.alert('請登入！'); location.href='menu.php'}</script>";
    }


    mysqli_close($con);
    
    
?>