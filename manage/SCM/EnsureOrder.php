<?php

header("Content-Type:text/html; charset=utf8");
				error_reporting(0);
				$link=@mysql_connect("localhost" , "root" ,"s12202245");

if(!$link) echo "資料庫連不上！";

//設定使用UTF8編碼
mysql_query("SET NAMES 'utf8'");

//選擇資料庫
mysql_select_db('final');

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
						
							<h1 style="width:250px;">Your Order Information</h1>

							<div class="section">
							
							<table border="1" style="width:650px">
							<?php
							
							$s2="select * from order_data ORDER BY no DESC LIMIT 1";
							$r2=mysql_query($s2) or die ("error");
							while($data=mysql_fetch_assoc($r2)){
							 $customer=$data['customer'];
							 $productname=$data['productname'];
							 $address=$data['address'];
							 $tel=$data['phone'];
							 $O_no=$data['no'];
							}
							$s3="select * from order_detail where no='".$O_no."'";
							$r3=mysql_query($s3) or die ("error");
							while($data=mysql_fetch_assoc($r3)){
								$quantity=$data['quantity'];
								$total=$data['revenue'];
							}
							?>
							
<tr>
    <td><font color=#000000>Name</font></td>
    <td><font color=#000000><?php echo $customer;?></font></td>
  </tr>
  <tr>
    <td><font color=#000000>Product</font></td>
    <td><font color=#000000><?php echo $productname;?></font></td>
  </tr>
  <tr>
    <td><font color=#000000>Num</font></td>
    <td><font color=#000000><?php echo $quantity;?></font></td>
  </tr>
  <tr>
    <td><font color=#000000>Total</font></td>
    <td><font color=#000000><?php echo $total;?></font></td>
  </tr>
  <tr>
    <td><font color=#000000>Address</font></td>
    <td><font color=#000000><?php echo $address;?></font></td>
  </tr>
  <tr>
    <td><font color=#000000>Tel</font></td>
    <td><font color=#000000><?php echo $tel;?></font></td>
  </tr>
</table>

			<a href="flavors.php?id=<?php echo $id;?>"><img src="images/ensure.png" style="margin-top: 20px; width: 200px;" /></a>

					
					
							</div>
				
					
						</div>
						
					</div>
					
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
						<a href="index.html">Flavors</a>
					</li>
					<li>
						<a href="dessert.html">Dessert Recipes</a>
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