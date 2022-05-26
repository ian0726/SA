<?php
    include("db.php");
    $queue_id = $_POST['queue_id'];

    #get update list
    $people = $_POST['people'];
   echo $queue_id.$people;

    #update oerderdetail
   
        if($people == 0){
            $sql = "DELETE FROM `queue` WHERE queue_id = ".$queue_id."";
            if($rs=mysqli_query($con, $sql)){
                #echo "succesfully updated";
                header("Location: queuecon.php?message=成功更新訂單");
            }
        }
        else{
            $sql = "UPDATE `queue` SET people=".$people." WHERE queue_id=".$queue_id."";
            if($rs = mysqli_query($con, $sql)){
                #echo "Updated successfully";
                header("Location: queuecon.php?message=成功更新訂單");
            }
        }
    

   
   
    
    mysqli_close($con);
?>