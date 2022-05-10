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
            background-color: rgba(241, 242, 243);
        }
        .item_header{
            display: flex;
            width: 1000px;
            margin: 0 auto;
            height: 30px;
            background-color: #222831;
            border-radius: 3px;
            padding-left: 10px;
            box-shadow:1px 2px 2px 1px;
        }
        .item_header div{
            width: 200px;
            color: #2e2e2e;
            line-height: 30px;
        }
        .item_header .item_detail{
  
        }
        .item_body{
            margin-top: 20px;
            height: 100px;
            align-items: center; 
            background-color: #fff;   
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
        .btn-orderagain{
            width:125px;
            height:50px;
            background-color:#ffbe33;
            display: white;
            text-align: center;
            cursor: pointer;
            line-height: 20px;
            position: relative;
            transition: all .3s linear;
        }
        .btn-orderagain > p{
            position: relative;
            z-index: 1;
        }
        .btn-orderagain::before{
            content: "";
            width: 0%;
            height: 100%;
            display: block;
            background-color: black;
            position: absolute;
            top: 0;
            right: 0;
            transition: all .3s ease;
        }
        .btn-orderagain:hover{
            color: #fff;
        }
        .btn-orderagain:hover::before{
            width: 100%;
        }
        .btn-finish{
            background-color:#222831;
            color:white;width:125px;
            height:50px;
            text-align: center;
            cursor: pointer;
            line-height: 20px;
            color: white;
            position: relative;
            transition: all .3s linear;
        }
        .btn-finish > p{
            position: relative;
            z-index: 1;
        }
        .btn-finish::before{
            content: "";
            width: 0%;
            height: 100%;
            display: block;
            background-color: #ffbe33;
            position: absolute;
            top: 0;
            left: 0;
            transition: all .3s ease;
        }
        .btn-finish:hover{
            color: #fff;
        }
        .btn-finish:hover::before{
            width: 100%;
        }
        .chooseatnum{
            margin-bottom:10px;
            font-size:20px;
        }
        .choosebtn{
            margin-bottom:10px;
            font-size:20px;
        }
    </style>
</head>
<body>
<div class="cart">
    <div class = "title" style="margin-bottom: 20px">購物車</div>
    <div id="app">
        <div class="container">
            <div class="item_header">
                <div class="name" style="color:white">商品及細項</div>
                <div class="note" style="color:white">備註</div>
                <div class="count" style="color:white">數量</div> 
                <div class="amount" style="color:white">總計</div>
                <div class="operate" style="color:white">操作</div>
            </div>
            <?php
                $sum = 0;
                $sql = "SELECT * FROM cart WHERE user_id = '".$user_id."'";
                $rs = mysqli_query($con, $sql);
                while($row = mysqli_fetch_assoc($rs)){
                    $sum += $row['totalp'];
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
    <br>
    <form action="sendorder.php" method="post">
    
    <center>
    <div>
    <h5 class="chooseatnum">桌號(必選)</h5>
        <div class='form-check-table overflow-auto'>
            <select class="choosebtn" name='tablenum' required>
            <option value='' hidden selected disabled>請選擇桌號</option>
            <option value='外帶'>外帶</option>
            <option value='單人1桌'>單人1桌</option>
            <option value='單人2桌'>單人2桌</option>
            <option value='單人3桌'>單人3桌</option>
            <option value='單人4桌'>單人4桌</option>
            <option value='單人5桌'>單人5桌</option>
            <option value='單人6桌'>單人6桌</option>
            <option value='單人7桌'>單人7桌</option>
            <option value='單人8桌'>單人8桌</option>
            <option value='單人9桌'>單人9桌</option>
            <option value='單人10桌'>單人10桌</option>
            <option value='單人11桌'>單人11桌</option>
            <option value='單人12桌'>單人12桌</option>
            <option value='雙人13桌'>雙人13桌</option>
            <option value='雙人14桌'>雙人14桌</option>
            <option value='雙人15桌'>雙人15桌</option>
            <option value='雙人16桌'>雙人16桌</option>
            <option value='雙人17桌'>雙人17桌</option>
            <option value='雙人18桌'>雙人18桌</option>
            <option value='雙人19桌'>雙人19桌</option>
            <option value='雙人20桌'>雙人20桌</option>
            <option value='雙人21桌'>雙人21桌</option>
            <option value='雙人22桌'>雙人22桌</option>
            <option value='雙人23桌'>雙人23桌</option>
            <option value='雙人24桌'>雙人24桌</option>
            <option value='沙發25桌'>沙發25桌</option>
            <option value='沙發26桌'>沙發26桌</option>
            </select>
        </div>
    </div>
    <div>
        <strong>小計：$<?php echo $sum?></strong>
    </div>
    <br>
    <div>
        <a href="menu.php" ><button type="button" class="btn-orderagain"><p>繼續加點</p></button></a>
        <input type="submit" class="btn-finish" value="完成訂單">
    </div>
    </center>
    </form>

</body>

</html>