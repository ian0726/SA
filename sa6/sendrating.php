<?php
    session_start();
    include("db.php");

    $detail_id = $_POST['det_id'];  
    $feedback = $_POST['feedbacktext'];
    $score = $_POST['star'];
    $sql = "UPDATE `orderdetail` SET `rating` = $score, `feedback` = '$feedback' WHERE `det_id` = '$detail_id'";

    if($rs = mysqli_query($con, $sql)){
        header("Location: historicalorder.php?message=成功送出");
    }
    else{
        header("Location: index.php?message=失敗");
    }
    mysqli_close($con);
?>
