<?php
header("Content-Type:text/html; charset=utf8");
				error_reporting(0);
				$link=@mysql_connect("localhost" , "root" ,"s12202245");

if(!$link) echo "資料庫連不上！";

//設定使用UTF8編碼
mysql_query("SET NAMES 'utf8'");

//選擇資料庫
mysql_select_db('final');
$userid=$_GET['userid'];
$suppliercompany=$_POST['suppliercompany'];
$liaisionname=$_POST['liaisionname'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$address=$_POST['address'];


$sql3="INSERT INTO `supplier_data` (`suppliercompany`, `liaisionname`, `telephone`, `email`, `address`) VALUES ('".$suppliercompany."','".$liaisionname."','".$telephone."','".$email."', '".$address."')";
mysql_query($sql3) or die ("false5".mysql_error());
if($sql3)
{
	
header('location:newproduct.php?userid='.$userid.'');
}

?>