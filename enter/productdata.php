<?php

$host = "127.0.0.1";
$user = "root";
$pass = "s12202245";
$database = "final";

$conn = mysql_connect($host, $user, $pass);
@mysql_select_db($database, $conn) or die("Unable to select the database. Please check your MySQL database configuration.");
mysql_query("set names 'utf-8'");

?>

<!DOCTYPE>
<html>
<head>
  <meta charset='UTF-8'>
</head>
<body>
Customer data 
<br><br>
<?php
 mysql_query("SET NAMES 'utf8'");
    $query1=mysql_query("select* from chocolate");
     echo"<table border=1><tr>
          <td>id</td> 
          <td>chocolatename</td>
          <td>supplier</td>
          <td>cost</td>
          <td>salescost</td>
          <td>inventory</td>
          <td>description</td>
          </tr>";
	
while($row=mysql_fetch_array($query1)){
echo"<tr>";
echo"<td>".$row['id']."</td>";
echo"<td>".$row['chocolatename']."</td>";
echo"<td>".$row['supplier']."</td>";
echo"<td>".$row['cost']."</td>";
echo"<td>".$row['salescost']."</td>";
echo"<td>".$row['inventory']."</td>";
echo"<td>".$row['subcription']."</td>";
echo"<td><a href='productupdate.php?id=".$row['id']."'>update</a></td>";
echo"<td><a href='productdelete.php?id=".$row['id']."'>delete</a></td>";
echo"</tr>";
}
?>
</table>
</body>
</html>


