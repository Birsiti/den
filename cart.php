<? require_once ('templates/top.php'); 

if(isset($_GET['url'])){
	echo "Спасибо, жди звонка";
} 
if($_COOKIE){
	$summa = 0;
	$poz = 1;
	?>
	<table class="table table-inverse">
	  <thead>
    <tr>
      <th>#</th>
      <th>Фото</th>
	  <th>Название</th>
	  <th>Цена</th>
      <th>Количество</th>
	  <th>Удолить</th>
      
    </tr>
  </thead>
	<?php
	foreach($_COOKIE as $key => $value){
		$id=(int)$key;
		if ($id>0){
			$query="SELECT * FROM Tovar WHERE id=$id";
			$res=mysqli_query($dbconect,$query);
		   $arr=mysqli_fetch_array($res);
		   $summa += $arr['prise'];
		   $poz++;
		   ?>
    <tr>
      <td scope="row"><?=$poz?></td>
      <td><img src="media/uploads/<?=$arr['picters']?>" width="200px" >
	<p><?=$arr['body']?></p></td>
      <td><?=$arr['name']?></td>
      <td><?=$arr['prise']?></td>
	  <td><?=$value?></td>
	  <td>
	  <form method='post' action="addcart.php">
		<input type="hidden" value="<?=$arr['id'];?>" name="id"/>
		<p><?=$arr['body']?></p>
		<button type="submit" class="btn btn-danger-outline">Danger</button>
		</form>
		</td>
    </tr> 
		   <?php
		}
		
	?>
  


<?php	

	}
}
?>
<tr>
<td>Итого</td>
<td><?=$summa?></td>

</tr>
</table>
<form method="post" action="order.php">
	<div class="form-group">
    <label for="email">email</label>
    <input required type="text" class="form-control" id="email" name="email" placeholder="email">
  </div>
  <div class="form-group">
    <label for="phone">phone</label>
    <input required type="phone" class="form-control" id="phone" name="phone" placeholder="phone">
  </div>
  <div class="form-group">
    <label for="others">Комент</label>
    <input required type="others" class="form-control" id="others" name="others" placeholder="others">
  </div>


  <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php
?>