<?php
    include("db.php");
    $id = $_POST['id'];
    $func = $_POST['func'];
    if($func == "confirm"){
        $sql = "UPDATE seating SET occupied = 0 WHERE seat_id = '".$id."'";
        if($rs = mysqli_query($con, $sql)){
            header("Location: seatcheck.php?message=成功更新狀態");
        }
    }
   

    mysqli_close($con);
?>