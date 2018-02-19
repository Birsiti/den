<?php
$id=(int)$_POST['id'];

if($_POST['count']){
	$count=(int)$_POST['count'];
	$time = time()+3600;
}else{
	$count = '';
	$time = time()-1;
}
setcookie($id,$count,$time);
header('location:cart.php');
?>