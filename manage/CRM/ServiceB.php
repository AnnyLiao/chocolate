<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>Message Board</title>
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
		 
          <li><a href="customer.php?userid=<?php echo $userid;?>">Customers View</a></li>
		   
              <li><a href="ServiceB.php?userid=<?php echo $userid;?>">Message Board</a></li>
              
              
          
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
             
              <div class="table-responsive">
                <h4 class="margin-bottom-15">Message Board</h4>
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      
                      <th>No</th>
					 <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
					  <th>Context</th>
					  <th>Date</th>
					  <th>Department</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
				  <?php
				
$sqlstr = "SELECT * FROM board where department='客服部' ORDER BY no ASC"; //修改成你要的 SQL 語法
$result = mysql_query($sqlstr,$link) or die ($sqlstr);
$data_nums = mysql_num_rows($result);
$per = 10; //每頁顯示項目數量
$pages = ceil($data_nums/$per); //取得大於指定數的最小整數值，就是總頁數啦
if ( !isset($_GET["page"]) ) {
 $page=1; //設定起始頁
 } else {
 $page = intval($_GET["page"]); //確認頁數只能夠是數值資料
 $page = ($page > 0) ? $page : 1; //確認頁數大於零
 $page = ($pages > $page) ? $page : $pages; //確認使用者沒有輸入太神奇的數字
 }
$start = ($page-1)*$per; //每頁起始資料序號
$result = mysql_query($sqlstr.' LIMIT '.$start.', '.$per,$link) or die ($sqlstr);

?>
                  <tbody>
				 
                    <tr>
                      <?php
				  while($data=mysql_fetch_assoc($result)){
$main.="
<tr>
<td>{$data['no']}</td> 
<td>{$data['id']}</td>
<td>{$data['name']}</td>
<td>{$data['email']}</td>
<td>{$data['context']}</td>
<td>{$data['date']}</td>
<td>{$data['department']}</td>
<td><a href='delSBoard.php?id=".$data['no']."&userid=$userid' class='btn btn-link'>Delete</a></td>
 </tr>
";

}
echo $main;
echo "</table>";
echo "<br /><a href=ServiceB.php?page=1&userid=$userid>最前</a> ";
echo "第 ";
for( $i=1 ; $i<=$pages ; $i++ ) {
 if ( $page-3 < $i && $i < $page+3 ) {
  echo "<a href=?page=".$i."&userid=$userid>".$i."</a> ";
 }
 //if ( $i % 5 == 0 ) echo "<br />";
} //分頁頁碼
echo " 頁 <a href=?page=".$pages."&userid=$userid>最後</a><br /><br />";
echo '共 '.$data_nums.' 筆、在 '.$page.' 頁、共 '.$pages.' 頁';

				  ?>
                     
                    
             
    </div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/templatemo_script.js"></script>
  </body>
</html>