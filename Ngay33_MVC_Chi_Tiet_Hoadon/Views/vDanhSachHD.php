<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Danh sách hóa đơn</title>
</head>
<body>
<h1 style="text-align: center; color: #0C0;"> Danh sách hóa đơn</h1>
<?php
if($ketqua)
{
?>
<table width="1122" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="63" bgcolor="#FF9900">Mã hd</td>
    <td width="186" bgcolor="#FF9900">Họ tên</td>
    <td width="151" bgcolor="#FF9900">Địa chỉ</td>
    <td width="115" bgcolor="#FF9900">Điện thoại</td>
    <td width="118" bgcolor="#FF9900">Ngày đặt</td>
    <td width="118" bgcolor="#FF9900">Ngày nhận</td>
    <td width="120" bgcolor="#FF9900">Tổng tiền</td>
    <td width="120" bgcolor="#FF9900">Trạng thái</td>
    <td width="111" bgcolor="#FF9900">Act</td>
  </tr>
  <?php
	$rows = $hoadon->data;
	foreach($rows as $row)
	{
	?>
  <tr>
    <td><a href="?act=chitiet&id=<?=$row["mahd"]?>"> <?=$row["mahd"]?> </a></td>
    <td><?=$row["tennguoimua"]?></td>
    <td><?=$row["diachi"]?></td>
    <td><?=$row["dienthoai"]?></td>
    <td><?=$row["ngaydat"]?></td>
    <td><?=$row["ngaynhan"]?></td>
    <td><?=$hoadon->TongTien($row["mahd"])?></td>
    <td><?=$row["trangthai"]?></td>
    <td><a href="#">Xóa</a> - <a href="?act=chitiet&id=<?=$row["mahd"]?>"> Chi tiết </a></td>
  </tr>
  <?php
	}
  ?>
</table>
<?php
}
?>
</body>
</html>