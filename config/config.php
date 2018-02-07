<?php
$dblocation='localhost'; 
$dbname='den'; 
$dbuses='root';
$dbpassword='';
$dbconect=mysqli_connect($dblocation, $dbuses, $dbpassword, $dbname);
if (!$dbconect){
	exit ('error DB');
}
