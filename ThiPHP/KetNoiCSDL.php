<?php
try {
    $conn= new PDO("mysql:host=localhost;dbname=d13cnpm","root","");
    $conn->query("  SET NAMES UTF8  "); 
} catch (PDOException $th) {
    //throw $th;
    echo $th->getMessage();
    die;
}
?>