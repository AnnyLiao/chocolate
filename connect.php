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



$id=$_POST['id'];
$pwd=$_POST['password'];

$sql="select * from customer_data";

//執行SQL語法

$result = mysql_query($sql) or die("error");
		while($data=mysql_fetch_assoc($result)){
if($id==$data['id']&&$pwd==$data['password'])
{
	header('location:enter/indexEnter.php?id='.$data['id'].'');
	
}

}
echo "<script>alert('帳密錯誤'); location.href = 'index.html';</script>";
?>




<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/templatemo_script.js"></script>
</body>
</html>