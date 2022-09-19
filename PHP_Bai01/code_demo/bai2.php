<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kết hợp HTML, CSS, JavaScript, PHP</title>
<style type="text/css">
h1 {color:red}
.c1 {width:100px; height:50px; border:1px red solid;
	float:left; margin:5px;}
</style>
</head>

<body>
<h1> KẾT HỢP HTML, CSS, JS, PHP</h1>
<?php
for($i=1; $i<=5; $i++){
	echo "\n<div class='c1'> hello PHP </div>";
}
?>
</body>
</html>