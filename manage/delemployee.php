<html>
<body>
<?php
header("Content-Type:text/html; charset=utf8");
error_reporting(0);
$link=@mysql_connect("localhost" , "root" ,"s12202245");

if(!$link) echo "資料庫連不上！";

//設定使用UTF8編碼
mysql_query("SET NAMES 'utf8'");

//選擇資料庫
mysql_select_db('final');

if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=mysql_query("delete from member_data where id='$id'");
$query2=mysql_query("delete from salary_data where id='$id'");

if($query1 && $query2)
{
header('location:employee.php');
}
}
?>
</body>
</html>