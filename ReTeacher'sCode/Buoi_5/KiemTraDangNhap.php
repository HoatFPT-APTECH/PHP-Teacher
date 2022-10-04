<?php
session_start();
if(isset($_SESSION["logined"])==false|| $_SESSION["logined"]=="")
{
echo "<h2>Bạn chưa đăng nhập mời đăng nhập.</h2>";
echo "<a href='Login.php'>Chuyển tới trang đăng Nhập.</a>";
die("Kết thúc.");
}
?>