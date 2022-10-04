<?php 
 if(!(isset($_REQUEST["hoten"])  || isset($_REQUEST["solan"]))){
    echo "Lỗi";
 }
 else
 {
     $hoten=$_REQUEST["hoten"];
     $n = $_REQUEST['solan'];
     if($n==""  || is_numeric($n)==false)
     $n=1;
     for ($i=0; $i < $n; $i++) { 
        # code...
        echo "<h3>Hello: $hoten</h3>";
     }
 }
?>