<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kiểm tra biến</title>
</head>

<body>
<?php
if(isset($_REQUEST["hoten"])==true)
{
	$hoten = $_REQUEST["hoten"];
?>	
	<h3> Hello: <?=$hoten?> </h3>

<?php
}
else
{
?>
	<p>mời nhập biến họ tên trên thanh địa chỉ</p>
	<a href='?hoten=abc'> Thử lại</a>
<?php
}//đóng else
?>    
</body>
</html>