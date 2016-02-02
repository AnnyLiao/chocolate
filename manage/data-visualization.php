<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>Product Data Visualization</title>
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

//設定SQL語法?>
  <div id="main-wrapper">
    <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"></div>
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

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          
          <h1>Product Data Visualization</h1>
                  
          <div class="templatemo-charts">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-info">
                  <div class="panel-heading">Product Sales Pie Chart</div>
                </div>
                <div class="row templatemo-chart-row">

                  <div class="templatemo-chart-box col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <canvas id="templatemo-pie-chart"></canvas>
                    <h4 style="margin-left: 30px;">Number of Product Sales</h4>
                   
                  </div>
                </div>                  
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="panel panel-success">
                  <div class="panel-heading">Product Revenue</div>
                  <canvas id="templatemo-line-chart"></canvas>
                </div>                       
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="panel panel-primary">
                  <div class="panel-heading">Product Inventory</div>
                  <canvas id="templatemo-bar-chart"></canvas>
                </div>
              </div> 
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
    <script src="js/Chart.min.js"></script>
    <script src="js/templatemo_script.js"></script>
    <script type="text/javascript">
      // Line chart
      var Factor1 = function(){ 
	  <?php
		$p1="select * from chocolate where id='1' ";
		$ri1 = mysql_query($p1) or die("error");
		 while($di1=mysql_fetch_assoc($ri1)){
				  $i1=$di1['inventory'];
				  }
	  ?>
	  return <?php echo $i1;?>};//p1
	  var Factor2 = function(){ 
	  <?php
		$p2="select * from chocolate where id='2' ";
		$ri2 = mysql_query($p2) or die("error");
		 while($di2=mysql_fetch_assoc($ri2)){
				  $i2=$di2['inventory'];
				  }
	  ?>
	  return <?php echo $i2;?>};//p2
	  var Factor3 = function(){ 
	  <?php
		$p3="select * from chocolate where id='3' ";
		$ri3 = mysql_query($p3) or die("error");
		 while($di3=mysql_fetch_assoc($ri3)){
				  $i3=$di3['inventory'];
				  }
	  ?>
	  return <?php echo $i3;?>};//p3
	  var Factor4 = function(){ 
	  <?php
		$p4="select * from chocolate where id='4' ";
		$ri4 = mysql_query($p4) or die("error");
		 while($di4=mysql_fetch_assoc($ri4)){
				  $i4=$di4['inventory'];
				  }
	  ?>
	  return <?php echo $i4;?>};//p4
	  var Factor5 = function(){ 
	  <?php
		$p5="select * from chocolate where id='5' ";
		$ri5= mysql_query($p5) or die("error");
		 while($di5=mysql_fetch_assoc($ri5)){
				  $i5=$di5['inventory'];
				  }
	  ?>
	  return <?php echo $i5;?>};//p5
      var lineChartData1 = {
        labels : ["Chocolate Gift","Heart Chocolate","Nut Chocolate","Tiny Ball Chocolate","Red Wine Chocolate"],
        datasets : [
        {
          label: "My First dataset",
          fillColor : "rgba(220,220,220,0.2)",
          strokeColor : "rgba(220,220,220,1)",
          pointColor : "rgba(220,220,220,1)",
          pointStrokeColor : "#fff",
          pointHighlightFill : "#fff",
          pointHighlightStroke : "rgba(220,220,220,1)",
          data : [Factor1(),Factor2(),Factor3(),Factor4(),Factor5()]
        }
        
        ]

      } // lineChartData1
	  
	  var SFactor1 = function(){ 
	  <?php
		$s1="select SUM(revenue) AS revenue_sum from order_detail where productNo='1'";
		$rs1 = mysql_query($s1) or die("error");
		 while($ds1=mysql_fetch_assoc($rs1)){
				  $s1=$ds1['revenue_sum'];
				  }
	  ?>
	  return <?php echo $s1;?>};//s1
	  var SFactor2 = function(){ 
	  <?php
		$s2="select SUM(revenue) AS revenue_sum from order_detail where productNo='2' ";
		$rs2 = mysql_query($s2) or die("error");
		 while($ds2=mysql_fetch_assoc($rs2)){
				  $s2=$ds2['revenue_sum'];
				  }
	  ?>
	  return <?php echo $s2;?>};//s2
	  var SFactor3 = function(){ 
	  <?php
		$s3="select  SUM(revenue) AS revenue_sum from order_detail where productNo='3' ";
		$rs3 = mysql_query($s3) or die("error");
		 while($ds3=mysql_fetch_assoc($rs3)){
				  $s3=$ds3['revenue_sum'];
				  }
	  ?>
	  return <?php echo $s3;?>};//s3
	  var SFactor4 = function(){ 
	  <?php
		$s4="select  SUM(revenue) AS revenue_sum from order_detail where productNo='4'  ";
		$rs4 = mysql_query($s4) or die("error");
		 while($ds4=mysql_fetch_assoc($rs4)){
				  $s4=$ds4['revenue_sum'];
				  }
	  ?>
	  return <?php echo $s4;?>};//s4
	  var SFactor5 = function(){ 
	  <?php
		$s5="select  SUM(revenue) AS revenue_sum from order_detail where productNo='5' ";
		$rs5= mysql_query($s5) or die("error");
		 while($ds5=mysql_fetch_assoc($rs5)){
				  $s5=$ds5['revenue_sum'];
				  }
	  ?>
	  return <?php echo $s5;?>};//s5
	  
	  var lineChartData2 = {
        labels : ["Chocolate Gift","Heart Chocolate","Nut Chocolate","Tiny Ball Chocolate","Red Wine Chocolate"],
        datasets : [
        {
          label: "My First dataset",
          fillColor : "rgba(220,220,220,0.2)",
          strokeColor : "rgba(220,220,220,1)",
          pointColor : "rgba(220,220,220,1)",
          pointStrokeColor : "#fff",
          pointHighlightFill : "#fff",
          pointHighlightStroke : "rgba(220,220,220,1)",
          data : [SFactor1(),SFactor2(),SFactor3(),SFactor4(),SFactor5()]
        }
        
        ]

      } // lineChartData2
	
      var pieChartData = [
      {
	  <?php
	$s1="select SUM(quantity) AS num_sum, SUM(revenue) AS revenue_sum from order_detail where productNo='1' ";
	$r1 = mysql_query($s1) or die("error");
				  while($d1=mysql_fetch_assoc($r1)){
				  $q1=$d1['num_sum'];
				  $revenue=$d1['revenue_sum'];}

	?>
        value: <?php echo $q1;?>,
        color:"#FF91FE",
        highlight: "#FFCDFE",
        label: "Chocolate Gift"
      },
      {
	  <?php
	$s2="select SUM(quantity) AS num_sum, SUM(revenue) AS revenue_sum from order_detail where productNo='2' ";
	$r2 = mysql_query($s2) or die("error");
				  while($d2=mysql_fetch_assoc($r2)){
				  $q2=$d2['num_sum'];
				  $revenue=$d2['revenue_sum'];}

	?>
        value: <?php echo $q2;?>,
        color: "#FF9291",
        highlight: "#FFCECD",
        label: "Heart Chocolate"
      },
      {
	  <?php
	$s3="select SUM(quantity) AS num_sum, SUM(revenue) AS revenue_sum from order_detail where productNo='3' ";
	$r3 = mysql_query($s3) or die("error");
				  while($d3=mysql_fetch_assoc($r3)){
				  $q3=$d3['num_sum'];
				  $revenue=$d3['revenue_sum'];}

	?>
        value: <?php echo $q3;?>,
        color: "#FEFF91",
        highlight: "#FEFFCD",
        label: "Nut Chocolate"
      },
	  {
	  <?php
	$s4="select SUM(quantity) AS num_sum, SUM(revenue) AS revenue_sum from order_detail where productNo='4' ";
	$r4 = mysql_query($s4) or die("error");
				  while($d4=mysql_fetch_assoc($r4)){
				  $q4=$d4['num_sum'];
				  $revenue=$d4['revenue_sum'];}

	?>
        value: <?php echo $q4;?>,
        color: "#91FF92",
        highlight: "#CDFFCE",
        label: "Tiny Ball Chocolate"
      },
	  {
	  <?php
	$s5="select SUM(quantity) AS num_sum, SUM(revenue) AS revenue_sum from order_detail where productNo='5' ";
	$r5 = mysql_query($s5) or die("error");
				  while($d5=mysql_fetch_assoc($r5)){
				  $q5=$d5['num_sum'];
				  $revenue=$d5['revenue_sum'];}

	?>
        value: <?php echo $q5;?>,
        color: "#91FEFF",
        highlight: "#CDFEFF",
        label: "Red Wine Chocolate"
      }
      ]; // pie chart data

      // radar chart
     

      window.onload = function(){
        var ctx_line = document.getElementById("templatemo-line-chart").getContext("2d");
        var ctx_bar = document.getElementById("templatemo-bar-chart").getContext("2d");
        var ctx_pie = document.getElementById("templatemo-pie-chart").getContext("2d");
       
        

        window.myLine = new Chart(ctx_line).Line(lineChartData2, {
          responsive: true
        });
        window.myBar = new Chart(ctx_bar).Bar(lineChartData1, {
          responsive: true
        });
        window.myPieChart = new Chart(ctx_pie).Pie(pieChartData,{
          responsive: true
        });
        
        
      }
    </script>
  </body>
</html>