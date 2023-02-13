<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Chi tiết hóa đơn</title>
</head>
<body>
<h1> CHI TIẾT HÓA ĐƠN</h1>
<?php
$trangthai="";
if($rowHD["trangthai"]==0)
	$trangthai = "HĐ mới";
else if($rowHD["trangthai"]==1)
	$trangthai = "Đã duyệt";
else if($rowHD["trangthai"]==2)
	$trangthai = "Đã Thanh toán";
else if($rowHD["trangthai"]==3)
	$trangthai = "Tạm hủy";
?>
<p> Mã hóa đơn: <b> <?=$id?> </b></p>
<p> Tên người mua: <b> <?=$rowHD["tennguoimua"]?> </b></p>
<p> Địa chỉ :<b> <?=$rowHD["diachi"]?> </b></p>
<p> Điện thoại :<b> <?=$rowHD["dienthoai"]?> </b></p>
<p> Ngày đặt :<b> <?=$rowHD["ngaydat"]?> </b></p>
<p> Ngày nhận :<b> <?=$rowHD["ngaynhan"]?> </b></p>
<p> Trạng thái :<b> <?=$trangthai?> </b>
<select name="sTT" id="sTT" onChange="sTT_Change(this.value);">
	<option value=""> Đổi trạng thái HĐ</option>
    <option value="0"> Hóa đơn mới</option>
    <option value="1"> Hóa đơn đã duyệt</option>
    <option value="2"> Hóa đơn đã thanh toán</option>
    <option value="3"> Hóa đơn tạm hủy</option>
</select>
<script>
function sTT_Change(new_value)
{
 if(new_value!="")
  window.location.href=
   "ctlHoadon.php?act=trangthai&id=<?=$id?>&ttht=<?=$rowHD["trangthai"]?>&ttmoi="+new_value;
}
</script>
</p>
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