<? 
require_once('config/config.php');
$id=(int)$_POST['id'];
$query="SELECT * FROM Tovar WHERE id=$id";
$res=mysqli_query($dbconect,$query);
if (!$res){
	exit($query);
}
$arr=mysqli_fetch_array($res);
?>
<img src="media/uploads/<?=$arr['picters']!=''?$arr['picters']:'about.jpg'?>" width="250" >

<form method='post' action="addcart.php">
<input type="hidden" value="<?=$arr['id'];?>" name='id'/>
<input type="hidden" value="1" name='count'/>
<p><?=$arr['body']?></p>
<p>Дата:<?=$arr['putdate']?></p>
<p>Цена:<?=$arr['prise']?></p>





<button type="submit" class="btn btn-primary-outline">Купить</button>
</form>