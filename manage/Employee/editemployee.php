<html>
<head>
   <title>Edit Employee</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="css/templatemo_main.css">
  </head>
  <body>
<?php
header("Content-Type:text/html; charset=utf8");
error_reporting(0);
$link=@mysql_connect("localhost" , "root" ,"s12202245");

if(!$link) echo "資料庫連不上！";

//設定使用UTF8編碼
mysql_query("SET NAMES 'utf8'");

//選擇資料庫
mysql_select_db('final');


//設定SQL語法


if(isset($_GET['id']))
{
$id=$_GET['id'];
$userid=$_GET['userid'];
if(isset($_POST['submit']))
{

$employeename=$_POST['employeename'];
$department=$_POST['department'];
$position=$_POST['position'];
$birthday=$_POST['birthday'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$address=$_POST['address'];

$query3 = "UPDATE member_data SET  employeename = '$employeename', department = '$department' , position = '$position' , birthday = '$birthday' , telephone = '$telephone' , email = '$email' , address = '$address' where id = '$id'";
	
	
		$q3=mysql_query($query3) or die ("false4".mysql_error());
if($q3)
{
header('location:employee.php?userid='.$userid.'');
}

}
$query1=mysql_query("select * from member_data where id='$id'");
$query2=mysql_fetch_array($query1);
?>
<form method="post" action="">
<div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">ID</label>
                    <input type="text" class="form-control" name="id" value="<?php echo $query2['id']; ?>">                  
                  </div>
				 
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Empolyee name</label>
                    <input type="text" class="form-control" name="employeename" value="<?php echo $query2['employeename']; ?>">                  
                  </div>
                </div>
				<div class="row">
                  
				   <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Department</label>
                    <input type="text" class="form-control" name="department" value="<?php echo $query2['department']; ?>">                  
                  </div>
				  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Position</label>
                    <input type="text" class="form-control" name="position" value="<?php echo $query2['position']; ?>">                  
                  </div>
				  </div>
				  <div class="row">
                  
				   <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Birthday</label>
                    <input type="date" class="form-control" name="birthday" value="<?php echo $query2['birthday']; ?>">                  
                  </div>
				  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Tel</label>
                    <input type="text" class="form-control" name="telephone" value="<?php echo $query2['telephone']; ?>">                  
                  </div>
				  </div>
				  <div class="row">
                  
				   <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Email</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $query2['email']; ?>">                  
                  </div>
				  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Address</label>
                    <input type="text" class="form-control" name="address" value="<?php echo $query2['address']; ?>">                  
                  </div>
				  </div>
				 
				<div class="row templatemo-form-buttons">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                 
                </div>
              </div>
</form>
<?php
}
?>
<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/templatemo_script.js"></script>
</body>
</html>