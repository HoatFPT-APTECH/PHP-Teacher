<?php
require("chucNang.php");
$cn= new chucNang();
$results=$cn->hienThi();
echo $results.json_encode($results);
?>