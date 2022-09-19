<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Trang3 - Hiển thị thông tin của trang 2</title>
</head>

<body>
<h2>Trang3 - Hiển thị thông tin lưu từ trang2</h2>
<?php
//$hoten = $_REQUEST["hoten"];//lấy hoten từ form
session_start();
$hoten = $_SESSION["hoten"];//lấy giá trị họ tên từ biến SESSION
?>
<h3> Hello: <?=$hoten?> </h3>
</body>
</html>