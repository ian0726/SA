<?php
    session_start();
    include("db.php");
    $user_id = "fff"
    $sql = "SELECT * FROM `queue` WHERE user_id = ".$user_id."";
    $rs = mysqli_fetch_assoc($con, $sql);
?>