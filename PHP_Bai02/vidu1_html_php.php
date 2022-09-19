<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Trộn code HTML và  PHP</title>
</head>

<body>
<?php
	$n=5;
	$Hoten = "ABC";
	for($i=1; $i<=$n; $i++)
	{
	echo "<div style=\"color:red;width:300px;border:1px blue solid;\">";
    echo "<h1 style=\"background:yellow\"> Vòng lặp lần : $i </h1>";
    echo '<h2 style="color:green;"> Hello :' . $Hoten . '</h2>';
	echo '</div>';
	}
?>
</body>
</html>