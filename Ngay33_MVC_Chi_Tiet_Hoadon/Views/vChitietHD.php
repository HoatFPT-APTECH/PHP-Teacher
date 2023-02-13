<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Chi tiết hóa đơn</title>
</head>
<body>
<h1> CHI TIẾT HÓA ĐƠN</h1>
<p> Mã hóa đơn: <b> <?=$id?> </b></p>
<p> Tên người mua: <b> <?=$rowHD["tennguoimua"]?> </b></p>
<p> Địa chỉ :<b> <?=$rowHD["diachi"]?> </b></p>
<p> Điện thoại :<b> <?=$rowHD["dienthoai"]?> </b></p>
<p> Ngày đặt :<b> <?=$rowHD["ngaydat"]?> </b></p>
<p> Ngày nhận :<b> <?=$rowHD["ngaynhan"]?> </b></p>
<p> Trạng thái :<b> <?=$rowHD["trangthai"]?> </b></p>
<h3> Danh sách mặt hàng</h3>
<table width="863" border="1" cellspacing="0" cellpadding="0">
  <tr bgcolor="#FF9900">
    <td width="77">STT</td>
    <td width="120">Mã SP</td>
    <td width="195">Tên sản phẩm</td>
    <td width="142">Tác giả</td>
    <td width="87"> Giá mua</td>
    <td width="109">Số lượng</td>
    <td width="117">Thành tiền</td>
  </tr>
  <?php
  $rows = $hoadon->data;
  $stt=0;
	foreach($rows as $row)
	{
		$stt++;
  ?>
  <tr>
    <td><?=$stt?></td>
    <td><?=$row["masp"]?></td>
    <td><?=$row["title"]?></td>
    <td><?=$row["author"]?></td>
    <td><?=$row["giamua"]?></td>
    <td><?=$row["soluong"]?></td>
    <td><?=$row["giamua"]*$row["soluong"]?></td>
  </tr>
  <?php
	}
  ?>
</table>
<p>&nbsp;</p>
</body>
</html>