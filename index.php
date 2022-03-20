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
// 指定SQL查詢字串
$sql = "SELECT * FROM delivery";
// 送出查詢的SQL指令
if ( $result = mysqli_query($link, $sql) ) { 
   // 取得記錄數
   $total_records = mysqli_num_rows($result);
   echo "開團總數:共 $total_records 團<br/>"; 
   echo "<table border=1>";
   echo "<tr><td>欄位名稱</td><td>資料表</td>";
   echo "<td>最大長度</td><td>資料類型</td></tr>";
   // 顯示欄位資訊
   while ( $meta = mysqli_fetch_field($result) ) {
      echo "<tr><td>" . $meta->name . "</td>";
      echo "<td>" . $meta->table . "</td>";
      echo "<td>" . $meta->max_length . "</td>";   
      echo "<td>" . $meta->type . "</td></tr>";   
   }
   echo "</table>";   
   mysqli_free_result($result); // 釋放佔用記憶體 
} 
mysqli_close($link);  // 關閉資料庫連接
?>
</body>
</html>

