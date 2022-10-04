<?php
      session_start();
$user=$_REQUEST["tUser"];
$pass=$_REQUEST["tPassword"];
// thiết lập kết nối CSDL;
$serverName="localhost";
$uMysql="root";
$PMysql="";
try {
    $conn=  new PDO("mysql:host=$serverName;dbname=t2111e",$uMysql,$PMysql);
    echo "<h3> Kết nối CSDL thành công</h3>";
    $conn->query("SET NAMES UTF8");
} catch (PDOException $ex) {
    //throw $th;
    echo "<h5>Errrol to connect Database: </h5>".$ex->getMessage();
    echo "<h4 style=\"color: red\">Lỗi kết nối DataBase</h4>";
    die();
}
$sql="  SELECT * FROM tbuser WHERE username='$user' AND password=md5($pass) ";
// 2 ĐIỀU KIỆN MYSQL THÌ DÙNG "AND" còn bình thường thì chỉ có một điều kiện
$pdo_stm=$conn->prepare($sql);
$ketqua=$pdo_stm->execute();
if($ketqua==false){
echo "<h3 style='color:red'>Lỗi truy vấn MySql</h3>";
}
else{
    $row=$pdo_stm->rowCount();
    if($row>0){
        $row=$pdo_stm->fetch();
  
        $_SESSION["logined"]="OK";
        $_SESSION["user"]=$row["username"];
        $_SESSION["hoten"]=$row["hoten"];
        $_SESSION["password"]=$row["password"];
        echo "<h3>Chúc mừng : Đăng nhập thành công</h3>";
        echo "<a href='Admin.php'>Chuyển tới trang đăng nhập</a>";
    }
    else{
      $_SESSION["logined"]="";
      echo "<h3> Đăng nhập không thành công </h3>";
      echo "<a href=\"Login.php\">Mời đăng nhập lại</a>";
    }
}

?>