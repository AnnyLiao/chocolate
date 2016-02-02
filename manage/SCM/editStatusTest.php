
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
$query3 = "UPDATE order_data SET  status = 'Delivery' where no = '$id'";
$q3=mysql_query($query3) or die ("false4".mysql_error());

if($q3)
{
echo "<script>alert('修改成功'); location.href = 'Delivery_Pending.php?userid=$userid';</script>";
}


/*$query1=mysql_query("select * from order_data where no='$id'");
$query2=mysql_fetch_array($query1);
$q2=mysql_query("select * from order_detail where no='$id'");
$q3=mysql_fetch_array($q2);*/

}
?>