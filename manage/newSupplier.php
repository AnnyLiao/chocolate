<!DOCTYPE html>
<head>
   <title>Insert Supplier</title>
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

      
      
    </div>
      
      

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          
          
          <div class="row">
            <div class="col-md-12">
              <form role="form" id="templatemo-preferences-form" action="InsertSupplier.php" method="Post">
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Supplier Company</label>
                    <input type="text" class="form-control" name="suppliercompany">   
                  </div>
				 
                   <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Liaision Name</label>  
					<input type="text" class="form-control" name="liaisionname">   
                </div>
				</div>
				<div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Tel</label>
					<input type="text" class="form-control" name="telephone">   
                  </div>
				 
                  <div class="col-md-6 margin-bottom-15">
                    <label for="lastName" class="control-label">Email</label>
                    <input type="text" class="form-control" name="email" >                 
                  </div>
                </div>
				<div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Address</label>
                    <input type="text" class="form-control" name="address">                  
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