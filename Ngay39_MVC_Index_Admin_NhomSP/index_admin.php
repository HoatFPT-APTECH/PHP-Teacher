<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Trang chủ</title>
<link rel="stylesheet" type="text/css" href="css_Admin/Style.css">
<link rel="stylesheet" type="text/css" href="css_Admin/Menu.css">
<link rel="stylesheet" type="text/css" href="css_Admin/ContentRight.css">
</head>

<body>
<div id="wrapper">
	<div id="header"> 
    	
    </div>
    <div id="menu">  
    	<ul>
        	<li><a href="index_admin.php">Trang chủ</a></li>
            <li><a href="?module=tintuc">Quản lý Tin tức</a></li>
            <li><a href="?module=nhomsp">Quản lý Nhóm Sản phẩm</a></li>
            <li><a href="?module=sanpham">Quản lý Sản phẩm</a></li>
            <li><a href="?module=hoadon">Quán lý Hóa đơn</a></li>
        </ul> 
    </div>
	<div id="content" class="clear_fix">
    	<?php
		$module = "";
		if(isset($_REQUEST["module"]))
			$module = $_REQUEST["module"];
		if($module=="tintuc")
		{
			require("Controllers/ctlTintuc.php");
		}
		else if($module=="nhomsp")
		{
			require("Controllers/ctlCategory.php");
		}
		else if($module=="sanpham")
		{
			require("Controllers/ctlSanpham.php");
		}
		else if($module=="hoadon")
		{
			require("Controllers/ctlHoadon.php");
		}
		else
		{
			require("Views/vHome.php");
		}
		?>
     </div>
    <div id="footer"> 
    	FOOTER
    </div>
</div>
</body>
</html>
