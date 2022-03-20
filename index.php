<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>開團查詢</title>
</head>
<body>
<?php
// 建立MySQL的資料庫連接
$link = mysqli_connect("acw2033ndw0at1t7.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "z8y4hkwuta4idw8j", "hht2nnf7ny55ajx6") 
        or die("無法開啟MySQL資料庫連接!<br/>");
mysqli_select_db($link, "gk4xqozmcqv07zee");  // 選擇gk4xqozmcqv07zeev資料庫
// 查詢台式
$sql = "SELECT date,kind,food,pay,place,dmoney,takemoney,people,inviteurl FROM delivery where kind='台式'";
// 查詢小吃
$sqltwo = "SELECT date,kind,food,pay,place,dmoney,takemoney,people,inviteurl FROM delivery where kind='小吃'";
// 送出查詢台式的SQL指令
if ( $result = mysqli_query($link, $sql) ) { 
   // 取得記錄數
   $total_records = mysqli_num_rows($result);
   echo "項目類別:台式<br/>"; 
   echo "開團總數:共 $total_records 團<br/>"; 
   echo "<table border=><tr>";
// 顯示欄位名稱
while ( $meta = mysqli_fetch_field($result) )

   echo "<td>".$meta->name."</td>";
echo "</tr>"; // 取得欄位數
$total_fields = mysqli_num_fields($result);
// 顯示每一筆記錄
while ($row = mysqli_fetch_row($result)) {
   echo "<tr>"; // 顯示每一筆記錄的欄位值
   for ( $i = 0; $i <= $total_fields-1; $i++ )
      echo "<td>" . $row[$i] . "</td>";
   echo "</tr>";
}
echo "</table>";
        
// 送出查詢小吃的SQL指令
if ( $resulttwo = mysqli_query($link, $sqltwo) ) { 
   // 取得記錄數
   $total_recordstwo = mysqli_num_rows($resulttwo);
   echo "項目類別:小吃<br/>"; 
   echo "開團總數:共 $total_recordstwo 團<br/>"; 
   echo "<table border=><tr>";
// 顯示欄位名稱
while ( $metatwo = mysqli_fetch_field($resulttwo) )

   echo "<td>".$metatwo->name."</td>";
echo "</tr>"; // 取得欄位數
$total_fieldstwo = mysqli_num_fields($resulttwo);
// 顯示每一筆記錄
while ($rowtwo = mysqli_fetch_row($resulttwo)) {
   echo "<tr>"; // 顯示每一筆記錄的欄位值
   for ( $i = 0; $i <= $total_fieldstwo-1; $i++ )
      echo "<td>" . $rowtwo[$i] . "</td>";
   echo "</tr>";
}
echo "</table>";

   mysqli_free_result($result); // 釋放佔用記憶體 
   mysqli_free_result($resulttwo); // 釋放佔用記憶體
} 
mysqli_close($link);  // 關閉資料庫連接
?>
</body>
</html>

