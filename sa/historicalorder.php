<?php
session_start();
$link=mysqli_connect("localhost", "root", "12345678", "sa");
$sql="SELECT * FROM order";
$sql2="SELECT * FROM orderdetail";

$rs1=mysqli_query($link,$sql);
$rs2=mysqli_query($link,$sql2);

$ordernums=mysqli_num_rows($rs1);
$orderdetailnums=mysqli_num_rows($rs2);

?>
<!DOCTYPE html>
<br>

<center><h1>歷史訂單</h1></center>
<div class="table-outbox">
 <?php
echo" <table>
    <thead>
      <tr>
        <th>餐點及細項</th>
        <th>數量</th>
        <th>總金額</th>
        <th>狀態</th>
        <th>日期</th>
        <th>訂單流水編號</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>";
    while($row1=mysqli_fetch_row($rs1) && $row2=mysqli_fetch_row($rs2)){
        echo "<tr><td>$row2[2]</td><td>$row2[5]</td><td>$row1[2]</td><td>$row1[4]</td><td>$row1[5]</td><td>$row1[0]</td></tr>";
    }
    echo"</tbody>
  </table>
</div>"
?>
<style>
.table-outbox {
  margin: 50px; /* 添加外距 */
  box-shadow: 0px 35px 50px rgba(27, 31, 49, 0.1); /* 添加表格陰影 */
}

/*  table
------------------------------------- */
table {
  border-collapse: collapse; /* 表格邊框合併 */
  width: 100%; /* 寬度 100% */
  background-color: white; /* 背景白色 */
}

table thead th {
  color: #ffffff; /* 表頭文字白色 */
  background: #2f4961; /* 表頭背景白色 */
}

table td,
table th {
  text-align: center; /* 文字置中顯示 */
  padding: 10px; /* 添加內距 */
}

table td {
  border-right: 1px solid #f1f1f1; /* 表格 td 右邊框顏色 */
}

table tr:nth-child(even) {
  background: #f8f8f8; /* 表格偶數 tr 灰色背景 */
}
</style>
</html>