<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Làm quen PHP</title>
</head>

<body>
<h1 style="text-align: center; color: #090;">Làm quen PHP
</h1>
<?php
echo "<h2>Xin chào bạn đến với PHP</h2>\n";
$Hoten = "D13CNPM5";
echo "<h3> Hello: " . $Hoten . "</h3>\n";//lệnh . để cộng chuỗi
echo "<h3> Hello: $Hoten </h3>\n";//cho phép đặt thẳng tên biến vào trong chuỗi
?>
<h3> Hello: <?=$Hoten?></h3>
</body>
</html>