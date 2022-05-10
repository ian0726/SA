
<?php
   session_start();

   $link=mysqli_connect("localhost","root","12345678","sa");
  
   

//                         
//   if(isset($_SESSION["account_name"])){
//           header("Location:index.php");
//       }
if(isset($_POST["user_id"]) && isset($_POST["password"])){
    $user_id=$_POST["user_id"];
    $password=$_POST["password"];
    $sql="SELECT * from account where user_id='$user_id'";
    $rs=mysqli_query($link,$sql);

if($row = mysqli_fetch_array($rs)){
    if($row["password"] == $_POST["password"]){
        $_SESSION["user_id"]=$row["user_id"];
        $_SESSION["name"]=$row["name"];
        $_SESSION["phone"]=$row["phone"];
        $_SESSION["password"]=$row["password"];
        header("location.href='方禾食呂首頁.php'");
    }

       else{
        echo "<script>{window.alert('密碼錯誤！請再試一次'); location.href='login.php'}</script>";
   }
   }
   else{
    echo "<script>{window.alert('此帳號尚未註冊!請先註冊帳號');location.href='regacc.php'}</script>";
   }
}
?>