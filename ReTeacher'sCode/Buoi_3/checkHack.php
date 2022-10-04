<?php
session_start();
if (isset($_SESSION["login"])==false || $_SESSION["login"]==false){
    echo "<h2> Bạn phải đăng nhập</h2>";
    echo " <h2>Mời bạn đăng nhập: </h2>";
    echo"<a href=\"form_Login..html\">Chuyển đến trang đăng nhập</a>";
  die("Định hack ak");
}

?>
