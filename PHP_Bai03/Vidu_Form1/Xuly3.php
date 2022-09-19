<?php
//$_REQUEST["inputName"]  dùng thay cho $_GET và $_POST
if(isset($_REQUEST["b1"])==true)//nếu submit từ form
{		
$tk = $_REQUEST["taikhoan"];
$mk = $_REQUEST["matkhau"];
echo "<p>Tài khoản: $tk </p>";
echo "<p>Mật khẩu: $mk </p>";
}
else
{
	echo "<a href='Form3.php'> Mời nhập thông tin </a>";
}
?>