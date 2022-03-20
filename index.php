<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch11_3.php</title>
</head>
<body>
<?php
$begin = 12;
$end = 18;
for ($i = $begin; $i <= $end; $i += 3) {
?>
<p style="font-size:<?php echo $i;?>pt">
歡迎使用PHP網頁程式設計
<?php
print "</p>";
} ?>
</body>
</html>
