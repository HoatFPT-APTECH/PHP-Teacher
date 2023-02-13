<?php
require_once("../Models/clsHoadon.php");
$act = "";
$id = "";
//lấy các thông tin từ request nếu có
if(isset($_REQUEST["act"]))
	$act = $_REQUEST["act"];
if(isset($_REQUEST["id"]))
	$id = $_REQUEST["id"];
//tạo đối tượng clsHoadon
$hoadon = new clsHoadon();
//gọi các view và các Controllers cấp dưới dựa trên biến act 
if($act == "xoa"){
	require("xulyXoaHD.php");
}
else if($act == "trangthai"){
	require("xulyTrangthaiHD.php");
}	
else if($act == "chitiet"){
	require("../Views/vChitietHD.php");
}
else{ //hiển thị tất cả hóa đơn
	$ketqua = $hoadon->LayDanhSachHoadon();
	require("../Views/vDanhSachHD.php");
}	
?>