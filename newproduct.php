<!DOCTYPE html>
<head>
   <title></title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="css/templatemo_main.css">

</head>
<body>
  <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
       
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
       
          <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-database"></i>Order<div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="#">New Order</a></li>
              <li><a href="#">Delivery Pending</a></li>
              <li><a href="#">All Orders</a></li>             
              <li><a href="#">Delivery Agencies</a></li>
            </ul>
          </li>
			 <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-database"></i>Products<div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="newproduct.php">New Product</a></li>
              <li><a href="Inventory.php">Inventory</a></li>
              <li><a href="allorderPro.php">All Products</a></li>             
              <li><a href="supplier.php">Suppliers</a></li>
            </ul>
          </li>
		  <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-database"></i>Purchase<div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="newpurchase.php">New Purchase</a></li>
              <li><a href="Allpurchase.php">All Orders</a></li>
              
            </ul>
          </li>
		  <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-database"></i>Employees<div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="newEmpolyee.php">New Employees</a></li>
              <li><a href="empolyee.php">Emplyees View</a></li>
              
            </ul>
          </li>
          <li><a href="customer.php">Customers View</a></li>
          <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Sign Out</a></li>
        </ul>
      </div><!--/.navbar-collapse -->

      
      
    </div>
      
      

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          
          
          <div class="row">
            <div class="col-md-12">
              <form role="form" id="templatemo-preferences-form" action="InsertProduct.php" method="Post">
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Product Name</label>
                    <input type="text" class="form-control" name="productname">                  
                  </div>
				 
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Supplier</label>
					<a href="newSupplier.php"><img src="plus.png" style='margin-left:20px'/></a>
					
					
					
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
                    <label for="lastName" class="control-label">Cost</label>
                    <input type="text" class="form-control" name="cost">                 
                  </div>
				  
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Sales Cost</label>
                    <input type="text" class="form-control" name="salescost">                  
                  </div>
              </div>
				 
				 <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="lastName" class="control-label">Inventory</label>
                    <input type="text" class="form-control" name="inventory">
					</div>					
						<div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Subcription</label>
                    <input type="text" class="form-control" name="subcription">                  
                  </div>
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

      <!-- Modal -->
      <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
            </div>
            <div class="modal-footer">
              <a href="sign-in.html" class="btn btn-primary">Yes</a>
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