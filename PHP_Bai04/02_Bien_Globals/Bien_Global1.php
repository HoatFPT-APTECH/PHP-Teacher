<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Biến Toàn cục - Biến cục bộ</title>
<?php
function Func1()
{
	//$x1 = 20;//x1 ở đây là biến cục bộ (Local) 
    global $x1;//khai báo x1 là biến toàn cục
	echo "<p>Func1: x1 = " . $x1 . "</p>";
	$x1 = 20;//thay đổi giá trị biến toàn cục
}
?>
</head>
<body>
<h2>Biến Toàn cục - Biến cục bộ</h2>
<?php
$x1 = 10;//biến toàn cục (Global)
Func1();//gọi hàm Func1 hiển thị biến x1 và gán giá trị mới=20
echo "<p>Sau gọi Func1: x1 = " . $x1 . "</p>";
?>
</body>
</html>