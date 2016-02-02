<html>
<head>
   <title>Edit Inventory</title>
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
$productname=$_POST['productname'];
$inventory=$_POST['inventory'];

$query3 = "UPDATE chocolate SET chocolatename = '$productname', inventory = '$inventory' where id = '$id'";
	
	
		$q3=mysql_query($query3) or die ("false4".mysql_error());
if($q3)
{
header('location:Inventory.php?userid='.$userid.'');
}

}
$query1=mysql_query("select * from chocolate where id='$id'");
$query2=mysql_fetch_array($query1);
?>
<form method="post" action="">
<div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">ID</label>
                    <input type="text" class="form-control" name="id" value="<?php echo $query2['id']; ?>" readonly>                  
                  </div>
				 
                  <div class="col-md-6 margin-bottom-15">
                    <label for="lastName" class="control-label">Product Name</label>
                    <input type="text" class="form-control" name="productname" value="<?php echo $query2['chocolatename']; ?>">                 
                  </div>
                </div>
				<div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Inventory</label>
                    <input type="text" class="form-control" name="inventory" value="<?php echo $query2['inventory']; ?>">                  
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