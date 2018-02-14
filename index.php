<? require_once ('templates/top.php'); 
if (isset ($_GET['url'])){
	$url=$_GET['url'];
	} else{$url='index';}
	
$query="SELECT * FROM maintexts WHERE url='$url'";

$adr=mysqli_query($dbconect,$query);
if (!$adr){
exit ('error query');}

$ar=mysqli_fetch_array ($adr);



?>

<h2> <?=$ar['name'];?> </h2>
<div>
<?=$ar['body'];?>
</div>

<h2> Тут что то будет: </h2>


<? require_once ('templates/botton.php'); ?>