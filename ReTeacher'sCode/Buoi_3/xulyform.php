<?php

  if(isset($_POST["submit"])){
    $name= isset($_POST["name"])?$_POST["name"]:"";
    echo "<h3>Xin chào: ".$name."</h3>";
  }else echo "Lỗi."
?>