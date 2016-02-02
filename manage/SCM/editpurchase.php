<html>
<head>
   <title>Edit Purchase</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="css/templatemo_main.css">
  <script type="text/javascript">
function cal()
{ var v1 = document.getElementById("price").value;
var v2=document.getElementById("quantity").value;
var v3=v1*v2;
 
 document.getElementById("total").value=v3;
  
}

</script>
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
$supplier=$_POST['supplier'];
$purchasedate=$_POST['purchasedate'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$total=$_POST['total'];
$status=$_POST['status'];
$handle_by=$_POST['handle_by'];

$query3 = "UPDATE purchase_data SET productname = '$productname', supplier = '$supplier' , purchasedate = '$purchasedate' , price = '$price' , quantity = '$quantity', total = '$total', status = '$status', handle_by = '$handle_by' where id = '$id'";
	
	
		$q3=mysql_query($query3) or die ("false4".mysql_error());
if($q3)
{
echo "<script>alert('修改成功'); location.href = 'Allpurchase.php?userid=$userid';</script>";
}

}
$query1=mysql_query("select * from purchase_data where id='$id'");
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
                    <input type="text" class="form-control" name="productname" value="<?php echo $query2['productname']; ?>">                 
                  </div>
                </div>
				<div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Supplier</label>
                    <input type="text" class="form-control" name="supplier" value="<?php echo $query2['supplier']; ?>">                  
                  </div>
				  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Purchase Date</label>
                    <input type="date" class="form-control" name="purchasedate" value="<?php echo $query2['purchasedate']; ?>">                  
                  </div>
				  </div>
				  <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Price</label>
                    <input type="text" class="form-control" name="price" onchange="cal(this.id)" id="price" value="<?php echo $query2['price']; ?>"> 
                  </div>
				  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Quantity</label>
<input type="text" class="form-control" name="quantity" id="quantity" onchange="cal(this.id)" value="<?php echo $query2['quantity']; ?>">            
                  </div>
				  </div>
				  <div class="row">
				  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Total</label>
		<input type="text" class="form-control" name="total" id="total" readonly value="<?php echo $query2['total']; ?>">             
                  </div>
				  <div class="col-md-6 margin-bottom-15">
                    <label for="lastName" class="control-label">Status</label>
					<select class="form-control" name="status" >
					<?php
					if($query2['status']=="Received"){
					?>
					<option value="Received">Received</option>
					<option value="Not Received">Not Received</option><?php }else{?>
					
					<option value="Not Received">Not Received</option>
					<option value="Received">Received</option><?php }?>
					
					</select>
                   
                  </div>
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