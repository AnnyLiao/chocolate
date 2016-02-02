<html>
<head>
   <title>Edit Order</title>
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
if(isset($_POST['submit']))
{
$customer=$_POST['customer'];
$date=$_POST['date'];
$product=$_POST['product'];
$num=$_POST['num'];
$address=$_POST['address'];
$telephone=$_POST['telephone'];
$handle_by=$_POST['handle_by'];

$query3 = "UPDATE order_data SET customer='$customer', date = '$date', productname = '$product', address = '$address', phone = '$telephone', handle_by = '$handle_by' where no = '$id'";
$q3=mysql_query($query3) or die ("false4".mysql_error());
$s1 = "SELECT * FROM chocolate where chocolatename='".$product."'"; //修改成你要的 SQL 語法
$result = mysql_query($s1) or die ("error");
while($data=mysql_fetch_assoc($result)){
$pro_id=$data['id'];
$cost=$data['cost'];
$selling=$data['salescost'];
}
$Cost=$cost*$num;
$revenue=$selling*$num;
$profit=$revenue-$Cost;
$query4= "UPDATE order_detail SET productNo='$pro_id', quantity = '$num', revenue = '$revenue' where no = '$id'";
$q4=mysql_query($query4) or die ("false5".mysql_error());
if($q3 && $q4)
{
echo "<script>alert('修改成功'); location.href = 'AllOrder.php';</script>";;
}

}
$query1=mysql_query("select * from order_data where no='$id'");
$query2=mysql_fetch_array($query1);
$q2=mysql_query("select * from order_detail where no='$id'");
$q3=mysql_fetch_array($q2);
?>
<form method="post" action="">
<div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">No</label>
                    <input type="text" class="form-control" name="no" value="<?php echo $query2['no']; ?>" readonly>                  
                  </div>
				 
                  <div class="col-md-6 margin-bottom-15">
                    <label for="lastName" class="control-label">Customer</label>
                    <input type="text" class="form-control" name="customer" value="<?php echo $query2['customer']; ?>">                 
                  </div>
                </div>
				<div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Date</label>
                    <input type="date" class="form-control" name="date" value="<?php echo $query2['date']; ?>">                  
                  </div>
				  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Product</label>
                    <input type="text" class="form-control" name="product" value="<?php echo $query2['productname']; ?>">                  
                  </div>
				  </div>
				  <div class="row">
			
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Num</label>
                    <input type="text" class="form-control" name="num" value="<?php echo $q3['quantity']; ?>">                  
                  </div>
				  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Address</label>
                    <input type="text" class="form-control" name="address" value="<?php echo $query2['address']; ?>">                  
                  </div>
				  </div>
				  <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Tel</label>
                    <input type="text" class="form-control" name="telephone" value="<?php echo $query2['phone']; ?>">                  
                  </div>
				  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Status</label>
					<Select name="status" class="form-control">
						<?php if ($query2['status']=="Pending"){
						echo "<Option Value='Pending'>Pending</Option>
						<Option Value='Delivery Pending'>Delivery Pending</Option>
						<Option Value='Delivery '>Delivery</Option>";}else if ($query2['status']=="Delivery Pending"){
						echo "<Option Value='Delivery Pending'>Delivery Pending</Option>
						<Option Value='Delivery '>Delivery</Option>
						<Option Value='Pending'>Pending</Option>";
						}else{
						echo "<Option Value='Delivery '>Delivery</Option>
						<Option Value='Pending'>Pending</Option>
						<Option Value='Delivery Pending'>Delivery Pending</Option>";}?>
						</Select>
                                     
                  </div>
				  </div>
				  <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Handle By</label>
                    <input type="text" class="form-control" name="handle_by" value="<?php echo $query2['handle_by']; ?>">                  
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