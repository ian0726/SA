<?php
    session_start();
    include("db.php");

    $detail_id = $_POST['det_id'];  
    $feedback = $_POST['feedbacktext'];
    $score = $_POST['star'];
    if($feedback == ""){
        $sql = "UPDATE `orderdetail` SET `rating` = $score WHERE `det_id` = '$detail_id'";
    }
    else{
        $sql = "UPDATE `orderdetail` SET `rating` = $score, `feedback` = '$feedback' WHERE `det_id` = '$detail_id'";
    }
    

    if($rs = mysqli_query($con, $sql)){
        $_SESSION['type'] = "success";
        header("Location: historicalorder.php?message=成功送出評分");
    }
    else{
        $_SESSION['type'] = "error";
        header("Location: index.php?message=評分失敗");
    }
    mysqli_close($con);
?>
