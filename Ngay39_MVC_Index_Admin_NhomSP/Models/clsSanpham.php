<?php
require_once("clsDatabase.php");
class clsSanpham
{
	public $db;
	public $data;//mảng chứa dữ liệu trả về bởi hàm truy vấn dữ liệu
	function clsSanpham()
	{
		$this->db = new clsDatabase();//tạo đối tượng clsDatabase và kết nối CSDSL
		$this->data = array();
	}
	//các hàm truy vấn, thêm, sửa, xóa
	//Hàm LayDanhSachSanpham() truy vấn dữ liệu lưu vào thuộc tính data của lớp
	function LayDanhSachSanpham($trangthai)
	{
		$sql = "SELECT * FROM books";
		//nếu khác 2 thì thêm mệnh đề WHERE để lọc, 
		//còn nếu =2 thì không có có WHERE => sẽ hiển thị mọi sản phẩm
		if($trangthai!=2) 
			$sql = $sql . " WHERE status = " . $trangthai;
		$ketqua = $this->db->ThucthiSQL($sql);
		//LẤY CÁC BẢN GHI KẾT QUẢ LƯU VÀO $data
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetchAll();
		return $ketqua;//trả về $ketqua: TRUE/FALSE
	}
		
	//Hàm thêm dữ liệu
	function ThemSanpham($name,$author,$price)
	{
		$sql = "INSERT INTO books VALUES (NULL, ?, ?, ?)";
		$data[] = $name;
		$data[] = $author;
		$data[] = $price;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		return $ketqua;
	}
	//Hàm sửa dữ liệu
	function SuaSanpham($id,$name,$author,$price)
	{
		$sql = "UPDATE books SET title=?, author = ?, price = ? WHERE id=?";
		$data[] = $name;
		$data[] = $author;
		$data[] = $price;
		$data[] = $id;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		return $ketqua;
	}
	//Hàm xóa dữ liệu
	function XoaSanpham($id)
	{
		$sql = "DELETE FROM books WHERE id=?";
		$data[] = $id;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		return $ketqua;
	}
	//Hàm TimTheoIDSanpham($id) truy vấn dữ liệu theo id lưu vào thuộc tính data
	function TimTheoIDSanpham($id)
	{
		$sql = "SELECT * FROM books WHERE id=?";
		$data[] = $id;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		//LẤY BẢN GHI KẾT QUẢ LƯU VÀO $data
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetch();
		return $ketqua;//trả về $ketqua: TRUE/FALSE
	}
	//Hàm TimTheoNhomSanpham($cat_id) truy vấn dữ liệu theo cat_id 
	function TimTheoNhomSanpham($cat_id)
	{
		$sql = "SELECT * FROM books WHERE cat_id=?";
		$data[] = $cat_id;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		//LẤY BẢN GHI KẾT QUẢ LƯU VÀO $data
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetch();
		return $ketqua;//trả về $ketqua: TRUE/FALSE
	}
}
?>