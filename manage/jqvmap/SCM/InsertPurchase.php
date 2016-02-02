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
$purchasedate=$_POST['purchasedate'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$total=$_POST['total'];
$status=$_POST['status'];
$handle_by=$_POST['handle'];

$sql3="INSERT INTO `purchase_data` (`productname`, `supplier`, `purchasedate`, `price`, `quantity`, `total`, `status`, `handle_by`) VALUES ('".$productname."','".$supplier."','".$purchasedate."','".$price."', '".$quantity."', '".$total."', '".$status."', '".$handle_by."')";
mysql_query($sql3) or die ("false5".mysql_error());
if($sql3)
{
	
header('location:newpurchase.php');
}

?>