<!-- gk4xqozmcqv07zee_open.inc -->
<?php
// 建立MySQL的資料庫連接
$link = mysqli_connect("acw2033ndw0at1t7.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "z8y4hkwuta4idw8j", "hht2nnf7ny55ajx6") 
        or die("無法開啟MySQL資料庫連接!<br/>");
mysqli_select_db($link, "gk4xqozmcqv07zee");  // 選擇gk4xqozmcqv07zeev資料庫
// 設定SQL查詢字串
$sql = "SELECT * FROM delivery";
//送出UTF8編碼的MySQL指令
mysqli_query($link, 'SET NAMES utf8'); 
?>