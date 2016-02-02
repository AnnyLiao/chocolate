<!DOCTYPE html>

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
				<!-- start of slider-->
				
							<a href="flavors.html"><img src="image1/cover5.jpg" width="680" height="200" alt="Frosty Sweet" title="Frosty Sweet"></a>
					
					
			
				<!-- end of slider --> 
				<!-- start of featured-->
				<div class="featured">
				 
                    <div class="h3"><b><font size="3" color="#000000">Message Board</font></b></div>
					<a href="view.php?id=<?php echo $id;?>">View Message Board</a>
	                <form name="form1" method="post" action="add.php">
	                <table width="400" border="0">
	                <tr>
					<td><font color="#000000">ID：</font></td>
		            <td><input type="text" name="id" value="<?php echo $id;?>" readonly></td>
		            </tr>
					<tr>
					<td><font color="#000000">Name：</font></td>
		            <td><input type="text" name="name"></td>
					</tr>
	                <tr>
		            <td><font color="#000000">KeyNote：</font></td>
		            <td>
					<select name="keynote">
					<option value="訂購問題、產品問題、運送問題">訂購問題、產品問題、運送問題</option>
					<option value="其他">其他</option>
					</select>
					</td>
	                </tr>
	                <tr>
		            <td><font color="#000000">Content:</font></td>
		            <td><textarea rows="" cols="32" name="context"></textarea></td>
	                </tr>
	                <tr>
                    <td>&nbsp;</td>
                    <td>
					<br>
					<img id="image" src="image1/5.gif" width="250" height="80" alt=""><br>
			        <input type="submit" name="submit" value="submit">
			        <input type="reset" name="reset" value="reset">			
		            </td>
                    </tr>
	                </table>
	                </form>
                   
				</div>
				<!-- end of featured--> 
				<!-- start of section-->
				<div class="section">
					<div class="about">
						
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