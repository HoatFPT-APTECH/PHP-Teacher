<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Danh sách nhân viên</title>
</head>

<body>
<h2 style="text-align: center; color: #063;">DANH SÁCH NHÂN VIÊN</h2>
<a href="ThemNV.php">THÊM NHÂN VIÊN MỚI</a>
<table width="800" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FF9933">
    <td width="28">ID</td>
    <td width="200">HỌ TÊN</td>
    <td width="166">ĐIỆN THOẠI</td>
    <td width="116">GIỚI TÍNH </td>
    <td width="169">HÌNH ẢNH</td>
    <td width="107">XỬ LÝ</td>
  </tr>
  <?PHP
 	require("KetnoiCSDL.php");
	$sql = "SELECT * FROM tbNhanvien";
	$pdo_stm = $pdo_conn->query($sql);
  	if($pdo_stm==NULL)
		echo "<h3>LỖI SQL</h3>";
	else if($pdo_stm->rowCount()<=0)
		echo "<h3> KHÔNG CÓ DỮ LIỆU</H3>";
	else
	{
		while($row = $pdo_stm->fetch(PDO::FETCH_BOTH))
		{
			$hinhanh = "noimage.jpg";
			if($row["hinhanh"]!="")
				$hinhanh = $row["hinhanh"];
  ?>
  	<tr>
        <td><?=$row["id"]?></td>
        <td><?=$row["hoten"]?></td>
        <td><?=$row["dienthoai"]?></td>
        <td><?=$row["gioitinh"]==0?"Nam":"Nữ"?></td>
        <td><img src="hinhanh/<?=$hinhanh?>" width="80"></td>
        <td>
        <a href="SuaNV.php?id=<?=$row["id"]?>">Sửa</a> 
        - 
        <a href="XoaNV.php?id=<?=$row["id"]?>" 
        	onClick="return confirm('chắc xóa không?');">Xóa</a>
        </td>
  	</tr>
  <?php
		}//đóng while
	}//đóng else
  ?>
</table>
</body>
</html>