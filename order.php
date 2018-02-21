<?php
require_once ('config/config.php');

if($_POST){
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$others=$_POST['others'];
			$arr=[];
	if ($_COOKIE){

		foreach($_COOKIE as $key=>$value){
			$id=(int)$key;
			if($id>0){
				$arr[$key]=$value;
				setcookie($key,'',time()-1);
				
			}
		}
	}
	$query= "INSERT INTO orders VALUES(
	null,
	0,
	'$phone',
	'$email',
	'$others',
	'".serialize($arr)."',
	NOW(),
	'new'
	)";
	$res=mysqli_query($dbconect,$query);
	if(!$res){
			exit ($query);
		}
		header('location: cart.php?url=thankeupage');
}
?>