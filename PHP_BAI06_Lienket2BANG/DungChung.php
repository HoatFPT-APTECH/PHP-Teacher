<?php
function KetnoiCSDL()
{
	$conn = NULL;
	try {
	  $conn = new PDO("mysql:host=localhost;dbname=d13cnpm", "root", "");
	  $conn->query("SET NAMES 'UTF8'");
	} catch(PDOException $e) {
	  echo "Connection failed: " . $e->getMessage();
	}
	return $conn;
}

function TaoSelect($tenbang,$cotid,$cotname,$selectedid)
{
	$conn = KetnoiCSDL();
	$sql = "SELECT * FROM $tenbang";
	$pdo_smt = $conn->prepare($sql);
	$ketqua = $pdo_smt->execute();
	if($ketqua==FALSE)
		die("<p>Lỗi tạo select</p>");
	$rows = $pdo_smt->fetchAll();
	foreach($rows as $row)
	{
		$id = $row[$cotid];
		$ten = $row[$cotname];
		if($id==$selectedid)
			echo "<option value='$id' selected> $ten </option>";
		else
			echo "<option value='$id' > $ten </option>";	
	}
}
?>