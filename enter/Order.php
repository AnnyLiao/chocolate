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
for($i=1;$i<=5;$i++){
$q=$_POST['q'.$i.''];
if($q>0){
$sql2="select * from chocolate where id='".$i."'";
$r2=mysql_query($sql2) or die("error");
while($data=mysql_fetch_assoc($r2)){
$chocolatename=$data['chocolatename'];
$productNo=$data['id'];

$selling=$data['salescost'];
$inventory=$data['inventory'];
}
$qantity=$q;
$NewInventory=$inventory-$qantity;
$Cost=$cost*$qantity;
$productID=$i;

}

}



	if(isset($_GET['id'])){
		$id=$_GET['id'];//顧客id
		$sql="select * from customer_data where id='".$id."'";
		$result = mysql_query($sql) or die("error");
		while($data=mysql_fetch_assoc($result)){
			$name=$data['name'];
			$address=$data['address'];
			$phone=$data['telephone'];
			}
		}
						
					
if(isset($_POST['buy'])) {
 $buy=$_POST['buy'];
}
if($buy=="buy"){
$sql3="INSERT INTO `order_data` (`customer`, `date`, `productname`, `address`, `phone`, `status`) VALUES ('".$name."','".$dt1."','".$chocolatename."','".$address."', '".$phone."','Pending')";
mysql_query($sql3) or die ("false5".mysql_error());

$revenue=$selling*$qantity;
$profit=$revenue-$Cost;
$sql4="insert into `order_detail` (`productNo`, `quantity`,  `revenue`) VALUES ('".$productNo."','".$qantity."','".$revenue."')";
mysql_query($sql4) or die ("false6".mysql_error());
$query5 = "UPDATE chocolate SET inventory = '$NewInventory' where id = '$productID'";
mysql_query($query5) or die ("false7".mysql_error());

if($sql3 && $sql4 && sql5)
{
	
header('location:EnsureOrder.php?id='.$id.'');
}
}
else if($buy=="car"){
$costC=$qantity*$selling;
$sql6="insert into `Car` (`customer_id`, `product_name`, `num`, `cost`) VALUES ('".$id."','".$chocolatename."','".$qantity."','".$costC."')";
mysql_query($sql6) or die ("false6".mysql_error());
if($sql6)
{
header('location:flavors.php?id='.$id.'');
}

}

?>