<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sửa nhân viên</title>
</head>

<body>
<h2 style="color: #090; text-align: center;">Sửa nhân viên mới</h2>
<?php
require("KetnoiCSDL.php");
$id = $_REQUEST["id"]; 
$sql = "SELECT * FROM tbNhanvien WHERE id=$id";
$pdo_stm = $pdo_conn->query($sql);
$row = $pdo_stm->fetch(PDO::FETCH_BOTH);
$check_nam = $row["gioitinh"]==0?"checked":"";
$check_nu = $row["gioitinh"]==1?"checked":"";
?>
<form action="XulySuaNV.php" method="post" name="f1" id="f1" enctype="multipart/form-data">
	<input type="hidden" name="id" id="id" value="<?=$id?>">
  <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="126">Họ tên</td>
      <td width="274"><input type="text" name="tHoten" id="tHoten"  value="<?=$row["hoten"]?>"></td>
    </tr>
    <tr>
      <td>Điện thoại</td>
      <td><input type="text" name="tDienthoai" id="tDienthoai" value="<?=$row["dienthoai"]?>"></td>
    </tr>
    <tr>
      <td>Giới tính</td>
      <td>
      Nam <input type="radio" name="rGioitinh" id="r1" value="0" <?=$check_nam?>>
      Nữ  <input type="radio" name="rGioitinh" id="r2" value="1"  <?=$check_nu?>></td>
    </tr>
    <tr>
      <td>Hình ảnh hiện tại</td>
      <td>
      <?php
      $hinhanh = "noimage.jpg";
	  if($row["hinhanh"]!="")
	  	$hinhanh = $row["hinhanh"];
	  ?>
      <input readonly type="text" name="tHinhanh" id="tHinhanh" value="<?=$row["hinhanh"]?>">
	  <img src="hinhanh/<?=$hinhanh?>" width="80">    
    	</td>
    </tr>
    <tr>
      <td>Hình ảnh mới:</td>
      <td>
      <input type="file" name="fHinhanh" id="fHinhanh">
   
    	</td>
    </tr>
    <tr>
      <td colspan="2" align="center">
      <input type="submit" name="b1" id="b1" value="Đồng ý Sửa"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>