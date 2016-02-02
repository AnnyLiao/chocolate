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
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$birthday=$_POST['birthday'];
	$telephone=$_POST['telephone'];
	$email=$_POST['email'];
	$address=$_POST['address'];
    $sql = "UPDATE customer_data SET name = '$name', birthday = '$birthday', telephone = '$telephone', email = '$email', address = '$address' where id = '$id'";	
    $rs = mysql_query($sql) or die("更新失敗");
if($rs)
{
header('location:customerdata.php');
}
}

$query1=mysql_query("select* from customer_data where id='$id'");
$query2=mysql_fetch_array($query1);
?>
<form id="form1" name="form1" method="post" action="">
name: <input type="text" name="name" value="<?php echo $query2['name']; ?>" />
<br><br>
birthday: <input type="date" name="birthday" value="<?php echo $query2['birthday']; ?>" />
<br><br>
telephone:
<input type="text" name="telephone" value="<?php echo $query2['telephone']; ?>" />
<br><br>
email:
<input type="text" name="email" value="<?php echo $query2['email']; ?>" />
<br><br>
address: <input type="text" name="address" value="<?php echo $query2['address']; ?>" />
<br><br>

<input type="submit" name="submit" value="submit" />
<input type="reset" value="reset"/>
</form>
<?php
}
?>
</body>
</html>