<?php 
require('Thuvien.php');
$image=$_FILES['hinhanh'];
$image_name=$image['name'];
$folfer='hinhanh';
if (isset($_REQUEST["b1"])&&$_REQUEST['b1']!="") {
    # code...
   
    $loi=ThuVien($image,$folfer);
    if($loi=="")echo "Lỗi up ảnh;";
    else
    echo "<img src='hinhanh/$image_name' alt='Ảnh'/>";
}
?>