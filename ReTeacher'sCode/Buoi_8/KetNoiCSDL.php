<?php
try {
    $conn= new PDO("mysql:host=localhost;dbname=d13cnpm","root","");
    $conn->query("SET NAMES UTF8_CHARSET");
} catch (PDOException $th) {
    //throw $th;
    echo "<h3 style='color'>Lỗi kết nói CSDL</h3>";
    echo "<h3>Lỗi".$th->getMessage()."</h3>";
    die;
}
?>