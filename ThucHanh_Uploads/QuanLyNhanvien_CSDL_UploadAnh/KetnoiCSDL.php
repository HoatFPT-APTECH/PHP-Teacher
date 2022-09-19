<?php
try{
$pdo_conn = new PDO("mysql:host=localhost;dbname=D13CNPM2;charset=utf8","root","");
}
catch(PDOException $e){
	die("<h3>Lỗi Kết nối CSDL: " . $e->getMessage() ."</h3>");
}
$pdo_conn->query("SET NAMES UTF-8");//thiết lập làm việc kiểu mã unicode
?>