<? require_once ('templates/top.php'); 
if(isset($_SESSION['used_id'])){
	if($_POST){
$erors=[];
/*назначение переменных*/
$name=$_POST['name'];
$code=$_POST['code'];
$prise=$_POST['prise'];
$catalog=$_POST['catalog'];
$picture='';



if (!$name){$erors[]='Заполните поле';
}
if (!$code){$erors[]='Заполните поле';
}
if (!$prise){$erors[]='Заполните поле';
}
	if ($_FILES){
 
		$tmp_name=$_FILES['picture']['tmp_name'];
		$filename=$_FILES['picture']['name']['date(y_m_d_h_i_s)'];
		$dir='/media/uploads/';
		$file_new_name=$_SERVER['DOCUMENT_ROOT'].$dir;
		$full_path=$file_new_name.$filename;
		if (move_uploaded_file($tmp_name,$full_path)){
			$picture=$filename;
		}
			
	}
/*обращение к базе reg*/
if (empty ($erors)) {
	$qeri="INSERT INTO tovar VALUES(
	NULL,
	'$name',
	'$code',
	'$ckeditor',
	'$catalog',
	'$picture',
	NOW(),
	'',
	'show',
	'$prise'
	)";
	$cat=mysqli_query($dbconect, $qeri);
	if (!$cat){exit ('EROR');
	}
?>
	<script>
	document.location.href='index.php';
	</script>	
<?	
} else {
	foreach ($erors as $arr){
	echo "<div class='errors'>";
	echo $arr;
	echo "</div>";}
}
echo '<pre>';	
print_r($_POST);
echo '</pre>';	
}


?>


<h1>Товар</h1>
<form method="post" action="kabinet.php" enctype= "multipart/form-data">

	<div class="form-group">
    <label for="name">Название продукта</label>
    <input required type="name" class="form-control" id="name" name="name" placeholder="name">
  </div>
  <div class="form-group">
    <label for="code">Код товара</label>
    <input required type="code" class="form-control" id="code" name="code" placeholder="code">
  </div>
  <select name="catalog">
  <?
  	$query = "SELECT * FROM Categorii where showhide = 'show'";
$cat = mysqli_query ($dbconect, $query);
if (!$cat){
		exit('ERROR query');
}while ($arr=mysqli_fetch_array($cat)){
	?>
	<option value="<?=$arr['id'];?>">
	<?=$arr['name'];?>
	</option>
<?
}
?>
  </select>
  <div class="form-group">
    <label for="prise">Цена</label>
    <input required type="prise" class="form-control" id="prise" name="prise" placeholder="prise">
  </div>
   <div class="form-group">
    <label for="exampleInputFile">Файл с картинкой</label>
    <input type="file" name="picture" id="exampleInputFile">
    </div>
	<!--редактор  ckeditor -->
	<form id="form2" name="form2" method="post" action="">
    <textarea name="ckeditor" id="editor1" class="ckeditor" cols="45" rows="5"></textarea>
	<button type="submit" class="">Добавить</button>
	
</form>
	<?
}
require_once ('templates/botton.php'); 
?>
<!--редактор  ckeditor -->
	
	<script type="text/javascript" src="media/ckeditor/ckeditor.js">
<script type="text/javascript">
    CKEDITOR.replace( 'editor1');
</script>