<?php
if(isset($_POST["b1"])==true)//nếu submit từ form
{		
$tk = $_POST["taikhoan"];
$mk = $_POST["matkhau"];
echo "<p>Tài khoản: $tk </p>";
echo "<p>Mật khẩu: $mk </p>";
}
else
{
	echo "<a href='Form2.php'> Mời nhập thông tin </a>";
}
?>