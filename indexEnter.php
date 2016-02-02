﻿<!DOCTYPE html>

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
					<li style="margin-left:20px; font-family: Microsoft JhengHei;font-size: 14px;">
						<?php
						if(isset($_GET['id'])){
						$id=$_GET['id'];
						
						}
						
						?>
						<font color="#000088"><?php echo $id;?> 歡迎光臨</font>
						
					</li>
					

				</ul>
				<a href="index.html" style="padding: 0px 0px 0px 10px;"><font color="#FF0000">登出</font></a>
			</div>
			<!-- end of header --> 
			<!-- start of class content -->
			<div class="content"> 
				<!-- start of slider-->
				<a href="flavors.html"><img src="image1/cover3.jpg" width="680" height="200" alt="Frosty Sweet" title="Frosty Sweet"></a>
				<!-- end of slider --> 
				<!-- start of featured-->
				<div class="featured">
					<ul>
						<li>
							<a href="flavors.php"><img src="image1/c1-1.jpg" width="340" height="167" alt="Frosty Sweet" title="Frosty Sweet"></a>
							<h2><a href="flavors.php"><font color=#FFFFFF>Gift Chocolate</font></a></h2>
						</li>
						<li>
							<a href="flavors.php"><img src="image1/c2-1.jpg" width="340" height="167" alt="Frosty Sweet" title="Frosty Sweet"></a>
							<h2><a href="flavors.php"><font color=#FFFFFF>Heart Chocolate</font></a></h2>
						</li>
						<li>
							<a href="flavors.php"><img src="image1/c3-1.jpg" width="340" height="167" alt="Frosty Sweet" title="Frosty Sweet"></a>
							<h2><a href="flavors.php"><font color=#FFFFFF>Nut Chocolate</font></a></h2>
						</li>
						<li>
							<a href="flavors.php"><img src="image1/c4-1.jpg" width="340" height="167" alt="Frosty Sweet" title="Frosty Sweet"></a>
							<h2><a href="flavors.php"><font color=#FFFFFF>Tiny Ball Chocolate</font></a></h2>
						</li>
					</ul>
				</div>
				<!-- end of featured--> 
				<!-- start of section-->
				<div class="section">
					<div class="about">
						<h2><a href="index.html">What makes us different?</a></h2>
						<p>
							This website that you can choose your favorite chocolate.
						</p>
						<p>
							We hope every chocolate can bring happiness to you.
						</p>
						<p>
							If you're having problems, you can press "Contact us" button and leave your message that we'll do us best to solve it.
						</p>
						
					</div>
					<div class="connect"><a href="index.html"><img src="images/sign-board.gif" width="234" height="222" alt=""></a>
						
						<span>Get the latest news and updates!</span>
						
					</div>
				</div>
				<!-- end of section--> 
				<!-- start of article comment-->
				
				<!-- end of article comment--> 
			</div>
			<!-- end of class content -->
			<div id="footer">
				<ul>
					<li>
						<a href="index.html">Home</a>
					<li>
						<a href="about.html">About Us</a>
					</li>
					<li>
						<a href="flavors.html">Chocolate</a>
					</li>
					<li>
						<a href="customerform.php">Join us</a>
					</li>
					<li>
						<a href="signin.php">Log in</a>
					</li>
					<li>
						<a href="board.php">Contact Us</a>
					</li>
				</ul>
			
			</div>
		</div>
		<!-- end of ID content--> 
	</div>
</body>
</html>