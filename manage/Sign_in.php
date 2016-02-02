<html>
<head>
   <title></title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="css/templatemo_main.css">
  </head>
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


//設定SQL語法



$username=$_POST['username'];
$pwd=$_POST['password'];
$position=substr($username,0,1);
$sql="select * from member_data where id='".$username."'";

//執行SQL語法

$result = mysql_query($sql) or die("error");
		while($data=mysql_fetch_assoc($result)){
if($username==$data['id']&&$pwd==$data['password'])
{
	if($position=="s"){
	header('location:SCM/index.php?id='.$username.'');}
	else if($position=="c"){
	header('location:CRM/index.php?id='.$username.'');}
	else if($position=="f"){
	header('location:Finance/index.php?id='.$username.'');
	}
	else if($position=="e"){
	header('location:Employee/index.php?id='.$username.'');
	}else header('location:data-visualization.php?id='.$username.'');
	
}}
	echo "<script>alert('帳密錯誤'); location.href = 'index.html';</script>";


?>


<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/templatemo_script.js"></script>
</body>
</html>