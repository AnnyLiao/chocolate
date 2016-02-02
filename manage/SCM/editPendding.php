
<?php
header("Content-Type:text/html; charset=utf8");
error_reporting(0);
$link=@mysql_connect("localhost" , "root" ,"s12202245");

if(!$link) echo "資料庫連不上！";

//設定使用UTF8編碼
mysql_query("SET NAMES 'utf8'");

//選擇資料庫
mysql_select_db('final');


//設定SQL語法


if(isset($_GET['id']))
{
$id=$_GET['id'];

$userid=$_GET['userid'];
$orderDate=$_GET['orderDate'];
$sql="select * from member_data where id='".$userid."'";
$result=mysql_query($sql) or die ("false4".mysql_error());
while($data=mysql_fetch_assoc($result)){
	$name=$data['employeename'];

$query3 = "UPDATE order_data SET  status = 'Delivery Pending', handle_by='$name' where no = '$id'";
$q3=mysql_query($query3) or die ("false4".mysql_error());
}
if($q3)
{
echo "<script>alert('修改成功'); location.href = 'Pendding_DS.php?id=$userid&orderDate=$orderDate';</script>";
}
}

?>
