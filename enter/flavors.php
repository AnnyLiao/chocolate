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
<?php
						if(isset($_GET['id'])){
						$id=$_GET['id'];
						
						}
						
						?>
	<div id="page">
		<div id="sidebar"> <a href="indexEnter.php?id=<?php echo $id;?>"><img id="logo" src="image1/logo.gif" width="220" height="350" alt=""></a>
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
						<a href="about.php?id=<?php echo $id;?>">About Us</a>
					</li>
					<li>
						<a href="flavors.php?id=<?php echo $id;?>">Chocolate</a>
					</li>
					<li>
						<a href="customerform.php?id=<?php echo $id;?>">Join us</a>
					</li>
					
					<li>
						<a href="board.php?id=<?php echo $id;?>">Contact Us</a>
					</li>
					 </li>
					
<li style="margin-left:20px; font-family: Microsoft JhengHei;font-size: 14px;">
						
						<font color="#000088"><?php echo $id;?>歡迎光臨</font>
						
					</li>
				</ul>
				 <a href="../index.html" style="padding: 0px 0px 0px 10px;"><font color="#FF0000">登出</font></a>
					
			</div>
			<!-- end of header --> 
			<!-- start of class content -->
			<div class="content">
                     		
				<!-- start inner page content box background -->
				<div class="header">
					<div class="footer">
						<div class="body">
						<?php
							$count=0;
							$sql="select * from Car where customer_id='".$id."'";
							$result = mysql_query($sql) or die("error");
							while($data=mysql_fetch_assoc($result)){
							$count+=count($data['customer_id']);
							}
							?>
							<h1 style="width:250px;">Choose Your Flavors</h1>
							
							
					
					
							<div class="section">
							<form action="Order.php?id=<?php echo $id;?>" method="post">
						<table border="1" style="width:650px"><tr>
          <td width=130></td>
          <td width=100><font color=#000000>Chocolate name</font></td>
          <td style="width=55"><font color=#000000>Cost</font></td>
          <td width=60><font color=#000000>Inventory</font></td>
          <td width=150><font color=#000000>Description</font></td>
		  <td width=1><font color=#000000>Quantity</font></td>
		  <td><font color=#000000>Buy</font></td>
		  <td style="width=55"><font color=#000000>Car</font></td>
          </tr>		
<?php
    mysql_query("SET NAMES 'utf8'");
    $query1=mysql_query("select * from chocolate");
     
	
while($row=mysql_fetch_array($query1)){
$main="<tr>
<td width=130><img src='image1/c{$row['id']}.jpg' width='130' height='130' alt='' title=''></td>
<td width=100 align='center'><font color=#000000>{$row['chocolatename']}</font></td>
<td style='width=55' align='center'><font color=#000000>{$row['salescost']}</font></td>
<td width=60 align='center'><font color=#000000>{$row['inventory']}</font></td>
<td width=150><font color=#000000>{$row['subcription']}</font></td>
<td width=1><font color=#000000><input type='text' size='5' name='q{$row['id']}' style='width:45px'/></font></td>
<td><button type='submit' name='buy' value='buy'>購買</button></td>
<td style='width=55' align='center'><button type='submit' name='buy' value='car'>Car</button></td>
</tr>";
echo $main;
}

?>
</table>
					</form>	
					
							</div>
		<a href="Car.php?id=<?php echo $id;?>"><img src="images/<?php echo $count;?>.png" style="margin-left:550px;"/>	</a>				
					
						</div>
						
					</div>
					
				</div>
				<!-- end inner page content box background --> 
				
			</div>
			<!-- end of class content -->
			<div id="footer">
				<ul>
					<li>
						<a href="indexEnter.php?id=<?php echo $id;?>">Home</a>
					</li>
					<li>
						<a href="about.php?id=<?php echo $id;?>">About Us</a>
					</li>
					<li>
						<a href="flavors.php?id=<?php echo $id;?>">Chocolate</a>
					</li>
					<li>
						<a href="customerform.php?id=<?php echo $id;?>">Join us</a>
					</li>
					<li>
						<a href="board.php?id=<?php echo $id;?>">Contact Us</a>
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