<?php
    include("db.php");
    $page = $_POST['page'];
    $order_id = $_POST['order_id'];

    #get update list
    $id = $_POST['id'];
    $amount = $_POST['amount'];
    #$lst = array_combine($id, $amount);
    $note = $_POST['note'];

    #update orderdetail
    foreach($amount as $idx => $amount){
        if($amount == 0){
            $sql = "DELETE FROM orderdetail WHERE det_id = ".$id[$idx]."";
            if($rs=mysqli_query($con, $sql)){
                #echo "succesfully updated";
            }
        }
        else{
            $sql = "UPDATE orderdetail SET amount=".$amount.", note='".$note[$idx]."' WHERE det_id=".$id[$idx]."";
            if($rs = mysqli_query($con, $sql)){
                #echo "Updated successfully";
            }
            else{
                #echo "failed";
            }
        }
    }

    #update order total price
    $sql = "SELECT * FROM orderdetail WHERE order_id = ".$order_id."";
    if($rs = mysqli_query($con, $sql)){
        $sum = 0;
        while($row = mysqli_fetch_assoc($rs)){
            $sqltemp = "SELECT * FROM item WHERE item_id = ".$row['item_id']."";
            $rstemp = mysqli_query($con, $sqltemp);
            $rowtemp = mysqli_fetch_assoc($rstemp);
            $sum += $rowtemp['price']*$row['amount'];
        }
    }
   
    if($sum == 0){
        $sql = "DELETE FROM ordermain WHERE order_id = ".$order_id."";
        if($rs=mysqli_query($con, $sql)){
            #echo "succesfully updated";
        }
    }
    else{
        $sql = "UPDATE ordermain SET total_price=".$sum." WHERE order_id=".$order_id."";
        if($rs = mysqli_query($con, $sql)){
            #echo "Updated successfully";
        }
    }

    if($page == "unfinished"){
        header("Location: unfinished.php?message=成功更新訂單");
    }
    elseif($page == "finished"){
        header("Location: finished.php?message=成功更新訂單");
    }
    
    
    mysqli_close($con);
?>