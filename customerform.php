<!DOCTYPE html>

<html>
<head>
	<title>LOVE CHOCOLATE</title>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<script language="javascript">

function datacheck()
{
if (user.id.value=="")
{
window.alert("會員帳號不得為空白！");
focusto(0);
return false;
}
if (user.password.value=="")
{
window.alert("會員密碼不得為空白！");
focusto(1);
return false;
}
if (user.name.value=="")
{
window.alert("會員姓名不得為空白！");
focusto(2);
return false;
}
if (user.birthday.value=="")
{
window.alert("生日不得為空白！");
focusto(2);
return false;
}
if (user.telephone.value=="")
{
window.alert("電話不得為空白！");
focusto(2);
return false;
}
if (user.email.value=="")
{
window.alert("電子信箱不得為空白！");
focusto(2);
return false;
}
if (user.address.value=="")
{
window.alert("地址不得為空白！");
focusto(2);
return false;
}
user.submit();
}
function focusto(x) { 
  // 將游標定位於某個表單(Form)欄位
  user.forms[0].elements[x].focus();
}
</script>
</head>
<body>
	<div id="page">
		<div id="sidebar"> <a href="index.html"><img id="logo" src="image1/logo.gif" width="220" height="350" alt=""></a>
			<h2>FLAVOR OF THE DAY</h2>
			<ul>
				<li>
					<a href="flavors.html"><img src="image1/c1.jpg" width="165" height="165" alt=""></a>
					<h3><a href="flavors.html">Gift Chocolate</a></h3>
				</li>
			</ul>
			<h2>POPULAR FLAVORS</h2>
			<ul>
				<li>
					<a href="flavors.html"><img src="image1/c2.jpg" width="165" height="165" alt=""></a>
					<h3><a href="flavors.html">Heart Chocolate</a></h3>
				</li>
				<li>
					<a href="flavors.html"><img src="image1/c3.png" width="165" height="165" alt=""></a>
					<h3><a href="flavors.html">Nut Chocolate</a></h3>
				</li>
				<li>
					<a href="flavors.html"><img src="image1/c4.jpg" width="165" height="165" alt=""></a>
					<h3><a href="flavors.html">Tiny ball Chocolate</a></h3>
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
						<a href="flavors.html">Chocolate</a>
					</li>
					<li>
						<a href="customerform.php">Join us</a>
					</li>
					<li>
						<a href="signin.php">Log in</a>
					</li>
					<li>
						<a href="contact.html">Contact Us</a>
					</li>
				</ul>
			</div>
			<!-- end of header --> 
			<!-- start of class content -->
			<div class="content"> 
				<!-- start of slider-->
				<div class="slider">
					<form id="form1" name="form1" method="post" action="customerinsert.php">

                            <font size="3" color=#000000>Welcome to apply for membership!</font>
                            <br><br>
                            <font color=#000000>Please fill out the form,thank you!</font>
                            <br><br>
                            <img src="image1/1.gif" width="250" height="75"/>
                            <br><br>
                            <font color=#000000>Id<font color="#F80202" size="5">*</font>: </font><input type="text" name="id"/>
                    <br><br>
                    <font color=#000000>Password<font color="#F80202" size="5">*</font>: </font><input type="password" name="password"/>
                    <br><br>
                    <font color=#000000>Name<font color="#F80202" size="5">*</font>: </font><input type="text" name="name"/>
                    <br><br>
                    <font color=#000000>Birthday: </font><input type="date" name="birthday"/>
                    <br><br>
                    <font color=#000000>Telephone<font color="#F80202" size="5">*</font>: </font>
                    <input type="text" name="telephone"/>
                    <br><br>
                    <font color=#000000>Email<font color="#F80202" size="5">*</font>: </font>
                    <input type="text" name="email"/>
                    <br><br>
                    <font color=#000000>address<font color="#F80202" size="5">*</font>: </font><input type="text" name="address"/>
                    <br><br>

                            <input type="submit" name="submit" value="submit" onclick="datacheck()"/>
                            <input type="reset" value="reset"/>
                            </form>
							<br>
							<br>
							<br>
					
				</div>
				<!-- end of slider --> 
				<!-- start of featured-->
				<div class="featured">
					<ul>
						<li>
							
						</li>
					</ul>
				</div>
				<!-- end of featured--> 
				<!-- start of section-->
				<div class="section">
					<div class="about">
						
					</div>
					
						
					</div>
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