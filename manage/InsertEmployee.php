<?php
header("Content-Type:text/html; charset=utf8");
				error_reporting(0);
				$link=@mysql_connect("localhost" , "root" ,"s12202245");

if(!$link) echo "資料庫連不上！";

//設定使用UTF8編碼
mysql_query("SET NAMES 'utf8'");

//選擇資料庫
mysql_select_db('final');

$id=$_POST['id'];
$password=$_POST['password'];
$employeename=$_POST['employeename'];
$department=$_POST['department'];
$position=$_POST['position'];
$birthday=$_POST['birthday'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$address=$_POST['address'];
$sql3="INSERT INTO `member_data` (`id`, `password`, `employeename`, `department`, `position`, `birthday`,`telephone`, `email`, `address`) VALUES ('".$id."','".$password."','".$employeename."','".$department."', '".$position."', '".$birthday."', '".$telephone."', '".$email."', '".$address."')";
mysql_query($sql3) or die ("false5".mysql_error());
$sql4="INSERT INTO `salary_data` (`id`, `employeename`, `department`, `position`) VALUES ('".$id."','".$employeename."','".$department."', '".$position."')";
mysql_query($sql4) or die ("false5".mysql_error());
if($sql3 && $sql4)
{
	
header('location:newEmployee.php');
}

?>