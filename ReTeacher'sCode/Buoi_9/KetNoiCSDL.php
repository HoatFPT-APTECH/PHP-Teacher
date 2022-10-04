<?php
try {
    $conn=new PDO("mysql:host=localhost;dbname=d13cnpm","root","");
    $conn->query("SET NAMES UTF8_CHARSETS");

} catch (PDOException $th) {
    //throw $th;
    echo " <h3>Lỗi: </h3>";
    echo " ".$th->getMessage();
    die;
}
?>