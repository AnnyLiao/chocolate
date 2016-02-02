<html>
<head>
	<title>About - LOVE CHOCOLATE</title>
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
						<div class="body"><a href="#"><img src="image1/cover2.jpg" width="648" height="312" alt=""></a>
							<h1>About Us</h1>
							<ul>
								<li>
									<h2>What is chocolate?</h2>
									<br>
									<p>
										 Chocolate is a typically sweet, usually brown, food preparation of Theobroma cacao seeds, roasted and ground, often flavored, as with vanilla. It is made in the form of a liquid, paste or in a block or used as a flavoring ingredient in other sweet foods. <br>
									</p>
								</li>
								<li>
									<h2>Why we build this shop?</h2>
									<br>
									<p>
										Chocolate is a very amazing food. It can make everyone happy. So we want to bring this happiness to you, and hope you having a wonderful day!<br>
									</p>
								</li>
                                <li>
                                    <h2>Please support us! Let us bring wonderful chocolate to you!</h2>								
								</li>
								
							</ul>
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
			
			</div>
		</div>
		<!-- end of ID content--> 
	</div>
</body>
</html>