<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mảng sử dụng tên index (key) dạng chuỗi</title>
</head>

<body>
<h2> Mảng sử dụng index (key) dạng chuỗi</h2>
<?php
	$cart = array("SP01"=> 2, "SP02" => 1, "SP03" =>5);
	print_r($cart);
	
	//duyệt từng key truy cập của mảng trên
	$sanpham = array_keys($cart);//trả lại mảng chứa các key của mảng $cart
	echo "<p>Danh sách Keys: array_keys(\$cart)</p>";
	print_r($sanpham);
	echo "<p>Hiển thị Giỏ hàng 1</p>";
	for($i=0; $i<count($sanpham);$i++)//duyệt từng sản phẩm
	{
		$sp = $sanpham[$i];
		echo "<P>". $sp . ", SL: " . $cart[$sp] . "</p>";
	}
	//Sử dụng foreach($mang as $key => $value)
	echo "<p>Hiển thị Giỏ hàng 2 - foreach</p>";
	foreach($cart as $sp => $soluong)
	{
		echo "<P>". $sp . ", SL: " . $soluong . "</p>";
	}
?>
</body>
</html>


