<?php

try {
    $conn= new PDO("mysql:host=localhost;dbname=d13cnpm;charset=utf8","root","");
    $conn->query("SET NAMES UTF8");// phải có lệnh này nếu không nếu lúc chèn dữ liệu nên sẽ bị mất dấu
}
catch (PDOException $ex){
    echo "<p>".$ex->getMessage()."</p>";
    die("<h3>Lỗi kết nối CSDL</h3>");
}
?>