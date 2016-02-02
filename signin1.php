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
  <link href="css/style.css" rel="stylesheet" type="text/css">
	<!--[if IE 6]>
		<link href="css/ie6.css" rel="stylesheet" type="text/css">
	<![endif]-->
	<!--[if IE 7]>
	<link href="css/ie7.css" rel="stylesheet" type="text/css">
	<![endif]-->
</head>
<body>
<div id="page">
		<div id="sidebar"> <a href="index.html"><img id="logo" src="image1/logo.gif" width="220" height="350" alt=""></a>
			<h2>FLAVOR OF THE DAY</h2>
			<ul>
				<li>
					<a href="flavors.php"><img src="image1/c1.jpg" width="165" height="165" alt=""></a>
					<h3><a href="flavors.php">Gift Chocolate</a></h3>
				</li>
			</ul>
			<h2>POPULAR FLAVORS</h2>
			<ul>
				<li>
					<a href="flavors.php"><img src="image1/c2.jpg" width="165" height="165" alt=""></a>
					<h3><a href="flavors.php">Heart Chocolate</a></h3>
				</li>
				<li>
					<a href="flavors.php"><img src="image1/c3.png" width="165" height="165" alt=""></a>
					<h3><a href="flavors.php">Nut Chocolate</a></h3>
				</li>
				<li>
					<a href="flavors.php"><img src="image1/c4.jpg" width="165" height="165" alt=""></a>
					<h3><a href="flavors.php">Tiny ball Chocolate</a></h3>
				</li>
			</ul>
		</div>
		<div id="content"> 
			<!-- start of header -->
			<div id="header">
				<ul class="navigation">
					<li>
						<a href="about.html">About Us</a>
					</li>
					<li>
						<a href="flavors.php">Chocolate</a>
					</li>
					<li>
						<a href="customerform.html">Join us</a>
					</li>
					
					<li>
						<a href="board.php">Contact Us</a>
					</li>
				</ul>
			</div>
			<!-- end of header --> 
			<!-- start of class content -->
			<div class="content"> 
				<!-- start of slider-->
				<div class="slider">
				<ul>
						
				     <?php
                    $id=$_GET['id'];
	                $password=$_GET['password'];
                    $sql="select* FROM customer_data WHERE id='$id' AND password='$password'";
                    $res=mysql_query($sql) or die("Fail!");
	                $result=mysql_fetch_array($res);
	                if(empty($result))
	                {
                     "Fail!Try Again!<br><br>";
	                 "<a href='signin.php'>回登入頁面</a>";;
	                }
	                else
                     "Hi!!Welcome to you!";      
   

                     ?>
						 
					
				</div>
				<!-- end of slider --> 
				<!-- start of featured-->
				<div class="featured">
			
				</div>
				<!-- end of featured--> 
				<!-- start of section-->
				<div class="section">
					<div class="about">
					
					</div>



</body>
</html>