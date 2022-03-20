<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>台式查詢</title>
</head>
<body>
<?php
// 建立MySQL的資料庫連接
$link = mysqli_connect("acw2033ndw0at1t7.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "z8y4hkwuta4idw8j", "hht2nnf7ny55ajx6") 
        or die("無法開啟MySQL資料庫連接!<br/>");
mysqli_select_db($link, "gk4xqozmcqv07zee");  // 選擇gk4xqozmcqv07zeev資料庫
// 查詢台式
$sql = "SELECT date,kind,food,pay,place,dmoney,takemoney,people,inviteurl FROM delivery where kind='台式'";
// 送出查詢台式的SQL指令
if ( $result = mysqli_query($link, $sql) ) { 
   // 取得記錄數
   $total_records = mysqli_num_rows($result);
   echo "<center>台式</center><br/>"; 
   echo "<center>共 $total_records 團</center><br/>"; 
   echo "<center><table border=><tr>";
// 顯示欄位名稱
 //while ( $meta = mysqli_fetch_field($result) )

   //echo "<td>".$meta->name."</td>";
echo "<tr><td>開團日期</td><td>類型</td><td>店家名稱</td><td>付費方式</td><td>取貨地點</td><td>原外送費用</td><td>外送接棒費用</td><td>預計參與人數</td><td>入團連結</td></tr>"; 
echo "</tr>"; // 取得欄位數
$total_fields = mysqli_num_fields($result);
// 顯示每一筆記錄
while ($row = mysqli_fetch_row($result)) {
   echo "<tr>"; // 顯示每一筆記錄的欄位值
   for ( $i = 0; $i <= $total_fields-1; $i++ )
      echo "<td>" . $row[$i] . "</td>";
   echo "</tr>";
}
echo "</center></table>";
 
   mysqli_free_result($result); // 釋放佔用記憶體 
} 
mysqli_close($link);  // 關閉資料庫連接
?>
</body>
</html>

