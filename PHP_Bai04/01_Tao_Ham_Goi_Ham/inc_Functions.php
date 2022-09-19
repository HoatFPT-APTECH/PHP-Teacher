<?php
//Định nghĩa Hàm
function Hienthi()
{
	echo "<h2> Chương trình tính Chu vi và Diện tích HCN</h2>";
}

function Chuvi($chieudai,$chieurong)
{
	$cv = ($chieudai+$chieurong)*2;
	return $cv;
}
function Dientich($dai,$rong)
{
	$dt = $dai*$rong;
	return $dt;
}
?>