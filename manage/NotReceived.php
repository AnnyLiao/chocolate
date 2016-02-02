<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>Not Received</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="css/templatemo_main.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="source/jquery.mousewheel-3.0.6.pack.js"></script>
<link rel="stylesheet" href="source/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="source/jquery.fancybox.pack.js"></script>
<link rel="stylesheet" href="source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
<script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js"></script>
<link rel="stylesheet" href="source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
<script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js"></script>

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
		 <li ><a href="data-visualization.php"><i class="fa fa-cubes"></i>Data Visualization</a></li>
          <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-database"></i>Order<div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="Order.php">New Order</a></li>
              <li><a href="Delivery_Pending.php">Delivery Pending</a></li>
              <li><a href="AllOrder.php">All Orders</a></li>
<li><a href="Order_detail.php">Order Detail</a></li> 			  
              <li><a href="DeliveryAgency.php">Delivery Agencies</a></li>
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
              
            </ul>
          </li>
		  <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-database"></i>Purchase<div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="newpurchase.php">New Purchase</a></li>
			  <li><a href="NotReceived.php">Not Received</a></li>
              <li><a href="Allpurchase.php">All Purchase</a></li>
              <li><a href="supplier.php">Suppliers</a></li>
            </ul>
          </li>
		  <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-database"></i>Finance<div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="Revenue.php">Revenue</a></li>
			  <li><a href="Cost.php">Cost</a></li>
			  <li><a href="Salary_R.php">Salary Reporting</a></li>
              <li><a href="Financial_R.php">Financial Reporting</a></li>
              
            </ul>
          </li>
		  <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-database"></i>Employees<div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="newEmployee.php">New Employees</a></li>
              <li><a href="employee.php">Employees View</a></li>
              
            </ul>
          </li>
          <li><a href="customer.php">Customers View</a></li>
		   <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-database"></i>Message Board<div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="ServiceB.php">Service Department</a></li>
              <li><a href="ProductB.php">Product Department</a></li>
              
            </ul>
          </li>
          <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Sign Out</a></li>
        </ul>
      </div><!--/.navbar-collapse -->

      
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

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          

          
          <div class="row">
            <div class="col-md-12">
              <div class="btn-group pull-right" id="templatemo_sort_btn">
                
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">First Name</a></li>
                  <li><a href="#">Last Name</a></li>
                  <li><a href="#">Username</a></li>
                </ul>
              </div>
              <div class="table-responsive">
                <h4 class="margin-bottom-15">PurchasePro Table</h4>
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      
                      <th>ID</th>
                      <th>Product name</th>
                      <th>Supplier</th>
					  <th>Purchase Date</th>
					  <th>Price</th>
					  <th>Quantity</th>
					  <th>Total</th>
					  <th>Status</th>
					  <th>Handle_by</th>
					  <th>Edit</th>		  
                      <th>Delete</th>
                    </tr>
                  </thead>
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

$sql="select * from purchase_data where status='Not Received'";

//執行SQL語法

$result = mysql_query($sql) or die("error");
?>
                  <tbody>
				 
                    <tr>
                      <?php
				  while($data=mysql_fetch_assoc($result)){
$main.="
<tr>
<td>{$data['id']}</td> 
<td>{$data['productname']}</td>
<td>{$data['supplier']}</td>
<td>{$data['purchasedate']}</td>
<td>{$data['price']}</td>
<td>{$data['quantity']}</td>
<td>{$data['total']}</td>
<td>{$data['status']}</td>
<td>{$data['handle_by']}</td>
<td><a href='editpurchase.php?id=".$data['id']."' class='btn btn-default' >Edit</a></td>                    
<td><a href='delpurchase.php?id=".$data['id']."' class='btn btn-link'>Delete</a></td>
 </tr>
";

}
echo $main;

				  ?>
                     
                    
             
    </div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/templatemo_script.js"></script>
  </body>
</html>