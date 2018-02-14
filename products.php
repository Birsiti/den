<? require_once ('templates/top.php'); 
	
$query="SELECT * FROM Tovar";
$cat=mysqli_query($dbconect,$query);
if (!$cat){
	exit($query);
}
while ($arr=mysqli_fetch_array($cat)){
	?>

	<div>
	<div class='col-md-4'>
		<h3><?=$arr['name'];?> </h3>
	<img src="/media/uploads/<?=($arr['picters']!=''?$arr['picters']:'net-photo.png')?>" width="250" haight="250">
	</div>
	</div>
	<?
}
?>






<? require_once ('templates/botton.php'); ?>