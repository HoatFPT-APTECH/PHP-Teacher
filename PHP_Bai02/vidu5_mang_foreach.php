<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Trộn code HTML và  PHP</title>
</head>

<body>
<?php
	$mang = array("Vân Anh", "Huyền", "Quang");
	//for($i=0; $i< count($mang); $i++)
	$i=0;
	foreach($mang as $ten)
	{
		$i++;
?>
	<div style="color:red;width:300px;border:1px blue solid;
    	float:left; margin:5px; border-radius:10px">
    <h1 style="background:yellow"> phần tử thứ : <?=$i?> </h1>
    <h2 style="color:green;"> Hello : <?=$ten?> </h2>
	</div>
<?php
	}//đóng vòng for
?>	
</body>
</html>