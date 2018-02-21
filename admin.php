<? require_once ('templates/top.php'); 
	
$query="SELECT * FROM orders";
$res=mysqli_query($dbconect,$query);
	if(!$res){
			exit ($query);
	}while ($order=mysqli_fetch_array($res)){
		echo $order['email'];
		$arr=unserialize($order['body']);
		print_r($arr);
		echo"<hr/>";		
	}	
			
require_once ('templates/botton.php'); ?>