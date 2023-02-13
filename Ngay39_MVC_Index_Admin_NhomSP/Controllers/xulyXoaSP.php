<?php
//gọi hàm xóa sách
if($id!="" && is_numeric($id))
{
	//bổ sung kiểm tra id sản phẩm có trong bảng tbChitietSanpham (cột masp) hay chưa?
	//nếu chưa có thì xóa sản phẩm, nếu đã có thì không được xóa mà update cột status =0
	$ketqua = $sanpham->XoaSanpham($id);
	if($ketqua==FALSE)
		$thongbao="Lỗi xóa dữ liệu";
	else
		$thongbao ="Xóa dữ liệu thành công";
}
else
	$thongbao ="Xóa dữ liệu lỗi id sản phẩm";

require("Views/vKetqua.php");
?>