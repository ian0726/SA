<?php
    include("db.php");
    $item_id = $_POST['item_id'];

    #get update list
    $amount = $_POST['amount'];
   echo $item_id.$amount;

    #update oerderdetail
   
        if($amount == 0){
            $sql = "DELETE FROM `cart` WHERE item_id = ".$item_id."";
            if($rs=mysqli_query($con, $sql)){
                #echo "succesfully updated";
                header("Location: cart.php?message=成功更新購物車");
            }
        }
        else{
            $sql = "SELECT price FROM item WHERE `item_id` = '".$item_id."'";
        $rs = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($rs);
        $price = $row['price'];
        $totalp = $price * $amount;
            $sql = "UPDATE `cart` SET amount=".$amount.",totalp=".$totalp." WHERE item_id=".$item_id."";
        
            if($rs = mysqli_query($con, $sql)){
                #echo "Updated successfully";
                header("Location: cart.php?message=成功更新購物車");
            }
        }
    

   
   
    
    mysqli_close($con);
?>