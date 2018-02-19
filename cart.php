<? require_once ('templates/top.php'); 
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
<?php
?>