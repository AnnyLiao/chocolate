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
	<script>
function ok() {
    alert("購買成功");
}
</script>
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
						
							<h1 >Your Shopping Car Information</h1>

							<div class="section">
							
							<table border="3" style="width:650px;border-style: dashed;">
							<tr>
							<td ><font color=#000000 style="
    font-style: oblique;
    font-size: 15px;">Chocolate name</font></td>
							<td ><font color=#000000 style="
    font-style: oblique;
    font-size: 15px;">Num</font></td>
	<td ><font color=#000000 style="
    font-style: oblique;
    font-size: 15px;">Cost</font></td>
							</tr>
							<?php
							$total=0;
							$s2="select * from Car where customer_id='".$id."'";
							$r2=mysql_query($s2) or die ("error");
							while($data=mysql_fetch_assoc($r2)){
							$total+=$data['cost'];
							 $main=" <tr>
    <td><font color=#000000>{$data['product_name']}</font></td>
    <td><font color=#000000>{$data['num']}</font></td>
	<td><font color=#000000>{$data['cost']}</font></td>
  </tr>";
							 echo $main;
							}
							
							?>
							
</table>
<div style="
    font-size: 25px;
    margin-top: 30px;
    font-family: 微軟正黑體;
    color: cornflowerblue;
    font-weight: bold;
">總共<?php echo $total;?>元</div>
			<a href="flavors.php?id=<?php echo $id;?>"><img src="images/next.png" style="margin-top: 20px; width: 200px;padding-right: 100px;padding-left: 100px;position: absolute;"/></a>
			<a href="Car_Order.php?id=<?php echo $id;?>"><img src="images/checkout.png" style="margin-top: 20px; width: 200px;padding-left: 350px;padding-right: 100px;" onclick="ok()"/></a>

					
					
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