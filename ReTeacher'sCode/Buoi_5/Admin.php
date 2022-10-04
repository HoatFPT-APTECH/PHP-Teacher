<?php
require("KiemTraDangNhap.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang dành cho Admin</title>
</head>
<body>
    <h2>Trang dành cho Admin</h2>
    <h3>Tài khoản: <?=$_SESSION["user"]?></h3>
    <h3> Hello: <?=$_SESSION["hoten"]?></h3>
    <a href="Logout.php"> Thoát</a>
</body>
</html>