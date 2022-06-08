<?php
session_start();
include("db.php");
$page = $_POST['page'];
$id = $_POST['id'];
$order_id = $_POST['order_id'];

$reply = $_POST['reply'];

foreach ($reply as $key => $value) {
    #echo $reply[$key];
    $sql = "UPDATE orderdetail SET reply ='" . $reply[$key] . "' WHERE det_id=" . $id[$key] . "";
    if ($rs = mysqli_query($con, $sql)) {
        #echo "reply updated successfully";
    } else {
        #echo "failed";
    }
}

if ($page == "finished") {
    header("Location: finished.php?message=成功更新訂單");
}

mysqli_close($con);
?>