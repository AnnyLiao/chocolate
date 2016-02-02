<?php
header("Content-Type:text/html; charset=utf8");
				error_reporting(0);
				$link=@mysql_connect("localhost" , "root" ,"s12202245");

if(!$link) echo "資料庫連不上！";

//設定使用UTF8編碼
mysql_query("SET NAMES 'utf8'");

//選擇資料庫
mysql_select_db('final');
$dt1=date('Y-m-d');




	if(isset($_GET['id'])){
		$id=$_GET['id'];//顧客id
		$sql="select * from customer_data where id='".$id."'";
		$result = mysql_query($sql) or die("false5".mysql_error());
		while($data=mysql_fetch_assoc($result)){
			$name=$data['name'];
			$address=$data['address'];
			$phone=$data['telephone'];
			}
		}
		
		
		
		$sql="select * from Car where customer_id='".$id."'";
		$result = mysql_query($sql) or die("false6".mysql_error());
		while($data=mysql_fetch_assoc($result)){
			$customer_id=$data['customer_id'];
			$product_name=$data['product_name'];
			$num=$data['num'];
			$sql3="INSERT INTO `order_data` (`customer`, `date`, `productname`, `address`, `phone`, `status`) VALUES ('".$name."','".$dt1."','".$product_name."','".$address."', '".$phone."','Pending')";
			mysql_query($sql3) or die ("false5".mysql_error());
			$s3="select * from chocolate where chocolatename='".$product_name."'";
			$r3 = mysql_query($s3) or die("false7".mysql_error());
			while($data=mysql_fetch_assoc($r3)){
			$inventory=$data['inventory'];
			$cost=$data['cost'];
			$selling=$data['salescost'];
			$productNo=$data['id'];}
			$Cost=$cost*$num;
			$revenue=$selling*$num;
			$profit=$revenue-$Cost;
			$NewInventory=$inventory-$num;
			$s4="insert into `order_detail` (`productNo`, `quantity`,  `revenue`) VALUES ('".$productNo."','".$num."','".$revenue."')";
			mysql_query($s4) or die ("false8".mysql_error());
			$query1=mysql_query("delete from Car where customer_id='$id'");
			$query5 = "UPDATE chocolate SET inventory = '$NewInventory' where id = '$productNo'";
			mysql_query($query5) or die ("false8".mysql_error());
			}
			if($sql)
			{
				
				header('location:indexEnter.php?id='.$id.'');
			}
			
		
						
					



?>