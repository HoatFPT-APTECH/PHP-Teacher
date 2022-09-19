<?php
require("KetnoiCSDL.php");
require("Thuvien.php");
//lấy dữ liệu từ form
if(isset($_REQUEST["b1"])==false)
	echo "<p><a href='ThemNV.php'> Mời nhập từ form</a></p>";
else
{
	$hoten = $_REQUEST["tHoten"]; 
	$dienthoai = $_REQUEST["tDienthoai"];
	$gioitinh =0;
	if(isset($_REQUEST["rGioitinh"]))//nếu 1 trong 2 radio được chọn
		$gioitinh = $_REQUEST["rGioitinh"];
	//$hinhanh = $_REQUEST["tHinhanh"];
	$hinhanh = UploadFile("fHinhanh", "hinhanh");
	//thêm nhân viên vào CSDL
	$sql = "INSERT INTO tbNhanvien VALUES(NULL,?,?,?,?)";
	$pdo_stm = $pdo_conn->prepare($sql);
	//gán dữ liệu vào các dấu ? theo thứ tự
	$pdo_stm->bindParam(1,$hoten);
	$pdo_stm->bindParam(2,$dienthoai);
	$pdo_stm->bindParam(3,$gioitinh);
	$pdo_stm->bindParam(4,$hinhanh);
	$ketqua = $pdo_stm->execute();//thực thi câu lệnh sql trả về true/false
	
	if($ketqua)
		echo "thanh cong<br><a href='DanhsachNV.php'>Danh sách</a>";
	else
		echo "khong them duoc";	
}
	 
?>