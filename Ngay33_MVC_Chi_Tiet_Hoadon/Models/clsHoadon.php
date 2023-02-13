<?php
require_once("clsDatabase.php");
class clsHoadon
{
	public $db;
	public $data;//mảng chứa dữ liệu trả về bởi hàm truy vấn dữ liệu
	function clsHoadon()
	{
		$this->db = new clsDatabase();
		$this->data = array();
	}
	//các hàm truy vấn, thêm, sửa, xóa
	//Hàm LayDanhSachHoadon() truy vấn dữ liệu lưu vào thuộc tính data
	function LayDanhSachHoadon()
	{
		$sql = "SELECT * FROM tbHoadon ORDER BY mahd DESC";
		$ketqua = $this->db->ThucthiSQL($sql);
		//LẤY CÁC BẢN GHI KẾT QUẢ LƯU VÀO $data
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetchAll();
		return $ketqua;//trả về $ketqua: TRUE/FALSE
	}
	//Hàm tính và trả về tổng tiền của 1 hóa đơn, đầu vào mã hóa đơn
	public function TongTien($mahd)
	{
		$sql = "SELECT SUM(soluong*giamua) AS tongtien 
					FROM `tbchitiethoadon` WHERE mahd=?";
		$data[] = $mahd;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		//LẤY BẢN GHI KẾT QUẢ LƯU VÀO $data
		if($ketqua==TRUE)
		{
			$this->data = $this->db->pdo_stm->fetch();//lấy dòng kết quả
			return $this->data["tongtien"];//trả về cột tongtien
		}
		else
			return -1;
	}
	//Hàm TimHoaDon(mahd) đầu vào là mã hóa đơn, 
	//trả về bản ghi chứa thông tin của hóa đơn từ bảng tbHoadon
	function TimHoadon($mahd)
	{
		$sql = "SELECT * FROM tbHoadon WHERE mahd=?";
		$data[] = $mahd;
		$ketqua = $this->db->ThucthiSQL($sql,$data);
		//LẤY CÁC BẢN GHI KẾT QUẢ LƯU VÀO $data
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetch();
		return $ketqua;//trả về $ketqua: TRUE/FALSE
	}
	//Hàm ChitietHoadon(mahd): đầu vào là mã hóa đơn, trả về danh sách các sản phẩm
	//của hóa đơn,số lượng, giá mua.. lấy từ bảng tbChitietHoadon kết nối với bảng tbSanpham
	function ChitietHoadon($mahd)
	{
		$sql = "SELECT CTHD.*, SP.title,SP.author 
				 FROM tbchitiethoadon CTHD INNER JOIN books SP 
				 ON CTHD.masp = SP.id WHERE mahd = ?";
		$data[] = $mahd;
		$ketqua = $this->db->ThucthiSQL($sql,$data);
		//LẤY CÁC BẢN GHI KẾT QUẢ LƯU VÀO $data
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetchAll();
		return $ketqua;//trả về $ketqua: TRUE/FALSE
	}
}
?>







