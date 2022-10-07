<?php
require("KetNoiCSDL.php");
$hoten= isset($_REQUEST["tHoten"])  ? $_REQUEST["tHoten"]:"";
$tuoi=isset($_REQUEST["tTuoi"])?  $_REQUEST["tTuoi"]:"";
$diachi=isset($_REQUEST["tDiachi"])? $_REQUEST["tDiachi"]:"";
$dienthoai=isset($_REQUEST["tDienthoai"])?$_REQUEST["tDienthoai"]:"";
$sql=" INSERT INTO tbsinhvien(id,name,age,address,telephone) VALUES (NULL,'$hoten','$tuoi','$diachi','$dienthoai')";
$pdo_stm=$conn->prepare($sql);
$kq=$pdo_stm->execute();
if($kq==false)
echo "Lỗi thêm sinh viên";
else{
    echo "Thêm sinh viên thành công";
    header("Location:DSSV.php");
}
?>