<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Xử lý đăng nhập</title>
</head>

<body>
<h2> Xử lý đăng nhập</h2>
<?php
session_start();
$user = $_REQUEST["tUser"];
$pass = $_REQUEST["tPassword"];
//Kết nối CSDL
$server = "localhost";
$userMySQL = "root";
$passMySQL = "";
try
{
//Kết nối đến máy chủ MYSQL và CSDL cần làm việc => trả về đối tượng PDO
$conn = new PDO("mysql:host=$server;dbname=CNPM5_Nhom1",$userMySQL,$passMySQL);
echo "<h3> KẾT NỐI CSDL THÀNH CÔNG</h3>";
$conn->query("SET NAMES UTF8");//cho phép làm việc với Unicode utf-8
}
catch(PDOException $ex)
{
echo "<h3> LỖI KẾT NỐI CSDL</h3>";
echo "<p>"  . $ex->getMessage() . "</p>";
die();//dừng trang web
}
//thực thi câu lệnh SQL
$sql ="SELECT * FROM tbUser WHERE username='$user' AND password=md5('$pass')";
echo "<p>$sql</p>";
$pdo_stm = $conn->prepare($sql);//gán câu lệnh SQL cho đối tượng PDOStatement
$ketqua = $pdo_stm->execute();//thực thi SQL, trả về TRUE/FALSE;
if($ketqua == FALSE)
	die("<h3> LỖI SQL</h3>");
//kiểm tra số kết quả trả về >0 là thành công
if($pdo_stm->rowCount()>0)//thành công
{
	//lấy bản ghi kết quả
	$row = $pdo_stm->fetch();
	$_SESSION["logined"] = "OK";
	$_SESSION["user"] = $row["username"];//lấy giá trị cột username
	$_SESSION["hoten"] = $row["hoten"];//lấy giá trị cột hoten
	echo "<h3> ĐĂNG NHẬP THÀNH CÔNG</h3>";
	echo "<a href=\"Admin.php\"> Vào Trang Admin</a>";
}
else
{
	$_SESSION["logined"] = "";
	echo "<h3> ĐĂNG NHẬP SAI TÀI KHOẢN</h3>";
	echo "<a href=\"Login.php\"> Mời Đăng nhập</a>";
}
?>
</body>
</html>