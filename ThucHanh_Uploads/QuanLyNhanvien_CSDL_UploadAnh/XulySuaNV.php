<?php
require("KetnoiCSDL.php");
require("Thuvien.php");
//lấy dữ liệu từ form
if(isset($_REQUEST["b1"])==false)
	echo "<p><a href='ThemNV.php'> Mời nhập từ form</a></p>";
else
{
	$id = $_REQUEST["id"];
	$hoten = $_REQUEST["tHoten"]; 
	$dienthoai = $_REQUEST["tDienthoai"];
	$gioitinh =0;
	if(isset($_REQUEST["rGioitinh"]))//nếu 1 trong 2 radio được chọn
		$gioitinh = $_REQUEST["rGioitinh"];
	//$hinhanh = $_REQUEST["tHinhanh"];
	$hinhanh = UploadFile("fHinhanh", "hinhanh");
	if($hinhanh=="")//nếu không có ảnh mới
		$hinhanh = $_REQUEST["tHinhanh"];//lấy ảnh cũ 
	//thêm nhân viên vào CSDL
	$sql = "UPDATE tbNhanvien SET hoten=?, dienthoai=?,
				gioitinh=?,hinhanh =? WHERE id=?";
	$pdo_stm = $pdo_conn->prepare($sql);
	//gán dữ liệu vào các dấu ? theo thứ tự
	$pdo_stm->bindParam(1,$hoten);
	$pdo_stm->bindParam(2,$dienthoai);
	$pdo_stm->bindParam(3,$gioitinh);
	$pdo_stm->bindParam(4,$hinhanh);
	$pdo_stm->bindParam(5,$id);
	$ketqua = $pdo_stm->execute();//thực thi câu lệnh sql trả về true/false
	
	if($ketqua)
		echo "thanh cong<br><a href='DanhsachNV.php'>Danh sách</a>";
	else
		echo "khong sửa duoc";	
}
	 
?>