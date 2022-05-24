<?php
    include("db.php");
    $queue_id = $_POST['queue_id'];

    #get update list
    $id = $_POST['id'];
    $amount = $_POST['people'];
    $lst = array_combine($id, $amount);

    #update orderdetail
    foreach($lst as $id => $amount){
        if($amount == 0){
            $sql = "DELETE FROM 'queue' WHERE queue_id = ".$id."";
            if($rs=mysqli_query($con, $sql)){
                #echo "succesfully updated";
            }
        }
        else{
            $sql = "UPDATE 'queue' SET amount=".$amount." WHERE queue_id=".$id."";
            if($rs = mysqli_query($con, $sql)){
                #echo "Updated successfully";
            }
        }
    }

    #update order total price
    $sql = "SELECT * FROM 'queue' WHERE queue_id = ".$queue_id."";
    if($rs = mysqli_query($con, $sql)){
        $sum = 0;
        while($row = mysqli_fetch_assoc($rs)){
            $sqltemp = "SELECT * FROM 'queue' WHERE queue_id = ".$row['queue_id']."";
            $rstemp = mysqli_query($con, $sqltemp);
            $rowtemp = mysqli_fetch_assoc($rstemp);
            $sum =$row['amount'];
        }
    }
   
    if($sum == 0){
        $sql = "DELETE FROM 'queue' WHERE queue_id = ".$queue_id."";
        if($rs=mysqli_query($con, $sql)){
            #echo "succesfully updated";
            header("Location: queuecon.php?message=成功更新訂單");
        }
    }
    else{
        $sql = "UPDATE 'queue'  WHERE queue_id=".$queue_id."";
        if($rs = mysqli_query($con, $sql)){
            #echo "Updated successfully";
            header("Location: queuecon.php?message=成功更新訂單");
        }
    }
    
    mysqli_close($con);
?>