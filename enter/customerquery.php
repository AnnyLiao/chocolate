<?php
$host = "127.0.0.1";
$user = "root";
$pass = "s12202245";
$database = "final";

$conn = mysql_connect($host, $user, $pass);
@mysql_select_db($database, $conn) or die("Unable to select the database. Please check your MySQL database configuration.");

?>
<!DOCTYPE>
<html>
<head>
  <meta charset='UTF-8'>
</head>
<body>
  <?php
   mysql_query("SET NAMES 'utf8'");
   $id=$_GET['id'];
   $sql ="select* FROM customer_data WHERE id='$id'";  //查詢資料
   $result = mysql_query($sql) or die("查詢失敗".mysql_error());
   
   $main="<table border=1>";
while($data=mysql_fetch_assoc($result)){
$main.="
query result
<br><br>
<tr>
<td>id</td> 
<td>password</td>
<td>name</td>
<td>birthday</td>
<td>telephone</td>
<td>email</td>
<td>address</td>
</tr>
<tr>
<td>{$data['id']}</td> 
<td>{$data['password']}</td>
<td>{$data['name']}</td>
<td>{$data['birthday']}</td>
<td>{$data['telephone']}</td>
<td>{$data['email']}</td>
<td>{$data['address']}</td>
</tr>";

}
$main.="</table>";
echo $main;
  ?>
</body>
</html>