<?php
if(isset($_GET["b1"])==true)//nếu submit từ form
{		
$tk = $_GET["taikhoan"];
$mk = $_GET["matkhau"];
echo "<p>Tài khoản: $tk </p>";
echo "<p>Mật khẩu: $mk </p>";
}
else
{
	echo "<a href='Form1.php'> Mời nhập thông tin </a>";
}
?>