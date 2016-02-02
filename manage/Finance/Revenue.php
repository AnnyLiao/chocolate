<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>Revenue</title>
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
              <div class="btn-group pull-right" id="templatemo_sort_btn">
                <form class="navbar-form" action="Revenue_Search.php?userid=<?php echo $userid;?>" method="Post">
				<select  name="month">
				<option value="" class="form-control"></option>
				<option value="1" class="form-control">一月</option>
				<option value="2" class="form-control">二月</option>
				<option value="3" class="form-control">三月</option>
				<option value="4" class="form-control">四月</option>
				<option value="5" class="form-control">五月</option>
				<option value="6" class="form-control">六月</option>
				<option value="7" class="form-control">七月</option>
				<option value="8" class="form-control">八月</option>
				<option value="9" class="form-control">九月</option>
				<option value="10" class="form-control">十月</option>
				<option value="11" class="form-control">十一月</option>
				<option value="12" class="form-control">十二月</option>
				</select>

              <button type="submit"class="btn btn-default">Go</button>
            </form>  
                
              </div>
              <div class="table-responsive">
                <h4 class="margin-bottom-15">Revenue Report</h4>
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
				  while($data2=mysql_fetch_assoc($result)){
				  $s2="select SUM(quantity) AS num_sum, SUM(revenue) AS revenue_sum from order_detail where productNo='".$data2['id']."'";
				  $r2 = mysql_query($s2) or die("error");
				  while($data=mysql_fetch_assoc($r2)){
				  $quantity=$data['num_sum'];
				  $revenue=$data['revenue_sum'];
				  }
$main.="
<tr>
<td>{$data2['id']}</td> 
<td>{$data2['chocolatename']}</td>
<td>{$quantity}</td>
<td>{$revenue}</td>

 </tr>
";


}echo $main;
?>
             </table>
    </div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/templatemo_script.js"></script>
  </body>
</html>