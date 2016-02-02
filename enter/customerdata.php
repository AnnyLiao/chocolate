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
    $query1=mysql_query("select* from customer_data");
     echo"<table border=1><tr>
          <td>id</td> 
          <td>password</td>
          <td>name</td>
          <td>birthday</td>
          <td>telephone</td>
          <td>email</td>
          <td>address</td>
          </tr>";
	
while($row=mysql_fetch_array($query1)){
echo"<tr>";
echo"<td>".$row['id']."</td>";
echo"<td>".$row['password']."</td>";
echo"<td>".$row['name']."</td>";
echo"<td>".$row['birthday']."</td>";
echo"<td>".$row['telephone']."</td>";
echo"<td>".$row['email']."</td>";
echo"<td>".$row['address']."</td>";
echo"<td><a href='customerupdate.php?id=".$row['id']."'>update</a></td>";
echo"<td><a href='customerdelete.php?id=".$row['id']."'>delete</a></td>";
echo"</tr>";
}
?>
</table>
</body>
</html>


