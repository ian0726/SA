
   
<?php
    include("db.php");
    $id = $_POST['id'];
    $func = $_POST['func'];
    if($func == "confirm"){
        $sql = "UPDATE seating SET occupied = 0 WHERE seat_id = '".$id."'";
        if($rs = mysqli_query($con, $sql)){
            $_SESSION['type'] = "success";
            header("Location: clearseat.php?message=成功清空座位");
        }
    }
   

    mysqli_close($con);
?>