<?php
    include("db.php");
    $user_id = "test";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>購物車</title>
    <style>
        body{
            background-color: rgba(0, 0, 0,.2);
        }
        .item_header{
            display: flex;
            width: 1000px;
            margin: 0 auto;
            height: 30px;
            background-color: #fff;
            border-radius: 3px;
            padding-left: 10px;
        }
        .item_header div{
            width: 200px;
            color: #888;
            line-height: 30px;
        }
        .item_header .item_detail{
  
        }
        .item_body{
            margin-top: 20px;
            height: 100px;
            align-items: center;    
        }
        .item_detail img{
   
            height: 80px;
            border-radius: 3px;
            /* margin-top: 10px; */
            float: left;
        }
        .item_detail .name{
            margin-left: 100px;
            margin-top: 20px;
        }
        .title{
            text-align:center;
            font-size:30px;
        }
    </style>
</head>
<body>
<div class="cart">
    <div class = "title">購物車</div>
    <div id="app">
        
        <div class="container">
            <div class="item_header">
                <div class="name">商品及細項</div>
                <div class="note">備註</div>
                <div class="count">數量</div> 
                <div class="amount">總計</div>
                <div class="operate">操作</div>
            </div>
            <?php
                $sql = "SELECT * FROM cart WHERE user_id = '".$user_id."'";
                $rs = mysqli_query($con, $sql);
                while($row = mysqli_fetch_assoc($rs)){
                    echo "
                    <div class='item_header item_body'>           
                            <div class='name'><span></span> <td>".$row['itemfullname']."<br /></div>
                            <div class='note'><span></span> <td>".$row['note']."<br /></div>
                            <div class='count'>".$row['amount']."</div> 
                            <div class='amount'><strong>TOTAL: $".$row['totalp']."</strong></div>
                            <div class='operate'>
                                <form action='cartdel.php' method = 'post'>
                                    <input type='hidden' name = 'user_id' value = '".$user_id."'>
                                    <input type='hidden' name = 'full' value='".$row['itemfullname']."'>
                                    <input type='submit' value = '刪除'>
                                </form>
                            </div>
                    </div>     
                    ";
                }

                mysqli_close($con);
            ?>
            
        </div>
    </div>
</body>

</html>