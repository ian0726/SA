<?php
    session_start();
    include("db.php");
    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
        $order_id = $_POST['order_id'];
        $sql = "SELECT * FROM orderdetail WHERE order_id = ".$order_id."";
        if($rs = mysqli_query($con, $sql)){
            while($row = mysqli_fetch_assoc($rs)){
                $item_id = $row['item_id'];
                $name = $row['item_name'];
                $sauce = $row['sauce'];
                $side = $row['side'];
                $variant = $row['variant'];
                $note = $row['note'];
                $amount = $row['amount'];
                $sqltemp = "SELECT * FROM item WHERE item_id = ".$item_id."";
                if($rstemp = mysqli_query($con, $sqltemp)){
                    $rowtemp = mysqli_fetch_assoc($rstemp);
                    $price = $rowtemp['price'];
                    $total = $price * $amount;

                    #check exisiting user
                    $sqlcheck = "SELECT * FROM cart WHERE `user_id` = '".$user_id."'";
                    $rscheck = mysqli_query($con, $sqlcheck);
                    #if not exist
                    if(mysqli_num_rows($rscheck) == 0){
                        if(isset($sauce)){
                            $sqlinsert = "INSERT INTO cart (`user_id`, item_id, item_name, sauce, side, amount, note, totalp) VALUES ('$user_id', '$item_id', '$name', '$sauce', '$side', '$amount', '$note', '$total');";
                        }
                        elseif(isset($variant)){
                            $sqlinsert = "INSERT INTO cart (`user_id`, item_id, item_name, variant, amount, note, totalp) VALUES ('$user_id', '$item_id', '$name', '$variant', '$amount', '$note', '$total');";
                        }
                        else{
                            $sqlinsert = "INSERT INTO cart (`user_id`, item_id, item_name, amount, note, totalp) VALUES ('$user_id', '$item_id', '$name', '$amount', '$note', '$total');";
                        }
                        #$sqlinsert = "INSERT INTO cart (`user_id`, item_id, itemfullname, amount, note, totalp) VALUES ('$user_id', '$item_id', '$full', '$amount', '$note', '$total');";
                        if(mysqli_query($con, $sqlinsert)){
                            echo "user not in cart";
                        }
                    }
                    #if exist
                    else{
                        $same = 0;
                        while($rowcheck = mysqli_fetch_assoc($rscheck)){
                            #check if same full
                            if($rowcheck['item_name'] == $name && $rowcheck['sauce'] == $sauce &&$rowcheck['amount'] != $amount){
                                $same = 1;
                                $sqlupdate = "UPDATE cart SET amount = $amount, totalp = $total
                                WHERE `user_id` = '".$user_id."' AND item_name = '".$name."' AND sauce= '".$sauce."';";
                                if(mysqli_query($con, $sqlupdate)){
                                   
                                }
                                
                            }
                            elseif($rowcheck['item_name'] == $name && $rowcheck['variant'] == $variant &&$rowcheck['amount'] != $amount){
                                $same = 1;
                                $sqlupdate = "UPDATE cart SET amount = $amount, totalp = $total
                                WHERE `user_id` = '".$user_id."' AND item_name = '".$name."' AND variant= '".$variant."';";
                                if(mysqli_query($con, $sqlupdate)){
                                   
                                }
                                
                            }
                            elseif($rowcheck['item_name'] == $name && $rowcheck['amount'] == $amount){
                                $same = 1;
                                
                            }
                        }
                        if($same == 0){
                            if(isset($sauce)){
                                $sqlinsert = "INSERT INTO cart (`user_id`, item_id, item_name, sauce, side, amount, note, totalp) VALUES ('$user_id', '$item_id', '$name', '$sauce', '$side', '$amount', '$note', '$total');";
                            }
                            elseif(isset($variant)){
                                $sqlinsert = "INSERT INTO cart (`user_id`, item_id, item_name, variant, amount, note, totalp) VALUES ('$user_id', '$item_id', '$name', '$variant', '$amount', '$note', '$total');";
                            }
                            else{
                                $sqlinsert = "INSERT INTO cart (`user_id`, item_id, item_name, amount, note, totalp) VALUES ('$user_id', '$item_id', '$name', '$amount', '$note', '$total');";
                            }
                            if(mysqli_query($con, $sqlinsert)){
                               
                            }
                        }
                        
                    }

                }
            }
            $_SESSION['type'] = "success";
            header("Location: cart.php?message=成功更新購物車");
        }

        

        
    }
    else{
        $_SESSION['type'] = "error";
        header("Location: menu.php?message=請登入");
        #echo "<script>{window.alert('請登入！'); location.href='menu.php'}</script>";
    }


    mysqli_close($con);
    
    
?>