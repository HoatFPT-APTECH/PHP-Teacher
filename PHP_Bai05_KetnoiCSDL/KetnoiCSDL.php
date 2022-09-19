<?php
try
{
$conn = new PDO("mysql:host=localhost;dbname=D13CNPM;charset=utf8","root","");
$conn->query("SET NAMES UTF8");
//echo "<h3> kết nối thành công</h3>";
}
catch(PDOException $ex)
{
	echo "<h3> LỖI KẾT NỐI CSDL</h3>";
	echo "<p>" . $ex->getMessage() . "</p>";
}
?>