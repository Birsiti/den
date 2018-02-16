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
	<a href='#' class='link' data_id="<?=$arr['id'];
	?>">
		
	<img src="/media/uploads/<?=($arr['picters']!=''?$arr['picters']:'net-photo.png')?>" width="250" haight="250">
	</a>
	</div>
	</div>
	<?
}
?>






<? require_once ('templates/botton.php'); ?>