﻿<!DOCTYPE html>
<head>
   <title>Insert Purchase</title>
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

$userid=$_GET['userid'];
$sqle="select * from member_data where id='".$userid."'";
	$re1 = mysql_query($sqle) or die("error");
		 while($de1=mysql_fetch_assoc($re1)){
				  $name=$de1['employeename'];
				  }

?>
  <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
       <div class="logo"><h4 style="margin-left: 10px;"><?php echo $name;?> 歡迎您!</h4></div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
      </div>   
    </div>
    <div class="template-page-wrapper">
      <div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">
		<li><a href="index.php?id=<?php echo $userid;?>"><i class="fa fa-home"></i>Dashboard</a></li>
       <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-database"></i>Order<div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="Order.php?id=<?php echo $userid;?>">Pending</a></li>
              <li><a href="Delivery_Pending.php?userid=<?php echo $userid;?>">Delivery Pending</a></li>
              <li><a href="AllOrder.php?userid=<?php echo $userid;?>">All Orders</a></li>  
<li><a href="Order_detail.php?userid=<?php echo $userid;?>">Order Detail</a></li> 			  
              <li><a href="DeliveryAgency.php?userid=<?php echo $userid;?>">Delivery Agencies</a></li>
            </ul>
          </li>
         
			 <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-database"></i>Products<div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="newproduct.php?userid=<?php echo $userid;?>">New Product</a></li>
              <li><a href="Inventory.php?userid=<?php echo $userid;?>">Inventory</a></li>
              <li><a href="allorderPro.php?userid=<?php echo $userid;?>">All Products</a></li>             
              
            </ul>
          </li>
		  <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-database"></i>Purchase<div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="newpurchase.php?userid=<?php echo $userid;?>">New Purchase</a></li>
			  <li><a href="NotReceived.php?userid=<?php echo $userid;?>">Not Received</a></li>
              <li><a href="Allpurchase.php?userid=<?php echo $userid;?>">All Purchase</a></li>
              <li><a href="supplier.php?userid=<?php echo $userid;?>">Suppliers</a></li>
            </ul>
          </li>
		  <li><a href="ProductB.php?userid=<?php echo $userid;?>">Message Board</a></li>
          <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Sign Out</a></li>
        </ul>
      </div><!--/.navbar-collapse -->

      
      
    </div>
      
      

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          
          
          <div class="row">
            <div class="col-md-12">
              <form role="form" id="templatemo-preferences-form" action="InsertPurchase.php?userid=<?php echo $userid;?>" method="Post">
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Product Name</label>
					<input type="text" class="form-control" name="productname">  
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

$sql="select * from chocolate ";

//執行SQL語法
$result = mysql_query($sql) or die("error");

?>


</select>
                 
                  </div>
				 
                   <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Supplier</label> 
					<a href="newSupplier.php"><img src="plus.png" style='margin-left:20px'/></a>					
						<?php
						$sql="select * from supplier_data ";

//執行SQL語法
$result = mysql_query($sql) or die("error");

?>
<select name="supplier" class="form-control">
<option>select</option>

<?php while($data=mysql_fetch_assoc($result)) {?>
<option value="<?php echo $data['id']?>" ><?php echo $data['suppliercompany']?></option>
<?php }?>

</select>

                  </div>
                </div>
				<div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Purchase Date</label>
					<input type="date" class="form-control" name="purchasedate">   
                  </div>
				 
                  <div class="col-md-6 margin-bottom-15">
                    <label for="lastName" class="control-label">Price</label>
                    <input type="text" class="form-control" name="price" onchange="cal(this.id)" id="price" value="<?php echo $data['cost']?>">                 
                  </div>
                </div>
				<div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Quantity</label>
                    <input type="text" class="form-control" name="quantity" id="quantity" onchange="cal(this.id)">                  
                  </div>
				 
                  <div class="col-md-6 margin-bottom-15">
                    <label for="lastName" class="control-label">Total</label>
                    <input type="text" class="form-control" name="total" id="total" readonly value="">
                  </div>
                </div>
				<div class="row">
				<div class="col-md-6 margin-bottom-15">
                    <label for="lastName" class="control-label">Status</label>
					<select class="form-control" name="status" >
					<option value="Not Received">Not Received</option>
					<option value="Received">Received</option>
					</select>
                   
                  </div>
				  <div class="col-md-6 margin-bottom-15">
                    <label for="lastName" class="control-label">Handle By</label>
                    <input type="text" class="form-control" name="handle">
                  </div>
				</div>
				<div class="row templatemo-form-buttons">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-default">Reset</button>    
                </div>
              </div>
				</form>
               </div>
			   </div>
			   </div>
			   </div>

      <!-- Modal -->
      <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
            </div>
            <div class="modal-footer">
              <a href="index.html" class="btn btn-primary">Yes</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
          </div>
        </div>
      </div>
    
    
  </div>
</div>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/templatemo_script.js"></script>
</body>
</html>