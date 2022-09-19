<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thêm nhân viên</title>
</head>

<body>
<h2 style="color: #090; text-align: center;">Thêm nhân viên mới</h2>
<form action="XulyThemNV.php" method="post" name="f1" id="f1" enctype="multipart/form-data">
  <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="126">Họ tên</td>
      <td width="274"><input type="text" name="tHoten" id="tHoten"></td>
    </tr>
    <tr>
      <td>Điện thoại</td>
      <td><input type="text" name="tDienthoai" id="tDienthoai"></td>
    </tr>
    <tr>
      <td>Giới tính</td>
      <td>
      Nam <input type="radio" name="rGioitinh" id="r1" value="0">
      Nữ  <input type="radio" name="rGioitinh" id="r2" value="1"></td>
    </tr>
    <tr>
      <td>Hình ảnh</td>
      <td><input type="file" name="fHinhanh" id="fHinhanh"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="b1" id="b1" value="Đồng ý thêm"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>