<?php
        
class chucNang{

    public $id,$hoTen,$dienThoai,$gioiTinh,$hinhAnh,$maPhong;
    public function chucNang (){

    }
    public function hienThi(){
        require("KetNoiCSDL.php");
        $sql="SELECT * FROM tbnhanvien WHERE TRUE ";
        
        $pdo_stm=$conn->query($sql);
        $kq=$pdo_stm->execute();
        if($kq==false)echo "Lỗi SQL";
        else {
            
            $rows=$pdo_stm->fetchAll( PDO::FETCH_ASSOC);
            return $rows;
        }


    }

}