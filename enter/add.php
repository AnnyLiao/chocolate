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
	
						
	$id=$_POST['id'];			
     $name=$_POST['name'];
	$keynote=$_POST['keynote'];
	$context=$_POST['context'];
	$s2="select * from Radicals where radicals='".$keynote."'";
	$result = mysql_query($s2) or die("error");
	 while($data=mysql_fetch_assoc($result)){
	  $radicals=$data['department'];
	 }
	 $s3="select * from customer_data where id='".$id."'";
	$r3 = mysql_query($s3) or die("error");
	 while($d3=mysql_fetch_assoc($r3)){
	  $Email=$d3['email'];
	 }

   $sql="insert into board(id,name, keynote,email,context,department) values ('$id','$name', '$keynote', '$Email','$context','$radicals')";
   $rs=mysql_query($sql) or die("try again");
   echo "<meta http-equiv=REFRESH CONTENT=1;url=view.php?id=".$id.">";
   

  ?>
</body>
</html>