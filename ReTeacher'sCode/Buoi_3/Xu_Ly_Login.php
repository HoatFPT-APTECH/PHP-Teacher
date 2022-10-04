<?php
$user=isset($_REQUEST["user"])?$_REQUEST["user"]:"";
$pass=isset($_REQUEST["password"])?$_REQUEST["password"]:"";
session_start();
$_SESSION["user"]=$user;
$_SESSION["pass"]=$pass;
$_SESSION["login"]=false;
if ($user=="admin"&&$pass=="1234"){
    echo "Đăng nhập thành công!";
    echo" Xin chào: ".$user;
    echo "<a href='admin.php'>Chuyển đến trang Admin</a>";
    $_SESSION["login"]=true;
}
else {
    echo "Sai tài khoản , mật khẩu!";
    echo " Mời đăng nhập lại.:";
  echo "<a href='form_Login..html'>Chuyển về trang đăng nhập.</a>";
}
?>
