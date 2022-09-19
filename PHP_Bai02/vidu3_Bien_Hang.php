<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Biến và Hằng</title>
</head>

<body>
<h1>Biến và Hằng</h1>
<?php
define("Max",5);
define("Monhoc", "PHP");
define("host","http://localhost");
$a = 10;//a là kiểu số nguyên
echo "<p> a: " . gettype($a) . "</p>";
$b = 10.5;
echo "<p> b: " . gettype($b) . "</p>";
$s = "PHP";
echo "<p> s: " . gettype($s) . "</p>";
$ketqua = true;
echo "<p> ketqua: " . gettype($ketqua) . "</p>";
//Kiểm tra biến được được khai báo?
if(isset($a)==true)
	echo "<p> biến a đã được khai báo</p>";
else
	echo "<p> biến a chưa tồn tại</p>";

if(isset($c)==true)
	echo "<p> biến c đã được khai báo</p>";
else
	echo "<p> biến c chưa tồn tại</p>";	
//sử dụng hằng
echo "<p> vòng lặp từ 1 đến " . Max . "</p>";
for($i=1; $i<=Max; $i++)
{
	echo "<p> lần lập thứ $i, môn học: " . Monhoc . "</p>";
}
?>
<h1> Giá trị của Hằng Max: <?=Max?> </h1>
<a href="<?=host?>/D13CNPM1/PHP_Ngay02/Vonglap.php"> vòng lặp</a>
</body>
</html>