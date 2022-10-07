<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DSSV</title>
    <?php
require("KetNoiCSDL.php");
$sql= "SELECT * FROM tbsinhvien";
$pdo_stm=$conn->prepare($sql);
$kq=$pdo_stm->execute();
if( $kq==false){
    echo "Lỗi cú pháp SQL";
}
else{
    $rows=$pdo_stm->fetchAll(PDO::FETCH_ASSOC);
}

    ?>
</head>
<body>
<h1 style="text-align: center; color: #090;">DANH SÁCH NHÂN VIÊN</h1>
<table width="1009" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="87" bgcolor="#FF9900">ID</td>
    <td width="212" bgcolor="#FF9900">HỌ TÊN</td>
    <td width="150" bgcolor="#FF9900">TUỔI</td>
    <td width="165" bgcolor="#FF9900">ĐỊA CHỈ</td>
    <td width="209" bgcolor="#FF9900">ĐIỆN THOẠI</td>
  </tr>
  <?php
   foreach ($rows as $row ) {
    ?>
      <tr>
    <td width="87"><?=$row["id"]?></td>
    <td width="212" ><?=$row["name"]?></td>
    <td width="150"><?=$row["age"]?></td>
    <td width="165" ><?=$row["address"]?></td>
    <td width="209" ><?=$row["telephone"]?></td>
  </tr>
    <?php
   }
    ?>
    <a href="ThemSV.php">Thêm Sinh viên</a>
</table>
</body>
</html>