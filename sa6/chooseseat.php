
   
<?php
    session_start();
    include("db.php");
    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
        $tablenum = $_POST['tablenum'];
        $tablenum2 = $_POST['tablenum2'];
        $tablenum3 = $_POST['tablenum3'];
        $tablenum4 = $_POST['tablenum4'];
        
        $sql = "SELECT * FROM queue, seating WHERE seat_id = '$tablenum' AND user_id = '" . $user_id . "'";
        $rs = mysqli_query($con, $sql);   
        while($row = mysqli_fetch_assoc($rs)){
        if($row['occupied'] == 0){
        $sqldel = "DELETE FROM queue WHERE user_id = '$user_id'";
        $rsdel = mysqli_query($con, $sqldel);
        $sqlupdate = "UPDATE seating SET occupied = 1 WHERE seat_id = '".$tablenum."'";
        $rsupdate = mysqli_query($con, $sqlupdate);
        $sqlupdate2 = "UPDATE seating SET occupied = 1 WHERE seat_id = '".$tablenum2."'";
        $rsupdate2 = mysqli_query($con, $sqlupdate2);
        $sqlupdate3 = "UPDATE seating SET occupied = 1 WHERE seat_id = '".$tablenum3."'";
        $rsupdate3 = mysqli_query($con, $sqlupdate3);
        $sqlupdate4 = "UPDATE seating SET occupied = 1 WHERE seat_id = '".$tablenum4."'";
        $rsupdate4 = mysqli_query($con, $sqlupdate4);
        $_SESSION['type'] = "success";
        header("Location: seatcheck.php?message=成功選擇，請盡速入座");
        }
        else{
            $_SESSION['type'] = "error";
            header("Location: seatcheck.php?message=錯誤");
        }
        }
    }
    mysqli_close($con);
?>