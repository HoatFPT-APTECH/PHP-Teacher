<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ví dụ vòng lặp for</title>
</head>

<body>
<?php
echo "<h1 align=\"center\">TEST</h1>\n";
$n=5;
for($i=1; $i<=$n; $i++)
{
?>
	<p style="color:red; text-align:center"> <?=$i?> </p>
    <hr width="30%" color="#00CC00" align="center">
<?php
}
?>
</body>
</html>