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
	<title>LOVE CHOCOLATE</title>
<meta charset="utf-8">
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
						<li>
                       <form name="form" method="post" action="connect.php">
                       <font color=#000000>id：<input type="text"  name="id" /></font>
                       <font color=#000000>password：<input type="password"  name="password" /></font>
                       <input type="submit" name="button" value="submit" /></form>  
						</li>
					</ul>
					
					<?php
                      mysql_query("SET NAMES 'utf8'");
                      $id=$_GET['id'];
	                  $password=$_GET['password'];
	                  $name=$_GET['name'];
	                  $birthday=$_GET['birthday'];
	                  $telephone=$_GET['telephone'];
	                  $email=$_GET['email'];
	                  $address=$_GET['address'];


                      $sql="insert into `customer_data`(id, password, name, birthday, telephone, email, address) values ('$id', '$password', '$name', '$birthday', '$telephone', '$email', '$address')";
                      $rs=mysql_query($sql) or die("try again");
                      echo "<h2>恭喜您成為會員!請重新登入會員,開始進行訂購!</h2>";
					  
   

                    ?>
					<br><br><br>
					<img id="image" src="image1/7.gif" width="300" height="120" alt="">		
					
				</div>
				<!-- end of slider --> 
				<!-- start of featured-->
				
				<!-- end of featured--> 
				<!-- start of section-->
				
				</div>
				<!-- end of section--> 
				<!-- start of article comment-->
				
				<!-- end of article comment--> 
			</div>
			<!-- end of class content -->
			<div id="footer">
				
			</div>
		</div>
		<!-- end of ID content--> 
	</div>
</body>
</html>