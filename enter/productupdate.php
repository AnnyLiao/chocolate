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
	$chocolatename=$_POST['chocolatename'];
	$supplier=$_POST['supplier'];
	$cost=$_POST['cost'];
	$salescost=$_POST['salescost'];
	$inventory=$_POST['inventory'];
	$description=$_POST['subcription'];
    $sql = "UPDATE chocolate SET chocolatename = '$chocolatename', supplier = '$supplier', cost = '$cost', salescost = 'salescost', inventory = '$inventory', subcription = '$description' where id = '$id'";	
    $rs = mysql_query($sql) or die("更新失敗");
if($rs)
{
header('location:productdata.php');
}
}

$query1=mysql_query("select* from chocolate where id='$id'");
$query2=mysql_fetch_array($query1);
?>
<form id="form1" name="form1" method="post" action="">
chocolatename: <input type="text" name="chocolatename" value="<?php echo $query2['chocolatename']; ?>" />
<br><br>
supplier: <input type="date" name="supplier" value="<?php echo $query2['supplier']; ?>" />
<br><br>
cost:
<input type="text" name="cost" value="<?php echo $query2['cost']; ?>" />
<br><br>
salescost:
<input type="text" name="salescost" value="<?php echo $query2['salescost']; ?>" />
<br><br>
inventory: <input type="text" name="inventory" value="<?php echo $query2['inventory']; ?>" />
<br><br>
description: <input type="text" name="description" value="<?php echo $query2['subcription']; ?>" />
<br><br>
<input type="submit" name="submit" value="submit" />
<input type="reset" value="reset"/>
</form>
<?php
}
?>
</body>
</html>