<?php
//tìm và trả về chuỗi kết quả str2 nằm ở vị trí nào trong str1
function Timchuoi($str1, $str2)
{
	$i = strpos($str1,$str2);
	if($i===false)
		return "$str2 không có trong $str1";
	else if($i===0)
		return "$str2 nằm ở vị trí đầu tiên trong $str1";
	else
		return "$str2 nằm ở vị trí $i trong $str1";
}
//hàm tách chuỗi bởi dấu phẩy và tính tổng các con số tron chuỗi
function Tongchuoi($str)
{
	$arr = explode("," ,$str);
	$tong=0;
	foreach($arr as $s)
	{
		if(is_numeric($s))//nếu chuỗi con s ở dạng số
			$tong += $s;
	} 
	return $tong;
}
?>




