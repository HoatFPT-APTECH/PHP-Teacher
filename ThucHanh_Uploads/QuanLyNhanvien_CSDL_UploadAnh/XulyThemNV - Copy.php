 <?php
require("KetnoiCSDL.php");
//lấy dữ liệu từ form
if(isset($_REQUEST["b1"])==false)
	echo "<p><a href='ThemNV.php'> Mời nhập từ form</a></p>";
else
{
	$hoten = $_REQUEST["tHoten"];$hoten= addslashes($hoten);
	$dienthoai = $_REQUEST["tDienthoai"];
	$gioitinh =0;
	if(isset($_REQUEST["rGioitinh"]))//nếu 1 trong 2 radio được chọn
		$gioitinh = $_REQUEST["rGioitinh"];
	$hinhanh = $_REQUEST["tHinhanh"];
	//thêm nhân viên vào CSDL
	$sql = "INSERT INTO tbNhanvien 
			VALUES(NULL,'$hoten','$dienthoai',$gioitinh,'$hinhanh')";
	$n = $pdo_conn->exec($sql);
	if($n>0)
		echo "thanh cong<br><a href='DanhsachNV.php'>Danh sách</a>";
	else
		echo "khong them duoc";	
}
	 
?>