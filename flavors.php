<?php

$host = "127.0.0.1";
$user = "root";
$pass = "s12202245";
$database = "final";

$conn = mysql_connect($host, $user, $pass);
@mysql_select_db($database, $conn) or die("Unable to select the database. Please check your MySQL database configuration.");
mysql_query("set names 'utf-8'");

?>
<!DOCTYPE html>

<html>
<head>
	<title>Flavors - LOVE CHOCOLATE</title>
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
				  <form name="form" method="post" action="connect.php">
                       <font color=#000000>帳號：<input type="text"  name="id" /></font>
                       <font color=#000000>密碼：<input type="password"  name="password" /></font>
                       <input type="submit" name="button" value="submit" style="margin-left: 160px;"/>&nbsp;&nbsp;  </form>  
			</div>
			<!-- end of header --> 
			<!-- start of class content -->
			<div class="content">
                     		
				<!-- start inner page content box background -->
				<div class="header">
					<div class="footer">
						<div class="body">
							<h1>Choose Your Flavors</h1>
							<div class="section">
						<table border="1" style="margin-left: 60px;margin-right: 60px;"><tr>
          <td width=130></td>
          <td width=100><font color=#000000>Chocolate name</font></td>
          <td width=60><font color=#000000>Cost</font></td>
          <td width=60><font color=#000000>Inventory</font></td>
          <td width=150><font color=#000000>Description</font></td>

          </tr>		
<?php
    mysql_query("SET NAMES 'utf8'");
    $query1=mysql_query("select* from chocolate");
     
	
while($row=mysql_fetch_array($query1)){
$main="<tr>
<td width=130><img src='image1/c{$row['id']}.jpg' width='130' height='130' alt='' title=''></td>
<td width=100><font color=#000000>{$row['chocolatename']}</font></td>
<td width=60><font color=#000000>{$row['salescost']}</font></td>
<td width=60><font color=#000000>{$row['inventory']}</font></td>
<td width=150><font color=#000000>{$row['subcription']}</font></td>

</tr>";
echo $main;
}

?>
</table>
						<div style="
    margin-top: 20px;
    font-size: 25px;
    font-family: 微軟正黑體;
    color: blueviolet;
	 margin-right: 20px;
">請先加入會員或者登入才能購買喔!!!歡迎加入!!!</div>	
<div style="
    margin-top: 20px;
    font-size: 20px;
    color: blueviolet;
	 margin-right: 20px;
">Please Register or Login to buy! Welcome!!!</div>			
								
							</div>
							
								
								<!-- end of section -->
								
							
						</div>
					</div>
					<!-- end of footer--> 
				</div>
				<!-- end inner page content box background --> 
			</div>
			<!-- end of class content -->
			<div id="footer">
				<ul>
					<li>
						<a href="index.html">Home</a>
					</li>
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
				
				<ul class="connect">
					
				</ul>
			</div>
		</div>
		<!-- end of ID content--> 
	</div>
</body>
</html>