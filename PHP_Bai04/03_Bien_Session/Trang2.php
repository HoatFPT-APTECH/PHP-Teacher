<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Trang2-Nhận thông tin từ form</title>
</head>

<body>
<h2>Trang 2 - Nhận thông tin từ form</h2>
<?php
session_start();//khai báo sử dụng Session
$hoten = $_REQUEST["hoten"];//lấy hoten từ form
$_SESSION["hoten"] = $hoten;//lưu họ tên vào biến SESSION để trang khác sử dụng lại
?>
<h3> Hello: <?=$hoten?> </h3>
<a href="Trang3.php"> Trang 3</a>
</body>
</html>