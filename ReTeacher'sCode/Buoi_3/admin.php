

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trang chỉ dành cho Admin</title>
</head>
<body>

<?php
require "checkHack.php";
    echo "<h2 style=\"color: red\">Xin chào".$_SESSION["user"]."</h2>";
    echo"<h3>Trang có nội dung chỉ dảnh cho Admin</h3>";
    echo"<a href='logout.php'>Đăng xuất khỏi trái đất cmn luôn.</a>";

?>
</body>
</html>