<?php
    session_start();
    include("db.php");
    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
        $item_id = $_POST['item_id'];  
        $sql = "SELECT * FROM orderdetail WHERE item_id = ".$item_id."";
        if($rs = mysqli_query($con, $sql)){
            while($row = mysqli_fetch_assoc($rs)){
                $item_id = $row['item_id'];
                $full = $row['itemfullname'];
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
                        $sqlinsert = "INSERT INTO cart (`user_id`, item_id, itemfullname, amount, note, totalp) VALUES ('$user_id', '$item_id', '$full', '$amount', '$note', '$total');";
                        if(mysqli_query($con, $sqlinsert)){
                            echo "user not in cart";
                        }
                    }
                    #if exist
                    else{
                        $same = 0;
                        while($rowcheck = mysqli_fetch_assoc($rscheck)){
                            #check if same full
                            if($rowcheck['itemfullname'] == $full && $rowcheck['amount'] != $amount){
                                $same = 1;
                                $sqlupdate = "UPDATE cart SET amount = $amount, totalp = $total
                                WHERE `user_id` = '".$user_id."' AND itemfullname = '".$full."';";
                                if(mysqli_query($con, $sqlupdate)){
                                    
                                }
                                
                            }
                            elseif($rowcheck['itemfullname'] == $full && $rowcheck['amount'] == $amount){
                                $same = 1;
                                
                            }
                        }
                        if($same == 0){
                            $sqlinsert = "INSERT INTO cart (`user_id`, item_id, itemfullname, amount, note, totalp) VALUES ('$user_id', '$item_id', '$full', '$amount', '$note', '$total');";
                            if(mysqli_query($con, $sqlinsert)){
                                
                            }
                        }
                        
                    }

                }
            }
            header("Location: cart.php?message=成功更新購物車");
        }

        

        
    }
    else{
        echo "<script>{window.alert('請登入！'); location.href='menu.php'}</script>";
    }
    mysqli_close($con);
    
?>