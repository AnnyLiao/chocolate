<?php
header("Content-Type:text/html; charset=utf8");
				error_reporting(0);
				$link=@mysql_connect("localhost" , "root" ,"s12202245");

if(!$link) echo "資料庫連不上！";

//設定使用UTF8編碼
mysql_query("SET NAMES 'utf8'");

//選擇資料庫
mysql_select_db('final');

$productname=$_POST['productname'];
$supplier=$_POST['supplier'];

$salescost=$_POST['salescost'];
$inventory=$_POST['inventory'];
$subcription=$_POST['subcription'];

$sql3="INSERT INTO `chocolate` (`chocolatename`, `supplier`, `salescost`, `inventory`, `subcription`) VALUES ('".$productname."','".$supplier."','".$salescost."', '".$inventory."', '".$subcription."')";
mysql_query($sql3) or die ("false5".mysql_error());
if($sql3)
{
	
echo "<script>alert('新增成功'); location.href = 'newproduct.php';</script>";
}

?>