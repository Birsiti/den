<? require_once ('templates/top.php'); 
if ($_SESSION ['user_id']);
$query = "SELECT * FROM Categorii WHERE name = '$p_name' AND password='$p_password'";
$cat = mysqli_query ($dbconect, $query);
if (!$cat){
		exit('ERROR query');
}while ($arr=mysqli_fetch_array($cat)){
	?>
	<option>
	name = "<?=arr['id'];
			?>"
	</option>
<?	
}
?>
<h1>Товар</h1>
<form method="post" action="login.php" enctype= "multipart/form-data">

	<div class="form-group">
    <label for="name">Название продукта</label>
    <input required type="name" class="form-control" id="name" name="name" placeholder="name">
  </div>
  <div class="form-group">
    <label for="code">Код товара</label>
    <input required type="code" class="form-control" id="code" name="code" placeholder="code">
  </div>
  <div class="form-group">
    <label for="prise">Цена</label>
    <input required type="prise" class="form-control" id="prise" name="prise" placeholder="prise">
  </div>
   <div class="form-group">
    <label for="exampleInputFile">Файл с картинкой</label>
    <input type="file" id="exampleInputFile">
    </div>
	<script src="//cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>