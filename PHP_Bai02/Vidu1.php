<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ví dụ PHP - web động</title>
</head>

<body>
<script language="javascript">
window.alert("Hello Javascript");
</script>
<h1 style="text-align: center; color: #090;">Làm quen PHP
</h1>
<a href="?hoten=ABC&solan=5"> Link chạy thử bài</a><br>
<?php
echo "<h2>Xin chào bạn đến với PHP</h2>\n";
//chạy thử: VIDU1.PHP?hoten=ABC&solan=5
$Hoten = $_REQUEST["hoten"];//lấy giá trị của biến trên QueryString
$n = $_REQUEST["solan"];
for($i=1; $i<=$n; $i++)
{
echo "<h3> Hello: $Hoten </h3>\n";//cho phép đặt thẳng tên biến vào trong chuỗi
}
?>
</body>
</html>