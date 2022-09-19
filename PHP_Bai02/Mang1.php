<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mảng</title>
</head>

<body>
<h1> sử dụng mảng</h1>
<?php
//khai báo mảng dùng lệnh array()
$sinhvien = array("Hoa", "Tuấn", "Bình");
print_r($sinhvien);
$a = $sinhvien[1];//lấy phần tử số 1 gán cho $a
echo "<p> sinh viên thứ 2 là $a</p>";
//có thể thêm phần tử vào vị trí bất kỳ
$sinhvien[3]="Dũng";
print_r($sinhvien);

echo "<h3> hiển thị mảng bằng vòng lặp for</h3>";
for($i=0; $i < count($sinhvien); $i++)
{
	echo "<p> sinh viên thứ $i là: $sinhvien[$i] </p>";
}
//sử dụng foreach
echo "<h3> sử dụng foreach</h3>";
foreach($sinhvien as $hoten)
{
	echo "<p> sinh viên = $hoten </p>";
}

?>
</body>
</html>
