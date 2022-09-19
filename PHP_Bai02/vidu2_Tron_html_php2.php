<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Trộn code HTML và  PHP</title>
</head>

<body>
<?php
	define ("Max",5);//khai báo Constant tên Max, giá trị là 5
	$n=9;
	$Hoten = "ABC";
	//for($i=1; $i<= $n; $i++)
	for($i=1; $i <= Max; $i++)
	{
?>
	<div style="color:red;width:300px;border:1px blue solid;
    	float:left; margin:5px; border-radius:10px">
    <h1 style="background:yellow"> Vòng lặp lần : <?=$i?> </h1>
    <h2 style="color:green;"> Hello : <?=$Hoten?> </h2>
	</div>
<?php
	}//đóng vòng for
?>	
</body>
</html>