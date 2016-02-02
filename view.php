<?php

$host = "127.0.0.1";
$user = "root";
$pass = "s12202245";
$database = "final";

$conn = mysql_connect($host, $user, $pass);
@mysql_select_db($database, $conn) or die("Unable to select the database. Please check your MySQL database configuration.");

mysql_query("SET NAMES 'utf8'");
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
		<div id="sidebar"> <a href="indexEnter.php"><img id="logo" src="image1/logo.gif" width="220" height="350" alt=""></a>
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
				<!-- start of slider-->
				
                       
							<a href="board.php" style="font-size: 20px;font-family: cursive;">I want to say...</a>
						
				<!-- end of slider --> 
				<!-- start of featured-->
				<div class="featured">
				
				   <div class="section">
				   
				    <table width=500 border="0" align="center" cellpadding="5" cellspacing="1" >
                    <?php
					
$sqlstr = "SELECT * FROM board ORDER BY date desc"; //修改成你要的 SQL 語法
$result = mysql_query($sqlstr) or die ($sqlstr);
$data_nums = mysql_num_rows($result);
$per = 5; //每頁顯示項目數量
$pages = ceil($data_nums/$per); //取得大於指定數的最小整數值，就是總頁數啦
if ( !isset($_GET["page"]) && !isset($_GET["id"])) {
 $page=1; //設定起始頁
 } else {
 $page = intval($_GET["page"]); //確認頁數只能夠是數值資料
 $page = ($page > 0) ? $page : 1; //確認頁數大於零
 $page = ($pages > $page) ? $page : $pages; //確認使用者沒有輸入太神奇的數字
 }
$start = ($page-1)*$per; //每頁起始資料序號
$result = mysql_query($sqlstr.' LIMIT '.$start.', '.$per) or die ($sqlstr);



while ($row = mysql_fetch_array ($result))
{
	echo "
	<tr bgcolor='#99BBFF'>
                      <td><b>
  	                  My name is：{$row['name']}</b> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
					  <div align='right'><font size='2'>Date: {$row['date']}</font></div></td></tr>
					  <tr bgcolor='#99BBFF'>
					  <td><b><sub>
  	                  KeyNote：{$row['keynote']}</sub></b></td>
                      </tr>
                      <tr bgColor='#CCDDFF'>
                      <td>content：{$row['context']}</td>
                      </tr>";
}

						
						
					
						
					
echo "</table>";

					
echo "<br /><a href=view.php?page=1>最前</a> ";
echo "第 ";
for( $i=1 ; $i<=$pages ; $i++ ) {
 if ( $page-3 < $i && $i < $page+3 ) {
  echo "<a href=?page=".$i.">".$i."</a> ";
 }
 
} //分頁頁碼

echo " 頁 <a href=?page=".$pages.">最後</a><br /><br />";
echo '共 '.$data_nums.' 筆、在 '.$page.' 頁、共 '.$pages.' 頁';
	
?>
                    </div>
				</div>
				<!-- end of featured--> 
				<!-- start of section-->
				<div class="section">
					
					
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