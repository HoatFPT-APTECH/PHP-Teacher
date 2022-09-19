<?php
require("KetnoiCSDL.php");
//lấy dữ liệu từ form
if(isset($_REQUEST["id"])==false)
	echo "<p>CHƯA CÓ ID</p>";
else
{
	$id = $_REQUEST["id"]; 
	//xóa nhân viên từ CSDL
	$sql = "DELETE FROM tbNhanvien WHERE id=?";
	$pdo_stm = $pdo_conn->prepare($sql);
	//gán dữ liệu vào các dấu ? theo thứ tự
	$pdo_stm->bindParam(1,$id);
	$ketqua = $pdo_stm->execute();//thực thi câu lệnh sql trả về true/false
	
	if($ketqua)
		echo "thanh cong<br><a href='DanhsachNV.php'>Danh sách</a>";
	else
		echo "khong them duoc";	
}
	 
?>