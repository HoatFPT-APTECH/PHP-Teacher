<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kết hợp HTML, CSS, JavaScript, PHP</title>
<style type="text/css">
h1 {color:red}
.c1 {width:100px; height:50px; border:1px red solid;
	float:left; margin:5px;}
.c2 {width:100px; height:50px; border:1px blue solid;
	float:left; margin:5px;}	
</style>
</head>

<body>
<h1> KẾT HỢP HTML, CSS, JS, PHP</h1>
<h3> nội dung từ php</h3>
<?php
for($i=1; $i<=5; $i++){
	echo "\n<div class='c1'> hello PHP </div>";
}
?>
<h3 style="clear:both">nội dung từ javascript</h3>
<script language="javascript">
for(i=1; i<=5; i++){
	document.write("<div class='c2'> hello Javascript</div>");
}
</script>
</body>
</html>