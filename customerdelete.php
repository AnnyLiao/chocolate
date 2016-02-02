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
if(isset($_GET['id']))
{
$id=$_GET['id'];
$sql="delete from customer_data where id='$id'";
$result = mysql_query($sql) or die("刪除失敗".mysql_error());
if($result)
{
header('location:customerdata.php');
}
}
?>
</body>
</html>