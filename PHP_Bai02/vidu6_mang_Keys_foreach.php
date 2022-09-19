<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Trộn code HTML và  PHP</title>
</head>

<body>
<h1 align="center"> Giỏ hàng</h1>
<?php
	$Cart = array("SP01"=>2, "SP02"=>5, "SP03"=>1);
	foreach($Cart as $sp => $soluong)
	{
?>
	<div style="color:red;width:300px;border:1px blue solid;
    	float:left; margin:5px; border-radius:10px">
    <h1 style="background:yellow"> Mã SP : <?=$sp?> </h1>
    <h2 style="color:green;"> Số lượng : <?=$soluong?> </h2>
	</div>
<?php
	}//đóng vòng for
?>	
</body>
</html>