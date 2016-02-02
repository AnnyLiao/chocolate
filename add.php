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
	
    $name=$_POST['name'];
	$keynote=$_POST['keynote'];
	$email=$_POST['email'];
	$context=$_POST['context'];
	$s2="select * from Radicals where radicals='".$keynote."'";
	$result = mysql_query($s2) or die("error");
	 while($data=mysql_fetch_assoc($result)){
	  $radicals=$data['department'];
	 }

   $sql="insert into board(name, keynote,email,context,department) values ('$name', '$keynote','$email' , '$context','$radicals')";
   $rs=mysql_query($sql) or die("try again");
   echo "<meta http-equiv=REFRESH CONTENT=1;url=view.php>";
   

  ?>
</body>
</html>