<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>Finance Report</title>
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
          
          
          
		  <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-database"></i>Finance<div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="Revenue.php?userid=<?php echo $userid;?>">Revenue</a></li>
			  <li><a href="Cost.php?userid=<?php echo $userid;?>">Cost</a></li>
			  <li><a href="Salary_R.php?userid=<?php echo $userid;?>">Salary Reporting</a></li>
              <li><a href="Financial_R.php?userid=<?php echo $userid;?>">Financial Reporting</a></li>
              
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
              <a href="../index.html" class="btn btn-primary">Yes</a>
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
              
             
                <h4 class="margin-bottom-15">Revenue Report</h4>
				<div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      
                      <th>Order No</th>
                      <th>Product</th>
                      <th>Selling Quantity</th>
					  <th>Revenue</th>
					  
                    </tr>
                  </thead>
				  <?php
				
				
//設定SQL語法

$sql="select * from chocolate ";

//執行SQL語法

$result = mysql_query($sql) or die("error");
?>
                  <tbody>
				 
                    <tr>
                      <?php
					  $sum=0;
					  $sumN=0;
				  while($data2=mysql_fetch_assoc($result)){
				  $s2="select SUM(quantity) AS num_sum, SUM(revenue) AS revenue_sum from order_detail where productNo='".$data2['id']."'";
				  $r2 = mysql_query($s2) or die("error");
				  while($data=mysql_fetch_assoc($r2)){
				  $quantity=$data['num_sum'];
				  $revenue=$data['revenue_sum'];
				  $sum+=$revenue;
				  $sumN+=$quantity;
				  }
$main.="
<tr>
<td>{$data2['id']}</td> 
<td>{$data2['chocolatename']}</td>
<td align='right'>{$quantity}</td>
<td align='right'>{$revenue}</td>

 </tr>
";


}echo $main;
?>

             </table>
<table class="table" style="font-size: 18px;color: brown;"><tr>
<td style="width: 192px;">Sum</td> 
<td style="width: 361px;"> </td>
<td style="width: 313px;" align="right"><?php echo $sumN;?></td>
<td style="width: 190px;" align="right"><?php echo $sum;?></td>

</tr></table>
			 
			 
                <h4 class="margin-bottom-15">Cost Report</h4>
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      
                      <th>Order No</th>
                      <th>Product</th>
                      <th>Quantity</th>
					  <th>Cost</th>
					  <th>Total</th>
					  
                    </tr>
                  </thead>
				  <?php
				
				
//設定SQL語法

$s4="select * from purchase_data where status='Received'";
$sumC=0;
//執行SQL語法

$r4 = mysql_query($s4) or die("error");
while($d4=mysql_fetch_assoc($r4)){
$sumC+=$d4['total'];
$main4.="
<tr>
<td>{$d4['id']}</td> 
<td>{$d4['productname']}</td>
<td>{$d4['quantity']}</td>
<td>{$d4['price']}</td>
<td align='right'>{$d4['total']}</td>

 </tr>
";


}echo $main4;
?>

             </table>
			 <table class="table" style="font-size: 18px;color: brown;"><tr>
<td style="width: 240px;">Sum</td> 
<td style="width: 269px;"> </td>
<td style="width: 235px;"></td>
<td style="width: 151px;"></td>
<td style="width: 162px; " align="right"><?php echo $sumC;?></td>

</tr></table>
			 <div class="table-responsive">
                <h4 class="margin-bottom-15">Salary Table</h4>
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      
                      <th>ID</th>
                      <th>Employee Name</th>
                      <th>Department</th>
                      <th>Position</th>
					  <th>Salary</th>
					 
                      
                    </tr>
                  </thead>
				  <?php

$s5="select * from salary_data ";

//執行SQL語法

$r5 = mysql_query($s5) or die("error");
$sumS=0;
				  while($d5=mysql_fetch_assoc($r5)){
				  $sumS+=$d5['salary'];
$main5.="
<tr>
<td>{$d5['id']}</td> 
<td>{$d5['employeename']}</td>
<td>{$d5['department']}</td>
<td>{$d5['position']}</td>
<td align='right'>{$d5['salary']}</td>
                  

 </tr>
";

}
echo $main5;

				  ?>
               <tr >
   
                    
            </table> 
			<table class="table" style="font-size: 18px;color: brown;"><tr>
<td style="width: 196px;">Sum</td> 
<td style="width: 305px;"> </td>
<td style="width: 232px;"></td>
<td style="width: 179px;"></td>
<td style="width: 144px; " align="right"><?php echo $sumS;?></td>

</tr></table>

<table class="table" style="font-size: 20px;color: blue;"><tr>
<td style="width: 528px;">Profit</td> 
<td style="width: 528px;" align="right"><?php echo $profit=$sum-$sumC-$sumS;?></td>

</tr></table>
    </div>
	
	
			 
   
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/templatemo_script.js"></script>
  </body>
</html>