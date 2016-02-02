<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>Product Management Department</title>
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

if(isset($_GET['id'])){
	$username=$_GET['id'];
						
	}
	$sqle="select * from member_data where id='".$username."'";
	$re1 = mysql_query($sqle) or die("error");
		 while($de1=mysql_fetch_assoc($re1)){
				  $name=$de1['employeename'];
				  }

//設定SQL語法?>
  <div id="main-wrapper">
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
          
          <li><a href="index.php?id=<?php echo $username;?>"><i class="fa fa-home"></i>Dashboard</a></li>
          <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-database"></i>Order<div class="pull-right"><span class="caret"></span></div>
            </a>
           <ul class="templatemo-submenu">
              <li><a href="Order.php?id=<?php echo $username;?>">Pending</a></li>
              <li><a href="Delivery_Pending.php?userid=<?php echo $username;?>">Delivery Pending</a></li>
              <li><a href="AllOrder.php?userid=<?php echo $username;?>">All Orders</a></li>  
<li><a href="Order_detail.php?userid=<?php echo $username;?>">Order Detail</a></li> 				  
              <li><a href="DeliveryAgency.php?userid=<?php echo $username;?>">Delivery Agencies</a></li>
            </ul>
          </li>
			 <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-database"></i>Products<div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="newproduct.php?userid=<?php echo $username;?>">New Product</a></li>
              <li><a href="Inventory.php?userid=<?php echo $username;?>">Inventory</a></li>
              <li><a href="allorderPro.php?userid=<?php echo $username;?>">All Products</a></li>             
              
            </ul>
          </li>
		  <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-database"></i>Purchase<div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="newpurchase.php?userid=<?php echo $username;?>">New Purchase</a></li>
			  <li><a href="NotReceived.php?userid=<?php echo $username;?>">Not Received</a></li>
              <li><a href="Allpurchase.php?userid=<?php echo $username;?>">All Purchase</a></li>
              <li><a href="supplier.php?userid=<?php echo $username;?>">Suppliers</a></li>
            </ul>
          </li>
		   <li><a href="ProductB.php?userid=<?php echo $username;?>">Message Board</a></li>
          <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Sign Out</a></li>
        </ul>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          
          <h1>Product Data Visualization</h1>
                  
          <div class="templatemo-charts">
            
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="panel panel-success" style="border-color: rgb(222, 140, 228);">
                  <div class="panel-heading" style="background-color: rgb(222, 140, 228);border-color: rgb(222, 140, 228);color: azure;">Today's Product Order</div>
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
              <a href="../index.html" class="btn btn-primary">Yes</a>
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
	  $da=date('Y-m-d');
		$d1="select no from order_data where productname='Chocolate Gift' and date='".$da."'";
		$rd1 = mysql_query($d1) or die("error");
		while($dd1=mysql_fetch_assoc($rd1)){
			$d1=$dd1['no'];
		
				
		$s1="select quantity from order_detail where productNo='1' and no='".$d1."'";

		$rs1 = mysql_query($s1) or die("error");
		 while($ds1=mysql_fetch_assoc($rs1)){
				  $S1+=$ds1['quantity'];
				  
				  }}
				  if($S1==0)$S1=0;
	  ?>
	  return <?php echo $S1;?>};//s1
	  var SFactor2 = function(){ 
	  <?php
	   $da=date('Y-m-d');
		$d2="select no from order_data where productname='Heart Chocolate' and date='".$da."'";
		$rd2 = mysql_query($d2) or die("error");
		 while($dd2=mysql_fetch_assoc($rd2)){
			$d2=$dd2['no'];
				  
		$s2="select quantity from order_detail where productNo='2' and no='".$d2."'";
		$rs2 = mysql_query($s2) or die("error");
		 while($ds2=mysql_fetch_assoc($rs2)){
				  $S2+=$ds2['quantity'];
				  }}
				  if($S2==0)$S2=0;
	  ?>
	  return <?php echo $S2;?>};//s2
	  var SFactor3 = function(){ 
	  <?php
	  $da=date('Y-m-d');
		$d3="select no from order_data where productname='Nut Chocolate' and date='".$da."'";
		$rd3 = mysql_query($d3) or die("error");
		 while($dd3=mysql_fetch_assoc($rd3)){
			$d3=$dd3['no'];
				  
		$s3="select quantity from order_detail where productNo='3' and no='".$d3."'";
		$rs3 = mysql_query($s3) or die("error");
		 while($ds3=mysql_fetch_assoc($rs3)){
				  $S3+=$ds3['quantity'];
				  }}
				  if($S3==0)$S3=0;
	  ?>
	  return <?php echo $S3;?>};//s3
	  var SFactor4 = function(){ 
	  <?php
	   $da=date('Y-m-d');
		$d4="select no from order_data where productname='Tiny Ball Chocolate' and date='".$da."'";
		$rd4 = mysql_query($d4) or die("error");
		  while($dd4=mysql_fetch_assoc($rd4)){
			$d4=$dd4['no'];
				  
		$s4="select quantity from order_detail where productNo='4' and no='".$d4."'";
		$rs4 = mysql_query($s4) or die("error");
		 while($ds4=mysql_fetch_assoc($rs4)){
				   $S4+=$ds4['quantity'];
				  }}
				  if($S4==0)$S4=0;
	  ?>
	  return <?php echo $S4;?>};//s4
	  var SFactor5 = function(){ 
	  <?php
	  $da=date('Y-m-d');
		$d5="select no from order_data where productname='Red Wine Chocolate' and date='".$da."'";
		$rd5 = mysql_query($d5) or die("error");
		 while($dd5=mysql_fetch_assoc($rd5)){
			$d5=$dd5['no'];
				  
		$s5="select quantity from order_detail where productNo='5' and no='".$d5."'";
		$rs5 = mysql_query($s5) or die("error");
		 while($ds5=mysql_fetch_assoc($rs5)){
				   $S5+=$ds5['quantity'];
				  }}
				  if($S5==0)$S5=0;
	  ?>
	  return <?php echo $S5;?>};//s5
	  
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
	
     
     

      window.onload = function(){
        var ctx_line = document.getElementById("templatemo-line-chart").getContext("2d");
        var ctx_bar = document.getElementById("templatemo-bar-chart").getContext("2d");
       
        

        window.myLine = new Chart(ctx_line).Line(lineChartData2, {
          responsive: true
        });
        window.myBar = new Chart(ctx_bar).Bar(lineChartData1, {
          responsive: true
        });
       
        
      }
    </script>
  </body>
</html>